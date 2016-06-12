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
 * Base class of all Telekom service clients
 * @package common
 * @subpackage client
 */

/**
 * 
 */
require_once dirname(__FILE__).'/STSClient.php';
require_once dirname(__FILE__).'/DefaultSecurityTokenGetter.php';
require_once dirname(__FILE__).'/../data/STSToken.php';

/**
 * Base class of all Telekom service clients
 * @package common
 * @subpackage client
 */
class TelekomServiceClient {
	protected $token_getter;
	protected $environment;
	protected $additional_curl_options;
	
	/**
	 * Constructs a service client using username and password or a security token getter.
	 *
	 * @param String $environment
	 * 		The environment which should be used to access the service. Possible values are:
	 * 		<ul>
	 * 			<li>production</li>
	 * 			<li>sandbox</li>
	 * 			<li>mock</li>
	 * 		</ul>
	 * @param String|SecurityTokenGetter $username_or_token_getter
	 * 		Either the Telekom username or a security token getter. If a security token getter is specified, the password must be null.
	 * @param String $password
	 * 		The Telekom password. It must be null if a security token getter is specified.
	 */
	function __construct($environment, $username_or_token_getter, $password = null) {
		$this->environment = $environment;
		
		if($username_or_token_getter != null && $password != null && is_string($username_or_token_getter) && is_string($password)) {
			$this->token_getter = new DefaultSecurityTokenGetter($username_or_token_getter, $password, $this->additional_curl_options);
		} else if ($username_or_token_getter != null && $username_or_token_getter instanceof SecurityTokenGetter) {
			$this->token_getter = $username_or_token_getter;
		} else {
			throw new InvalidArgumentException("username_or_token_getter"); 
		}
	}

	/**
	 * Sets additional cURL options to be used by this client. Can be used to specify proxy settings.
	 * @param array[int]mixed $additional_curl_options Additional cURL options (e.g. proxy options)
	 * @link http://www.php.net/manual/en/function.curl-setopt.php Avaliable cURL options
	 */
	function use_additional_curl_options($additional_curl_options) {
		$this->additional_curl_options = $additional_curl_options;
	}
}
?>