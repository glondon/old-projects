<?php
/*
 * This file is part of the Telekom PHP SDK
 * Copyright 2010 Deutsche Telekom AG
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Client class which requests an STS token from the Security Token Server
 * @package common
 * @subpackage client
 */

/**
 * 
 */
require_once dirname(__FILE__).'/../data/STSToken.php';

/**
 * Client class which requests an STS token from the Security Token Server
 * @package common
 * @subpackage client
 */
class STSClient {
	
	/**
	 * Requests an STS token specifying username and password
	 * @param string $username The Telekom username
	 * @param string $password The Telekom password
	 * @param array[int]mixed $additional_curl_options Optional: additional cURL options (e.g. proxy options)
	 * @link http://www.php.net/manual/en/function.curl-setopt.php Avaliable cURL options
	 * @return STSToken The requested STS token.
	 */
	static function getToken($username, $password, $additional_curl_options = null) {
		$curl_session = curl_init('https://sts.idm.telekom.com/rest-v1/tokens/odg');
		
		$curl_options = array(
			CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
			CURLOPT_USERPWD => $username.':'.$password,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HEADER => true,
			CURLOPT_FAILONERROR => true
		);
		
		if($additional_curl_options != null) {
			$curl_options = $curl_options + $additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			$match_groups = array();
			
			preg_match('/Expires: (.*)\R/', $curl_response, $match_groups);
			
			$response_header_valid_until = $match_groups[1]; 
			
			preg_match('/\{.*\}/', $curl_response, $match_groups);
			
			$response_array = json_decode($match_groups[0], true);
			
			return new STSToken($response_array['token'], strtotime($response_header_valid_until));
		} else {
			if(curl_getinfo($curl_session, CURLINFO_HTTP_CODE) == 401) {
				throw new Exception("Unauthorized");
			} else {
				throw new Exception(curl_error($curl_session));
			}
		}
	}
}
?>