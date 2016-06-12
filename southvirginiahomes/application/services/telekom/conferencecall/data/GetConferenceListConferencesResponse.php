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
 * Die Liste der Konferenzen.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Die Liste der Konferenzen.
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceListConferencesResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $conferenceID Die ID einer Konferenz
	 */
	function __construct($conferenceID = null){
		$this->conferenceID = $conferenceID;
	}
	
	
	/**
	 * Value of die ID einer Konferenz
	 */
	private $conferenceID;
		
	/**
	 * Gets die ID einer Konferenz
	 * @return string
	 *		Die ID einer Konferenz
	 */
	function getConferenceID() {
		return $this->conferenceID;
	}
	
	/**
	 * Sets die ID einer Konferenz
	 * @param string $conferenceID
	 *		New value for die ID einer Konferenz
	 */
	function setConferenceID($conferenceID) {
		$this->conferenceID = $conferenceID;
	}
}