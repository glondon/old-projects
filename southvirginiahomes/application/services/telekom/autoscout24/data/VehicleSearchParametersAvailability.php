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
 * A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
 * @package autoScout24
 * @subpackage data
 */


/**
 * A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersAvailability {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleSearchParametersAvailabilityBegin $begin A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 * @param VehicleSearchParametersAvailabilityLastChange $last_change Maximum date the article has been changed lately
	 */
	function __construct($begin = null, $last_change = null){
		$this->begin = $begin;
		$this->last_change = $last_change;
	}
	
	
	/**
	 * Value of a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 */
	private $begin;
		
	/**
	 * Gets a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 * @return VehicleSearchParametersAvailabilityBegin
	 *		A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 */
	function getBegin() {
		return $this->begin;
	}
	
	/**
	 * Sets a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 * @param VehicleSearchParametersAvailabilityBegin $begin
	 *		New value for a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout databaseUnit is days
	 */
	function setBegin($begin) {
		$this->begin = $begin;
	}
	
	/**
	 * Value of maximum date the article has been changed lately
	 */
	private $last_change;
		
	/**
	 * Gets maximum date the article has been changed lately
	 * @return VehicleSearchParametersAvailabilityLastChange
	 *		Maximum date the article has been changed lately
	 */
	function getLastChange() {
		return $this->last_change;
	}
	
	/**
	 * Sets maximum date the article has been changed lately
	 * @param VehicleSearchParametersAvailabilityLastChange $last_change
	 *		New value for maximum date the article has been changed lately
	 */
	function setLastChange($last_change) {
		$this->last_change = $last_change;
	}
}