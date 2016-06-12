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
 * The container for GetMakeModelTree request.
 * @package autoScout24
 * @subpackage data
 */


/**
 * The container for GetMakeModelTree request.
 * @package autoScout24
 * @subpackage data
 */
class MakeModelRequest {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $culture_id The RFC 1766 culture code. (e.g. 'de-DE')
	 * @param string $dealer_id This is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 * @param string $group_id If specified only the makes & models of cars inserted by this group of customers are returned.
	 */
	function __construct($culture_id = null, $dealer_id = null, $group_id = null){
		$this->culture_id = $culture_id;
		$this->dealer_id = $dealer_id;
		$this->group_id = $group_id;
	}
	
	
	/**
	 * Value of the RFC 1766 culture code. (e.g. 'de-DE')
	 */
	private $culture_id;
		
	/**
	 * Gets the RFC 1766 culture code. (e.g. 'de-DE')
	 * @return string
	 *		The RFC 1766 culture code. (e.g. 'de-DE')
	 */
	function getCultureId() {
		return $this->culture_id;
	}
	
	/**
	 * Sets the RFC 1766 culture code. (e.g. 'de-DE')
	 * @param string $culture_id
	 *		New value for the RFC 1766 culture code. (e.g. 'de-DE')
	 */
	function setCultureId($culture_id) {
		$this->culture_id = $culture_id;
	}
	
	/**
	 * Value of this is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 */
	private $dealer_id;
		
	/**
	 * Gets this is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 * @return string
	 *		This is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 */
	function getDealerId() {
		return $this->dealer_id;
	}
	
	/**
	 * Sets this is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 * @param string $dealer_id
	 *		New value for this is just another ID of a customer - the logic is thus the same as for customer ID. In case both IDs (customer & dealer) are provided, customer ID takes precedence and is used to identify the customer.
	 */
	function setDealerId($dealer_id) {
		$this->dealer_id = $dealer_id;
	}
	
	/**
	 * Value of if specified only the makes & models of cars inserted by this group of customers are returned.
	 */
	private $group_id;
		
	/**
	 * Gets if specified only the makes & models of cars inserted by this group of customers are returned.
	 * @return string
	 *		If specified only the makes & models of cars inserted by this group of customers are returned.
	 */
	function getGroupId() {
		return $this->group_id;
	}
	
	/**
	 * Sets if specified only the makes & models of cars inserted by this group of customers are returned.
	 * @param string $group_id
	 *		New value for if specified only the makes & models of cars inserted by this group of customers are returned.
	 */
	function setGroupId($group_id) {
		$this->group_id = $group_id;
	}
}