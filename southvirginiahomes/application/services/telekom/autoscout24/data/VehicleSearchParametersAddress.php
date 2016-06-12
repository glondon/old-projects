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
 * The adress
 * @package autoScout24
 * @subpackage data
 */


/**
 * The adress
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersAddress {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleSearchParametersAddressCountries $countries A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 * @param string $radius Maximum radius in kilometre around a vehicles location for a postal code radius search
	 * @param string $zip_code The center point (zip code) of a postal code radius search
	 * @param string $zip_country_id The country ID
	 */
	function __construct($countries = null, $radius = null, $zip_code = null, $zip_country_id = null){
		$this->countries = $countries;
		$this->radius = $radius;
		$this->zip_code = $zip_code;
		$this->zip_country_id = $zip_country_id;
	}
	
	
	/**
	 * Value of a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 */
	private $countries;
		
	/**
	 * Gets a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 * @return VehicleSearchParametersAddressCountries
	 *		A list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 */
	function getCountries() {
		return $this->countries;
	}
	
	/**
	 * Sets a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 * @param VehicleSearchParametersAddressCountries $countries
	 *		New value for a list of country ids the vehicle results may be located in.Germany has the country code “D”, other countries do follow a similar scheme.
	 */
	function setCountries($countries) {
		$this->countries = $countries;
	}
	
	/**
	 * Value of maximum radius in kilometre around a vehicles location for a postal code radius search
	 */
	private $radius;
		
	/**
	 * Gets maximum radius in kilometre around a vehicles location for a postal code radius search
	 * @return string
	 *		Maximum radius in kilometre around a vehicles location for a postal code radius search
	 */
	function getRadius() {
		return $this->radius;
	}
	
	/**
	 * Sets maximum radius in kilometre around a vehicles location for a postal code radius search
	 * @param string $radius
	 *		New value for maximum radius in kilometre around a vehicles location for a postal code radius search
	 */
	function setRadius($radius) {
		$this->radius = $radius;
	}
	
	/**
	 * Value of the center point (zip code) of a postal code radius search
	 */
	private $zip_code;
		
	/**
	 * Gets the center point (zip code) of a postal code radius search
	 * @return string
	 *		The center point (zip code) of a postal code radius search
	 */
	function getZipCode() {
		return $this->zip_code;
	}
	
	/**
	 * Sets the center point (zip code) of a postal code radius search
	 * @param string $zip_code
	 *		New value for the center point (zip code) of a postal code radius search
	 */
	function setZipCode($zip_code) {
		$this->zip_code = $zip_code;
	}
	
	/**
	 * Value of the country ID
	 */
	private $zip_country_id;
		
	/**
	 * Gets the country ID
	 * @return string
	 *		The country ID
	 */
	function getZipCountryId() {
		return $this->zip_country_id;
	}
	
	/**
	 * Sets the country ID
	 * @param string $zip_country_id
	 *		New value for the country ID
	 */
	function setZipCountryId($zip_country_id) {
		$this->zip_country_id = $zip_country_id;
	}
}