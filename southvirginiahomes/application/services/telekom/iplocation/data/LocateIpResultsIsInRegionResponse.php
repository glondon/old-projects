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
 * Regionsinformationen zu der IP-Adresse
 * @package ipLocation
 * @subpackage data
 */


/**
 * Regionsinformationen zu der IP-Adresse
 * @package ipLocation
 * @subpackage data
 */
class LocateIpResultsIsInRegionResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $countryCode Feld wird derzeit nicht verwendet
	 * @param string $region Feld wird derzeit nicht verwendet
	 * @param string $regionName Der Name der Region (Siehe Tabelle)
	 */
	function __construct($countryCode = null, $region = null, $regionName = null){
		$this->countryCode = $countryCode;
		$this->region = $region;
		$this->regionName = $regionName;
	}
	
	
	/**
	 * Value of feld wird derzeit nicht verwendet
	 */
	private $countryCode;
		
	/**
	 * Gets feld wird derzeit nicht verwendet
	 * @return string
	 *		Feld wird derzeit nicht verwendet
	 */
	function getCountryCode() {
		return $this->countryCode;
	}
	
	/**
	 * Sets feld wird derzeit nicht verwendet
	 * @param string $countryCode
	 *		New value for feld wird derzeit nicht verwendet
	 */
	function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;
	}
	
	/**
	 * Value of feld wird derzeit nicht verwendet
	 */
	private $region;
		
	/**
	 * Gets feld wird derzeit nicht verwendet
	 * @return string
	 *		Feld wird derzeit nicht verwendet
	 */
	function getRegion() {
		return $this->region;
	}
	
	/**
	 * Sets feld wird derzeit nicht verwendet
	 * @param string $region
	 *		New value for feld wird derzeit nicht verwendet
	 */
	function setRegion($region) {
		$this->region = $region;
	}
	
	/**
	 * Value of der Name der Region (Siehe Tabelle)
	 */
	private $regionName;
		
	/**
	 * Gets der Name der Region (Siehe Tabelle)
	 * @return string
	 *		Der Name der Region (Siehe Tabelle)
	 */
	function getRegionName() {
		return $this->regionName;
	}
	
	/**
	 * Sets der Name der Region (Siehe Tabelle)
	 * @param string $regionName
	 *		New value for der Name der Region (Siehe Tabelle)
	 */
	function setRegionName($regionName) {
		$this->regionName = $regionName;
	}
}