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
 * Minimum emission class to search for.
 * @package autoScout24
 * @subpackage data
 */


/**
 * Minimum emission class to search for.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersEmission {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleSearchParametersEmissionClassId $class_id The emission class fort his vehicle
	 * @param VehicleSearchParametersEmissionStickerId $sticker_id The value of the environmental sticker. This is meaningful only for Germany
	 */
	function __construct($class_id = null, $sticker_id = null){
		$this->class_id = $class_id;
		$this->sticker_id = $sticker_id;
	}
	
	
	/**
	 * Value of the emission class fort his vehicle
	 */
	private $class_id;
		
	/**
	 * Gets the emission class fort his vehicle
	 * @return VehicleSearchParametersEmissionClassId
	 *		The emission class fort his vehicle
	 */
	function getClassId() {
		return $this->class_id;
	}
	
	/**
	 * Sets the emission class fort his vehicle
	 * @param VehicleSearchParametersEmissionClassId $class_id
	 *		New value for the emission class fort his vehicle
	 */
	function setClassId($class_id) {
		$this->class_id = $class_id;
	}
	
	/**
	 * Value of the value of the environmental sticker. This is meaningful only for Germany
	 */
	private $sticker_id;
		
	/**
	 * Gets the value of the environmental sticker. This is meaningful only for Germany
	 * @return VehicleSearchParametersEmissionStickerId
	 *		The value of the environmental sticker. This is meaningful only for Germany
	 */
	function getStickerId() {
		return $this->sticker_id;
	}
	
	/**
	 * Sets the value of the environmental sticker. This is meaningful only for Germany
	 * @param VehicleSearchParametersEmissionStickerId $sticker_id
	 *		New value for the value of the environmental sticker. This is meaningful only for Germany
	 */
	function setStickerId($sticker_id) {
		$this->sticker_id = $sticker_id;
	}
}