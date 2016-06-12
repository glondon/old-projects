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
 * The avability data, see Avability
 * @package autoScout24
 * @subpackage data
 */


/**
 * The avability data, see Avability
 * @package autoScout24
 * @subpackage data
 */
class VehicleAvailability {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $begin The date when the article starts to be available
	 * @param string $end The date when the article will become unavailable
	 * @param string $last_change The date when this article has been changed the last time
	 */
	function __construct($begin = null, $end = null, $last_change = null){
		$this->begin = $begin;
		$this->end = $end;
		$this->last_change = $last_change;
	}
	
	
	/**
	 * Value of the date when the article starts to be available
	 */
	private $begin;
		
	/**
	 * Gets the date when the article starts to be available
	 * @return string
	 *		The date when the article starts to be available
	 */
	function getBegin() {
		return $this->begin;
	}
	
	/**
	 * Sets the date when the article starts to be available
	 * @param string $begin
	 *		New value for the date when the article starts to be available
	 */
	function setBegin($begin) {
		$this->begin = $begin;
	}
	
	/**
	 * Value of the date when the article will become unavailable
	 */
	private $end;
		
	/**
	 * Gets the date when the article will become unavailable
	 * @return string
	 *		The date when the article will become unavailable
	 */
	function getEnd() {
		return $this->end;
	}
	
	/**
	 * Sets the date when the article will become unavailable
	 * @param string $end
	 *		New value for the date when the article will become unavailable
	 */
	function setEnd($end) {
		$this->end = $end;
	}
	
	/**
	 * Value of the date when this article has been changed the last time
	 */
	private $last_change;
		
	/**
	 * Gets the date when this article has been changed the last time
	 * @return string
	 *		The date when this article has been changed the last time
	 */
	function getLastChange() {
		return $this->last_change;
	}
	
	/**
	 * Sets the date when this article has been changed the last time
	 * @param string $last_change
	 *		New value for the date when this article has been changed the last time
	 */
	function setLastChange($last_change) {
		$this->last_change = $last_change;
	}
}