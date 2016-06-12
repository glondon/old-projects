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
 * Auflistung der Unterkonten
 * @package quota
 * @subpackage data
 */


/**
 * Auflistung der Unterkonten
 * @package quota
 * @subpackage data
 */
class GetAccountBalanceAccountsResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $account Konto-ID des Unterkontos
	 * @param string $credits Kontostand des Unterkontos
	 */
	function __construct($account = null, $credits = null){
		$this->account = $account;
		$this->credits = $credits;
	}
	
	
	/**
	 * Value of konto-ID des Unterkontos
	 */
	private $account;
		
	/**
	 * Gets konto-ID des Unterkontos
	 * @return string
	 *		Konto-ID des Unterkontos
	 */
	function getAccount() {
		return $this->account;
	}
	
	/**
	 * Sets konto-ID des Unterkontos
	 * @param string $account
	 *		New value for konto-ID des Unterkontos
	 */
	function setAccount($account) {
		$this->account = $account;
	}
	
	/**
	 * Value of kontostand des Unterkontos
	 */
	private $credits;
		
	/**
	 * Gets kontostand des Unterkontos
	 * @return string
	 *		Kontostand des Unterkontos
	 */
	function getCredits() {
		return $this->credits;
	}
	
	/**
	 * Sets kontostand des Unterkontos
	 * @param string $credits
	 *		New value for kontostand des Unterkontos
	 */
	function setCredits($credits) {
		$this->credits = $credits;
	}
}