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
 * Price range
 * @package autoScout24
 * @subpackage data
 */


/**
 * Price range
 * @package autoScout24
 * @subpackage data
 */
class VehiclePricesPrice {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $currency_id The currency for this article
	 * @param string $type The type of price based on dealer or public
	 * @param string $value The net or gross price of the vehicle, regardless of the currency depending on type.
	 * @param string $vat_type_id Indicates whether the vehicle is VAT deductible 
	 */
	function __construct($currency_id = null, $type = null, $value = null, $vat_type_id = null){
		$this->currency_id = $currency_id;
		$this->type = $type;
		$this->value = $value;
		$this->vat_type_id = $vat_type_id;
	}
	
	
	/**
	 * Value of the currency for this article
	 */
	private $currency_id;
		
	/**
	 * Gets the currency for this article
	 * @return string
	 *		The currency for this article
	 */
	function getCurrencyId() {
		return $this->currency_id;
	}
	
	/**
	 * Sets the currency for this article
	 * @param string $currency_id
	 *		New value for the currency for this article
	 */
	function setCurrencyId($currency_id) {
		$this->currency_id = $currency_id;
	}
	
	/**
	 * Value of the type of price based on dealer or public
	 */
	private $type;
		
	/**
	 * Gets the type of price based on dealer or public
	 * @return string
	 *		The type of price based on dealer or public
	 */
	function getType() {
		return $this->type;
	}
	
	/**
	 * Sets the type of price based on dealer or public
	 * @param string $type
	 *		New value for the type of price based on dealer or public
	 */
	function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * Value of the net or gross price of the vehicle, regardless of the currency depending on type.
	 */
	private $value;
		
	/**
	 * Gets the net or gross price of the vehicle, regardless of the currency depending on type.
	 * @return string
	 *		The net or gross price of the vehicle, regardless of the currency depending on type.
	 */
	function getValue() {
		return $this->value;
	}
	
	/**
	 * Sets the net or gross price of the vehicle, regardless of the currency depending on type.
	 * @param string $value
	 *		New value for the net or gross price of the vehicle, regardless of the currency depending on type.
	 */
	function setValue($value) {
		$this->value = $value;
	}
	
	/**
	 * Value of indicates whether the vehicle is VAT deductible 
	 */
	private $vat_type_id;
		
	/**
	 * Gets indicates whether the vehicle is VAT deductible 
	 * @return string
	 *		Indicates whether the vehicle is VAT deductible 
	 */
	function getVatTypeId() {
		return $this->vat_type_id;
	}
	
	/**
	 * Sets indicates whether the vehicle is VAT deductible 
	 * @param string $vat_type_id
	 *		New value for indicates whether the vehicle is VAT deductible 
	 */
	function setVatTypeId($vat_type_id) {
		$this->vat_type_id = $vat_type_id;
	}
}