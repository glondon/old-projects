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
 * Minimum and Maximum power rating the results must / may have.Unit is kW.
 * @package autoScout24
 * @subpackage data
 */


/**
 * Minimum and Maximum power rating the results must / may have.Unit is kW.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersKilowatt {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $from Lower limit
	 * @param string $to Upper limit
	 */
	function __construct($from = null, $to = null){
		$this->from = $from;
		$this->to = $to;
	}
	
	
	/**
	 * Value of lower limit
	 */
	private $from;
		
	/**
	 * Gets lower limit
	 * @return string
	 *		Lower limit
	 */
	function getFrom() {
		return $this->from;
	}
	
	/**
	 * Sets lower limit
	 * @param string $from
	 *		New value for lower limit
	 */
	function setFrom($from) {
		$this->from = $from;
	}
	
	/**
	 * Value of upper limit
	 */
	private $to;
		
	/**
	 * Gets upper limit
	 * @return string
	 *		Upper limit
	 */
	function getTo() {
		return $this->to;
	}
	
	/**
	 * Sets upper limit
	 * @param string $to
	 *		New value for upper limit
	 */
	function setTo($to) {
		$this->to = $to;
	}
}