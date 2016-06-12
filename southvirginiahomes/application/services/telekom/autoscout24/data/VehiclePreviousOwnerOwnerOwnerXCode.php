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
 * The element x_code
 * @package autoScout24
 * @subpackage data
 */


/**
 * The element x_code
 * @package autoScout24
 * @subpackage data
 */
class VehiclePreviousOwnerOwnerOwnerXCode {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $customer_type_id The customer type of the vehicle owner
	 */
	function __construct($customer_type_id = null){
		$this->customer_type_id = $customer_type_id;
	}
	
	
	/**
	 * Value of the customer type of the vehicle owner
	 */
	private $customer_type_id;
		
	/**
	 * Gets the customer type of the vehicle owner
	 * @return string
	 *		The customer type of the vehicle owner
	 */
	function getCustomerTypeId() {
		return $this->customer_type_id;
	}
	
	/**
	 * Sets the customer type of the vehicle owner
	 * @param string $customer_type_id
	 *		New value for the customer type of the vehicle owner
	 */
	function setCustomerTypeId($customer_type_id) {
		$this->customer_type_id = $customer_type_id;
	}
}