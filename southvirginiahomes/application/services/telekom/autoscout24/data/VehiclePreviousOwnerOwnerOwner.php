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
 * List of vehicle owners
 * @package autoScout24
 * @subpackage data
 */


/**
 * List of vehicle owners
 * @package autoScout24
 * @subpackage data
 */
class VehiclePreviousOwnerOwnerOwner {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $city The city the vehicle/vehicle owner is located in
	 * @param string $country The country id the vehicle is located in
	 * @param string $zip The center point (zip code) of a postal code radius search
	 * @param VehiclePreviousOwnerOwnerOwnerXCode $x_code The element x_code
	 */
	function __construct($city = null, $country = null, $zip = null, $x_code = null){
		$this->city = $city;
		$this->country = $country;
		$this->zip = $zip;
		$this->x_code = $x_code;
	}
	
	
	/**
	 * Value of the city the vehicle/vehicle owner is located in
	 */
	private $city;
		
	/**
	 * Gets the city the vehicle/vehicle owner is located in
	 * @return string
	 *		The city the vehicle/vehicle owner is located in
	 */
	function getCity() {
		return $this->city;
	}
	
	/**
	 * Sets the city the vehicle/vehicle owner is located in
	 * @param string $city
	 *		New value for the city the vehicle/vehicle owner is located in
	 */
	function setCity($city) {
		$this->city = $city;
	}
	
	/**
	 * Value of the country id the vehicle is located in
	 */
	private $country;
		
	/**
	 * Gets the country id the vehicle is located in
	 * @return string
	 *		The country id the vehicle is located in
	 */
	function getCountry() {
		return $this->country;
	}
	
	/**
	 * Sets the country id the vehicle is located in
	 * @param string $country
	 *		New value for the country id the vehicle is located in
	 */
	function setCountry($country) {
		$this->country = $country;
	}
	
	/**
	 * Value of the center point (zip code) of a postal code radius search
	 */
	private $zip;
		
	/**
	 * Gets the center point (zip code) of a postal code radius search
	 * @return string
	 *		The center point (zip code) of a postal code radius search
	 */
	function getZip() {
		return $this->zip;
	}
	
	/**
	 * Sets the center point (zip code) of a postal code radius search
	 * @param string $zip
	 *		New value for the center point (zip code) of a postal code radius search
	 */
	function setZip($zip) {
		$this->zip = $zip;
	}
	
	/**
	 * Value of the element x_code
	 */
	private $x_code;
		
	/**
	 * Gets the element x_code
	 * @return VehiclePreviousOwnerOwnerOwnerXCode
	 *		The element x_code
	 */
	function getXCode() {
		return $this->x_code;
	}
	
	/**
	 * Sets the element x_code
	 * @param VehiclePreviousOwnerOwnerOwnerXCode $x_code
	 *		New value for the element x_code
	 */
	function setXCode($x_code) {
		$this->x_code = $x_code;
	}
}