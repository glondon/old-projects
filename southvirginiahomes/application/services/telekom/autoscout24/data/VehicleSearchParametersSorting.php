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
 * Specifies the column you want to sort for
 * @package autoScout24
 * @subpackage data
 */


/**
 * Specifies the column you want to sort for
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersSorting {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $descending Specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 * @param string $key Specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 */
	function __construct($descending = null, $key = null){
		$this->descending = $descending;
		$this->key = $key;
	}
	
	
	/**
	 * Value of specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 */
	private $descending;
		
	/**
	 * Gets specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 * @return string
	 *		Specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 */
	function getDescending() {
		return $this->descending;
	}
	
	/**
	 * Sets specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 * @param string $descending
	 *		New value for specifies the sorting direction. This member does only have an effect if an sorting_key has been provided.If “true”, results will be sorted in descending order. If “false” they’ll be sorted by ascending order
	 */
	function setDescending($descending) {
		$this->descending = $descending;
	}
	
	/**
	 * Value of specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 */
	private $key;
		
	/**
	 * Gets specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 * @return string
	 *		Specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 */
	function getKey() {
		return $this->key;
	}
	
	/**
	 * Sets specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 * @param string $key
	 *		New value for specifies the column you want to sort forKeys: age (sort by article age) artnum (sort by article number) body_colorgroup_id (sort by color) price_dealer (sort by dealeprice) fuel_id (sort by fuel) hits (sort by hits) leasingfinance (sort by leasing pirce) brand_id (sort by make) mileage (sort by mileage) killowat (sort by killowat power) pubstart (sort by insertion start) year (sort by day of registration) zip (sort by zip code) 
	 */
	function setKey($key) {
		$this->key = $key;
	}
}