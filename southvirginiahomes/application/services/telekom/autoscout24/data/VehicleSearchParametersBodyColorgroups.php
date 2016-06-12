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
 * A list of vehicle exterior Colour ids to search for
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of vehicle exterior Colour ids to search for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersBodyColorgroups {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $body_colorgroup_id The vehicle exterior color
	 */
	function __construct($body_colorgroup_id = null){
		$this->body_colorgroup_id = $body_colorgroup_id;
	}
	
	
	/**
	 * Value of the vehicle exterior color
	 */
	private $body_colorgroup_id;
		
	/**
	 * Gets the vehicle exterior color
	 * @return array[int]string
	 *		The vehicle exterior color
	 */
	function getBodyColorgroupId() {
		return $this->body_colorgroup_id;
	}
	
	/**
	 * Sets the vehicle exterior color
	 * @param array[int]string $body_colorgroup_id
	 *		New value for the vehicle exterior color
	 */
	function setBodyColorgroupId($body_colorgroup_id) {
		$this->body_colorgroup_id = $body_colorgroup_id;
	}
}