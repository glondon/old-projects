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
 * The result of the operation getValidatedNumbers()
 * @package smsValidation
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation getValidatedNumbers()
 * @package smsValidation
 * @subpackage data
 */
class GetValidatedNumbersResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param array[int]GetValidatedNumbersNumbersResponse $numbers Eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 */
	function __construct($status = null, $numbers = null){
		parent::__construct($status);
		
		$this->numbers = $numbers;
	}
	
	
	/**
	 * Value of eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 */
	private $numbers;
		
	/**
	 * Gets eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 * @return array[int]GetValidatedNumbersNumbersResponse
	 *		Eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 */
	function getNumbers() {
		return $this->numbers;
	}
	
	/**
	 * Sets eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 * @param array[int]GetValidatedNumbersNumbersResponse $numbers
	 *		New value for eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
	 */
	function setNumbers($numbers) {
		$this->numbers = $numbers;
	}
}