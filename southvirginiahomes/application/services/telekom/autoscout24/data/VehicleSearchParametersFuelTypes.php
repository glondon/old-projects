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
 * A list of none, one or multiple number of fuels to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of none, one or multiple number of fuels to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersFuelTypes {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $fuel_type_id The fuel type ID
	 */
	function __construct($fuel_type_id = null){
		$this->fuel_type_id = $fuel_type_id;
	}
	
	
	/**
	 * Value of the fuel type ID
	 */
	private $fuel_type_id;
		
	/**
	 * Gets the fuel type ID
	 * @return array[int]string
	 *		The fuel type ID
	 */
	function getFuelTypeId() {
		return $this->fuel_type_id;
	}
	
	/**
	 * Sets the fuel type ID
	 * @param array[int]string $fuel_type_id
	 *		New value for the fuel type ID
	 */
	function setFuelTypeId($fuel_type_id) {
		$this->fuel_type_id = $fuel_type_id;
	}
}