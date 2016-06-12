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
 * Ortsinformationen einer oder mehrerer IP-Adressen.
 * @package ipLocation
 * @subpackage data
 */


/**
 * Ortsinformationen einer oder mehrerer IP-Adressen.
 * @package ipLocation
 * @subpackage data
 */
class LocateIpResultsResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $ipAddress Die IP-Adresse.
	 * @param string $radius Feld wird derzeit nicht verwendet
	 * @param LocateIpResultsIsInRegionResponse $isInRegion Regionsinformationen zu der IP-Adresse
	 */
	function __construct($ipAddress = null, $radius = null, $isInRegion = null){
		$this->ipAddress = $ipAddress;
		$this->radius = $radius;
		$this->isInRegion = $isInRegion;
	}
	
	
	/**
	 * Value of die IP-Adresse.
	 */
	private $ipAddress;
		
	/**
	 * Gets die IP-Adresse.
	 * @return string
	 *		Die IP-Adresse.
	 */
	function getIpAddress() {
		return $this->ipAddress;
	}
	
	/**
	 * Sets die IP-Adresse.
	 * @param string $ipAddress
	 *		New value for die IP-Adresse.
	 */
	function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
	}
	
	/**
	 * Value of feld wird derzeit nicht verwendet
	 */
	private $radius;
		
	/**
	 * Gets feld wird derzeit nicht verwendet
	 * @return string
	 *		Feld wird derzeit nicht verwendet
	 */
	function getRadius() {
		return $this->radius;
	}
	
	/**
	 * Sets feld wird derzeit nicht verwendet
	 * @param string $radius
	 *		New value for feld wird derzeit nicht verwendet
	 */
	function setRadius($radius) {
		$this->radius = $radius;
	}
	
	/**
	 * Value of regionsinformationen zu der IP-Adresse
	 */
	private $isInRegion;
		
	/**
	 * Gets regionsinformationen zu der IP-Adresse
	 * @return LocateIpResultsIsInRegionResponse
	 *		Regionsinformationen zu der IP-Adresse
	 */
	function getIsInRegion() {
		return $this->isInRegion;
	}
	
	/**
	 * Sets regionsinformationen zu der IP-Adresse
	 * @param LocateIpResultsIsInRegionResponse $isInRegion
	 *		New value for regionsinformationen zu der IP-Adresse
	 */
	function setIsInRegion($isInRegion) {
		$this->isInRegion = $isInRegion;
	}
}