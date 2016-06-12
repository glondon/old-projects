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
 * OwnerList
 * @package autoScout24
 * @subpackage data
 */


/**
 * OwnerList
 * @package autoScout24
 * @subpackage data
 */
class VehiclePreviousOwnerOwner {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]VehiclePreviousOwnerOwnerOwner $owner List of owner
	 */
	function __construct($owner = null){
		$this->owner = $owner;
	}
	
	
	/**
	 * Value of list of owner
	 */
	private $owner;
		
	/**
	 * Gets list of owner
	 * @return array[int]VehiclePreviousOwnerOwnerOwner
	 *		List of owner
	 */
	function getOwner() {
		return $this->owner;
	}
	
	/**
	 * Sets list of owner
	 * @param array[int]VehiclePreviousOwnerOwnerOwner $owner
	 *		New value for list of owner
	 */
	function setOwner($owner) {
		$this->owner = $owner;
	}
}