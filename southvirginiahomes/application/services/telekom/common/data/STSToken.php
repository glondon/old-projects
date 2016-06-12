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
 * An STS token
 * @package common
 * @subpackage data
 */

/**
 * An STS token
 * @package common
 * @subpackage data
 */
class STSToken {
	private $token;
	private $validUntil;
	
	/**
	 * Retrieves the token string
	 * @return string The token string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Retrieves the expiration date
	 * @return int The UNIX timestamp of the expiration date
	 */
	public function getValidUntil() {
		return $this->validUntil;
	}
	
	/**
	 * Constructs an STS-Token with the specified values
	 * @param string $token The token string
	 * @param int $validUntil The UNIX timestamp of the expiration date
	 */
	public function __construct($token, $validUntil) {
		$this->token = $token;
		$this->validUntil = $validUntil;
	}
}
?>