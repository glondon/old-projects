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
 * Telekom status information
 * @package common
 * @subpackage data
 */

/**
 * Telekom status information
 * @package common
 * @subpackage data
 */
class TelekomServiceStatusResponse {
	private $statusCode;
	private $statusConstant;
	private $statusMessage;
	private $statusDescriptionGerman;
	private $statusDescriptionEnglish;
	
	/**
	 * Konstructs a Telekom status information object
	 * @param String $statusCode The status code
	 * @param int $statusConstant The status constant
	 * @param String $statusMessage The status message
	 * @param String $statusDescriptionGerman The german description of the status message
	 * @param String $statusDescriptionEnglish The english description of the status message
	 */
	function __construct($statusCode, $statusConstant, $statusMessage, $statusDescriptionGerman, $statusDescriptionEnglish) {
		$this->statusCode = $statusCode;
		$this->statusConstant = $statusConstant;
		$this->statusMessage = $statusMessage;
		$this->statusDescriptionGerman = $statusDescriptionGerman;
		$this->statusDescriptionEnglish = $statusDescriptionEnglish;
	}
	
	/**
	 * Retrieves the status code
	 * @return string The status code
	 */
	function getStatusCode() {
		return $this->statusCode;
	}
	
	/**
	 * Retrieves the status constant.
	 * 
	 * It can be compared to predefined status constants defined in the
	 * corresponding service status constants interface.
	 * @return int The status constant.
	 */
	function getStatusConstant() {
		return $this->statusConstant;
	}
	
	/**
	 * Retrieves the status message
	 * @return string The status message
	 */
	function getStatusMessage() {
		return $this->statusMessage;
	}
	
	/**
	 * Retrieves the german description of the status message
	 * @return string The german description of the status message
	 */
	function getStatusDescriptionGerman() {
		return $this->statusDescriptionGerman;
	}
	
	/**
	 * Retrieves the english description of the status message
	 * @return string The english description of the status message
	 */
	function getStatusDescriptionEnglish() {
		return $this->statusDescriptionEnglish;
	}
}
?>