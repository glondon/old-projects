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
 * A list of vehicle build type ids to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of vehicle build type ids to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersBodies {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $body_id The vehicle build type id
	 */
	function __construct($body_id = null){
		$this->body_id = $body_id;
	}
	
	
	/**
	 * Value of the vehicle build type id
	 */
	private $body_id;
		
	/**
	 * Gets the vehicle build type id
	 * @return array[int]string
	 *		The vehicle build type id
	 */
	function getBodyId() {
		return $this->body_id;
	}
	
	/**
	 * Sets the vehicle build type id
	 * @param array[int]string $body_id
	 *		New value for the vehicle build type id
	 */
	function setBodyId($body_id) {
		$this->body_id = $body_id;
	}
}