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
 * The result of the operation newCall(Aufbau einer sequenziellen Sprachverbindung)
 * @package voiceCall
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation newCall(Aufbau einer sequenziellen Sprachverbindung)
 * @package voiceCall
 * @subpackage data
 */
class NewCallResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param string $sessionID Die Identifikationsnummer der Verbindung
	 */
	function __construct($status = null, $sessionID = null){
		parent::__construct($status);
		
		$this->sessionID = $sessionID;
	}
	
	
	/**
	 * Value of die Identifikationsnummer der Verbindung
	 */
	private $sessionID;
		
	/**
	 * Gets die Identifikationsnummer der Verbindung
	 * @return string
	 *		Die Identifikationsnummer der Verbindung
	 */
	function getSessionID() {
		return $this->sessionID;
	}
	
	/**
	 * Sets die Identifikationsnummer der Verbindung
	 * @param string $sessionID
	 *		New value for die Identifikationsnummer der Verbindung
	 */
	function setSessionID($sessionID) {
		$this->sessionID = $sessionID;
	}
}