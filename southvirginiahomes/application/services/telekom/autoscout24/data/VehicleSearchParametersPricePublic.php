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
 * The minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
 * @package autoScout24
 * @subpackage data
 */


/**
 * The minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersPricePublic {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $from The minimum pricing the search results must have.Unit is Euro.
	 * @param string $to The maximum pricing the search results may have.Unit is Euro
	 * @param string $vat_type_id Whether the vehicle is VAT deductible
	 */
	function __construct($from = null, $to = null, $vat_type_id = null){
		$this->from = $from;
		$this->to = $to;
		$this->vat_type_id = $vat_type_id;
	}
	
	
	/**
	 * Value of the minimum pricing the search results must have.Unit is Euro.
	 */
	private $from;
		
	/**
	 * Gets the minimum pricing the search results must have.Unit is Euro.
	 * @return string
	 *		The minimum pricing the search results must have.Unit is Euro.
	 */
	function getFrom() {
		return $this->from;
	}
	
	/**
	 * Sets the minimum pricing the search results must have.Unit is Euro.
	 * @param string $from
	 *		New value for the minimum pricing the search results must have.Unit is Euro.
	 */
	function setFrom($from) {
		$this->from = $from;
	}
	
	/**
	 * Value of the maximum pricing the search results may have.Unit is Euro
	 */
	private $to;
		
	/**
	 * Gets the maximum pricing the search results may have.Unit is Euro
	 * @return string
	 *		The maximum pricing the search results may have.Unit is Euro
	 */
	function getTo() {
		return $this->to;
	}
	
	/**
	 * Sets the maximum pricing the search results may have.Unit is Euro
	 * @param string $to
	 *		New value for the maximum pricing the search results may have.Unit is Euro
	 */
	function setTo($to) {
		$this->to = $to;
	}
	
	/**
	 * Value of whether the vehicle is VAT deductible
	 */
	private $vat_type_id;
		
	/**
	 * Gets whether the vehicle is VAT deductible
	 * @return string
	 *		Whether the vehicle is VAT deductible
	 */
	function getVatTypeId() {
		return $this->vat_type_id;
	}
	
	/**
	 * Sets whether the vehicle is VAT deductible
	 * @param string $vat_type_id
	 *		New value for whether the vehicle is VAT deductible
	 */
	function setVatTypeId($vat_type_id) {
		$this->vat_type_id = $vat_type_id;
	}
}