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
 * The emission data, see Emission
 * @package autoScout24
 * @subpackage data
 */


/**
 * The emission data, see Emission
 * @package autoScout24
 * @subpackage data
 */
class VehicleEmission {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $class_id Minimum emission class to search for
	 * @param string $co2_liquid The CO² emission value of the vehicle
	 * @param string $sticker_id The minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 */
	function __construct($class_id = null, $co2_liquid = null, $sticker_id = null){
		$this->class_id = $class_id;
		$this->co2_liquid = $co2_liquid;
		$this->sticker_id = $sticker_id;
	}
	
	
	/**
	 * Value of minimum emission class to search for
	 */
	private $class_id;
		
	/**
	 * Gets minimum emission class to search for
	 * @return string
	 *		Minimum emission class to search for
	 */
	function getClassId() {
		return $this->class_id;
	}
	
	/**
	 * Sets minimum emission class to search for
	 * @param string $class_id
	 *		New value for minimum emission class to search for
	 */
	function setClassId($class_id) {
		$this->class_id = $class_id;
	}
	
	/**
	 * Value of the CO² emission value of the vehicle
	 */
	private $co2_liquid;
		
	/**
	 * Gets the CO² emission value of the vehicle
	 * @return string
	 *		The CO² emission value of the vehicle
	 */
	function getCo2Liquid() {
		return $this->co2_liquid;
	}
	
	/**
	 * Sets the CO² emission value of the vehicle
	 * @param string $co2_liquid
	 *		New value for the CO² emission value of the vehicle
	 */
	function setCo2Liquid($co2_liquid) {
		$this->co2_liquid = $co2_liquid;
	}
	
	/**
	 * Value of the minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 */
	private $sticker_id;
		
	/**
	 * Gets the minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 * @return string
	 *		The minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 */
	function getStickerId() {
		return $this->sticker_id;
	}
	
	/**
	 * Sets the minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 * @param string $sticker_id
	 *		New value for the minimum value of the environmental sticker. This field is meaningful only for Germany. 
	 */
	function setStickerId($sticker_id) {
		$this->sticker_id = $sticker_id;
	}
}