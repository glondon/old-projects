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
 * A security token getter which stores username and password. These are used
 * to obtain a security token from the security token server. If the token is
 * expired, a new token is obtained from the security token server using the
 * stored username and password.
 * @package common
 * @subpackage client
 */

/**
 * 
 */
require_once dirname(__FILE__).'/SecurityTokenGetter.php';

/**
 * A security token getter which stores username and password. These are used
 * to obtain a security token from the security token server. If the token is
 * expired, a new token is obtained from the security token server using the
 * stored username and password.
 * @package common
 * @subpackage client
 */
class DefaultSecurityTokenGetter implements SecurityTokenGetter {
	private $username;
	private $password;
	private $additional_curl_options;
	private $token;
	
	/**
	 * Constructor for the default security token getter. Username and password
	 * are stored and used for obtaining a security token from the security
	 * token server.
	 * @param String $username
	 * 		The Telekom username, which is used for authentication
	 * 		against the security token server.	
	 * @param String $password
	 * 		The Telekom password, which is used for authentication
	 * 		against the security token server.
	 * @param array[int]mixed $additional_curl_options Optional: additional cURL options (e.g. proxy options)
	 * @link http://www.php.net/manual/en/function.curl-setopt.php Avaliable cURL options
	 */
	function __construct($username, $password, $additional_curl_options = null) {
		$this->username = $username;
		$this->password = $password;
		$this->additional_curl_options = &$additional_curl_options;
	}
	
	/**
	 * If no token has been obtained or if the cached token is expired, a new
	 * token is obtained from the security token server. Otherwise a cached
	 * token is returned. 
	 * @return STSToken
	 * 	Security token, which is to be used for authentication.
	 */
	function getToken() {
		if($this->token == null || $this->token->getValidUntil() < time()) {
			$this->token = STSClient::getToken($this->username, $this->password, $this->additional_curl_options);
		}
		
		return $this->token;
	}
}
?>