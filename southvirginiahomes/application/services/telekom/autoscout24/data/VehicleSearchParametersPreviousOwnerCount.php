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
 * Minimum number of previous vehicle owners to look for.
 * @package autoScout24
 * @subpackage data
 */


/**
 * Minimum number of previous vehicle owners to look for.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersPreviousOwnerCount {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $from Integer
	 * @param string $to Integer
	 */
	function __construct($from = null, $to = null){
		$this->from = $from;
		$this->to = $to;
	}
	
	
	/**
	 * Value of integer
	 */
	private $from;
		
	/**
	 * Gets integer
	 * @return string
	 *		Integer
	 */
	function getFrom() {
		return $this->from;
	}
	
	/**
	 * Sets integer
	 * @param string $from
	 *		New value for integer
	 */
	function setFrom($from) {
		$this->from = $from;
	}
	
	/**
	 * Value of integer
	 */
	private $to;
		
	/**
	 * Gets integer
	 * @return string
	 *		Integer
	 */
	function getTo() {
		return $this->to;
	}
	
	/**
	 * Sets integer
	 * @param string $to
	 *		New value for integer
	 */
	function setTo($to) {
		$this->to = $to;
	}
}