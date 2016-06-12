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
 * The consumtion data
 * @package autoScout24
 * @subpackage data
 */


/**
 * The consumtion data
 * @package autoScout24
 * @subpackage data
 */
class VehicleConsumptionLiquid {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $combined The fuel consumption of the vehicle in mixed driving conditions
	 * @param string $extra_urban The fuel consumption of the vehicle in highway driving conditions
	 * @param string $urban The fuel consumption of the vehicle in city driving conditions
	 */
	function __construct($combined = null, $extra_urban = null, $urban = null){
		$this->combined = $combined;
		$this->extra_urban = $extra_urban;
		$this->urban = $urban;
	}
	
	
	/**
	 * Value of the fuel consumption of the vehicle in mixed driving conditions
	 */
	private $combined;
		
	/**
	 * Gets the fuel consumption of the vehicle in mixed driving conditions
	 * @return string
	 *		The fuel consumption of the vehicle in mixed driving conditions
	 */
	function getCombined() {
		return $this->combined;
	}
	
	/**
	 * Sets the fuel consumption of the vehicle in mixed driving conditions
	 * @param string $combined
	 *		New value for the fuel consumption of the vehicle in mixed driving conditions
	 */
	function setCombined($combined) {
		$this->combined = $combined;
	}
	
	/**
	 * Value of the fuel consumption of the vehicle in highway driving conditions
	 */
	private $extra_urban;
		
	/**
	 * Gets the fuel consumption of the vehicle in highway driving conditions
	 * @return string
	 *		The fuel consumption of the vehicle in highway driving conditions
	 */
	function getExtraUrban() {
		return $this->extra_urban;
	}
	
	/**
	 * Sets the fuel consumption of the vehicle in highway driving conditions
	 * @param string $extra_urban
	 *		New value for the fuel consumption of the vehicle in highway driving conditions
	 */
	function setExtraUrban($extra_urban) {
		$this->extra_urban = $extra_urban;
	}
	
	/**
	 * Value of the fuel consumption of the vehicle in city driving conditions
	 */
	private $urban;
		
	/**
	 * Gets the fuel consumption of the vehicle in city driving conditions
	 * @return string
	 *		The fuel consumption of the vehicle in city driving conditions
	 */
	function getUrban() {
		return $this->urban;
	}
	
	/**
	 * Sets the fuel consumption of the vehicle in city driving conditions
	 * @param string $urban
	 *		New value for the fuel consumption of the vehicle in city driving conditions
	 */
	function setUrban($urban) {
		$this->urban = $urban;
	}
}