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
 * List of previous owner, see ownerList
 * @package autoScout24
 * @subpackage data
 */


/**
 * List of previous owner, see ownerList
 * @package autoScout24
 * @subpackage data
 */
class VehiclePreviousOwner {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $count OwnerList
	 * @param VehiclePreviousOwnerOwner $owner OwnerList
	 */
	function __construct($count = null, $owner = null){
		$this->count = $count;
		$this->owner = $owner;
	}
	
	
	/**
	 * Value of ownerList
	 */
	private $count;
		
	/**
	 * Gets ownerList
	 * @return string
	 *		OwnerList
	 */
	function getCount() {
		return $this->count;
	}
	
	/**
	 * Sets ownerList
	 * @param string $count
	 *		New value for ownerList
	 */
	function setCount($count) {
		$this->count = $count;
	}
	
	/**
	 * Value of ownerList
	 */
	private $owner;
		
	/**
	 * Gets ownerList
	 * @return VehiclePreviousOwnerOwner
	 *		OwnerList
	 */
	function getOwner() {
		return $this->owner;
	}
	
	/**
	 * Sets ownerList
	 * @param VehiclePreviousOwnerOwner $owner
	 *		New value for ownerList
	 */
	function setOwner($owner) {
		$this->owner = $owner;
	}
}