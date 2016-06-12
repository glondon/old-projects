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
 * The result of the operation newParticipant()
 * @package conferenceCall
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation newParticipant()
 * @package conferenceCall
 * @subpackage data
 */
class NewParticipantResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param string $participantID Die ID eines Teilnehmers einer Konferenz
	 */
	function __construct($status = null, $participantID = null){
		parent::__construct($status);
		
		$this->participantID = $participantID;
	}
	
	
	/**
	 * Value of die ID eines Teilnehmers einer Konferenz
	 */
	private $participantID;
		
	/**
	 * Gets die ID eines Teilnehmers einer Konferenz
	 * @return string
	 *		Die ID eines Teilnehmers einer Konferenz
	 */
	function getParticipantID() {
		return $this->participantID;
	}
	
	/**
	 * Sets die ID eines Teilnehmers einer Konferenz
	 * @param string $participantID
	 *		New value for die ID eines Teilnehmers einer Konferenz
	 */
	function setParticipantID($participantID) {
		$this->participantID = $participantID;
	}
}