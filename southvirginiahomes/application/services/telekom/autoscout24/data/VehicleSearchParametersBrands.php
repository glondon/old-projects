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
 * A list of none, one or multiple number of make identifiers to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of none, one or multiple number of make identifiers to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersBrands {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $brand_id The Make ID of the vehicle
	 */
	function __construct($brand_id = null){
		$this->brand_id = $brand_id;
	}
	
	
	/**
	 * Value of the Make ID of the vehicle
	 */
	private $brand_id;
		
	/**
	 * Gets the Make ID of the vehicle
	 * @return array[int]string
	 *		The Make ID of the vehicle
	 */
	function getBrandId() {
		return $this->brand_id;
	}
	
	/**
	 * Sets the Make ID of the vehicle
	 * @param array[int]string $brand_id
	 *		New value for the Make ID of the vehicle
	 */
	function setBrandId($brand_id) {
		$this->brand_id = $brand_id;
	}
}