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
 * A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
 * @package autoScout24
 * @subpackage data
 */


/**
 * A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersAvailabilityBegin {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $from DateTime
	 */
	function __construct($from = null){
		$this->from = $from;
	}
	
	
	/**
	 * Value of dateTime
	 */
	private $from;
		
	/**
	 * Gets dateTime
	 * @return string
	 *		DateTime
	 */
	function getFrom() {
		return $this->from;
	}
	
	/**
	 * Sets dateTime
	 * @param string $from
	 *		New value for dateTime
	 */
	function setFrom($from) {
		$this->from = $from;
	}
}