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
 * Maximum date the article has been changed lately
 * @package autoScout24
 * @subpackage data
 */


/**
 * Maximum date the article has been changed lately
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersAvailabilityLastChange {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $from Lower limit of date 
	 * @param string $to Upper limit of date
	 */
	function __construct($from = null, $to = null){
		$this->from = $from;
		$this->to = $to;
	}
	
	
	/**
	 * Value of lower limit of date 
	 */
	private $from;
		
	/**
	 * Gets lower limit of date 
	 * @return string
	 *		Lower limit of date 
	 */
	function getFrom() {
		return $this->from;
	}
	
	/**
	 * Sets lower limit of date 
	 * @param string $from
	 *		New value for lower limit of date 
	 */
	function setFrom($from) {
		$this->from = $from;
	}
	
	/**
	 * Value of upper limit of date
	 */
	private $to;
		
	/**
	 * Gets upper limit of date
	 * @return string
	 *		Upper limit of date
	 */
	function getTo() {
		return $this->to;
	}
	
	/**
	 * Sets upper limit of date
	 * @param string $to
	 *		New value for upper limit of date
	 */
	function setTo($to) {
		$this->to = $to;
	}
}