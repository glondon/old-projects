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
 * Eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
 * @package smsValidation
 * @subpackage data
 */


/**
 * Eine Liste der bereits validierten Rufnummern. der Form:[number - Die Rufnummer[validUntil - Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.]]
 * @package smsValidation
 * @subpackage data
 */
class GetValidatedNumbersNumbersResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $number Die Rufnummer
	 * @param string $validUntil Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 */
	function __construct($number = null, $validUntil = null){
		$this->number = $number;
		$this->validUntil = $validUntil;
	}
	
	
	/**
	 * Value of die Rufnummer
	 */
	private $number;
		
	/**
	 * Gets die Rufnummer
	 * @return string
	 *		Die Rufnummer
	 */
	function getNumber() {
		return $this->number;
	}
	
	/**
	 * Sets die Rufnummer
	 * @param string $number
	 *		New value for die Rufnummer
	 */
	function setNumber($number) {
		$this->number = $number;
	}
	
	/**
	 * Value of das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 */
	private $validUntil;
		
	/**
	 * Gets das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 * @return string
	 *		Das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 */
	function getValidUntil() {
		return $this->validUntil;
	}
	
	/**
	 * Sets das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 * @param string $validUntil
	 *		New value for das Ende des Gültigkeitszeitraumes. Standardmäßig null, d.h. unbegrenzte Gültigkeit.
	 */
	function setValidUntil($validUntil) {
		$this->validUntil = $validUntil;
	}
}