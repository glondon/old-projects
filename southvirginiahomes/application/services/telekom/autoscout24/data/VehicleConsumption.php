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
 * The consumption data, see ConsumptionData
 * @package autoScout24
 * @subpackage data
 */


/**
 * The consumption data, see ConsumptionData
 * @package autoScout24
 * @subpackage data
 */
class VehicleConsumption {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleConsumptionLiquid $liquid The consumtion data
	 */
	function __construct($liquid = null){
		$this->liquid = $liquid;
	}
	
	
	/**
	 * Value of the consumtion data
	 */
	private $liquid;
		
	/**
	 * Gets the consumtion data
	 * @return VehicleConsumptionLiquid
	 *		The consumtion data
	 */
	function getLiquid() {
		return $this->liquid;
	}
	
	/**
	 * Sets the consumtion data
	 * @param VehicleConsumptionLiquid $liquid
	 *		New value for the consumtion data
	 */
	function setLiquid($liquid) {
		$this->liquid = $liquid;
	}
}