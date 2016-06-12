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
 * The container for GetLookUpData request.
 * @package autoScout24
 * @subpackage data
 */


/**
 * The container for GetLookUpData request.
 * @package autoScout24
 * @subpackage data
 */
class LookUpDataRequest {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $culture_id The RFC 1766 culture code. (e.g. 'de-DE')
	 */
	function __construct($culture_id = null){
		$this->culture_id = $culture_id;
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
}