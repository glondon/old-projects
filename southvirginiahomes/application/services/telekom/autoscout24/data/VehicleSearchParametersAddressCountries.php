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
 * A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersAddressCountries {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $country_id A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 */
	function __construct($country_id = null){
		$this->country_id = $country_id;
	}
	
	
	/**
	 * Value of a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 */
	private $country_id;
		
	/**
	 * Gets a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 * @return array[int]string
	 *		A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 */
	function getCountryId() {
		return $this->country_id;
	}
	
	/**
	 * Sets a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 * @param array[int]string $country_id
	 *		New value for a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme. 
	 */
	function setCountryId($country_id) {
		$this->country_id = $country_id;
	}
}