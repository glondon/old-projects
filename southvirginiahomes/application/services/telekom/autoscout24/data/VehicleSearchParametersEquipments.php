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
 * A list of equipment feature-ids owned by a vehicle
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of equipment feature-ids owned by a vehicle
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersEquipments {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $equipment_id A list of equipment feature-ids owned by a vehicle
	 */
	function __construct($equipment_id = null){
		$this->equipment_id = $equipment_id;
	}
	
	
	/**
	 * Value of a list of equipment feature-ids owned by a vehicle
	 */
	private $equipment_id;
		
	/**
	 * Gets a list of equipment feature-ids owned by a vehicle
	 * @return array[int]string
	 *		A list of equipment feature-ids owned by a vehicle
	 */
	function getEquipmentId() {
		return $this->equipment_id;
	}
	
	/**
	 * Sets a list of equipment feature-ids owned by a vehicle
	 * @param array[int]string $equipment_id
	 *		New value for a list of equipment feature-ids owned by a vehicle
	 */
	function setEquipmentId($equipment_id) {
		$this->equipment_id = $equipment_id;
	}
}