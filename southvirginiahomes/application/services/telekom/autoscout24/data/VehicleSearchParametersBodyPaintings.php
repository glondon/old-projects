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
 * A list of paint type keys to include in the search
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of paint type keys to include in the search
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersBodyPaintings {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $body_painting_id The type of paint on the vehicle
	 */
	function __construct($body_painting_id = null){
		$this->body_painting_id = $body_painting_id;
	}
	
	
	/**
	 * Value of the type of paint on the vehicle
	 */
	private $body_painting_id;
		
	/**
	 * Gets the type of paint on the vehicle
	 * @return array[int]string
	 *		The type of paint on the vehicle
	 */
	function getBodyPaintingId() {
		return $this->body_painting_id;
	}
	
	/**
	 * Sets the type of paint on the vehicle
	 * @param array[int]string $body_painting_id
	 *		New value for the type of paint on the vehicle
	 */
	function setBodyPaintingId($body_painting_id) {
		$this->body_painting_id = $body_painting_id;
	}
}