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
 * A list of gear types to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of gear types to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersGearTypeIds {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $gear_type_id The gearing type of the vehicle
	 */
	function __construct($gear_type_id = null){
		$this->gear_type_id = $gear_type_id;
	}
	
	
	/**
	 * Value of the gearing type of the vehicle
	 */
	private $gear_type_id;
		
	/**
	 * Gets the gearing type of the vehicle
	 * @return array[int]string
	 *		The gearing type of the vehicle
	 */
	function getGearTypeId() {
		return $this->gear_type_id;
	}
	
	/**
	 * Sets the gearing type of the vehicle
	 * @param array[int]string $gear_type_id
	 *		New value for the gearing type of the vehicle
	 */
	function setGearTypeId($gear_type_id) {
		$this->gear_type_id = $gear_type_id;
	}
}