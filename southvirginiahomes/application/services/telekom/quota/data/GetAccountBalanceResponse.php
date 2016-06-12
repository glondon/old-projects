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
 * The result of the operation getAccountBalance(Kontostandsabfrage durchführen)
 * @package quota
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation getAccountBalance(Kontostandsabfrage durchführen)
 * @package quota
 * @subpackage data
 */
class GetAccountBalanceResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param array[int]GetAccountBalanceAccountsResponse $accounts Auflistung der Unterkonten
	 */
	function __construct($status = null, $accounts = null){
		parent::__construct($status);
		
		$this->accounts = $accounts;
	}
	
	
	/**
	 * Value of auflistung der Unterkonten
	 */
	private $accounts;
		
	/**
	 * Gets auflistung der Unterkonten
	 * @return array[int]GetAccountBalanceAccountsResponse
	 *		Auflistung der Unterkonten
	 */
	function getAccounts() {
		return $this->accounts;
	}
	
	/**
	 * Sets auflistung der Unterkonten
	 * @param array[int]GetAccountBalanceAccountsResponse $accounts
	 *		New value for auflistung der Unterkonten
	 */
	function setAccounts($accounts) {
		$this->accounts = $accounts;
	}
}