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
 * List of legally defined types of vehicles to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * List of legally defined types of vehicles to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersCategories {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $category_id The legal type of vehicle
	 */
	function __construct($category_id = null){
		$this->category_id = $category_id;
	}
	
	
	/**
	 * Value of the legal type of vehicle
	 */
	private $category_id;
		
	/**
	 * Gets the legal type of vehicle
	 * @return array[int]string
	 *		The legal type of vehicle
	 */
	function getCategoryId() {
		return $this->category_id;
	}
	
	/**
	 * Sets the legal type of vehicle
	 * @param array[int]string $category_id
	 *		New value for the legal type of vehicle
	 */
	function setCategoryId($category_id) {
		$this->category_id = $category_id;
	}
}