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
 * Bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceStatusConferenceScheduleResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $recurring Serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 * @param string $notify Parameter wird derzeit nicht verwendet.
	 * @param string $timestamp Geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 */
	function __construct($recurring = null, $notify = null, $timestamp = null){
		$this->recurring = $recurring;
		$this->notify = $notify;
		$this->timestamp = $timestamp;
	}
	
	
	/**
	 * Value of serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 */
	private $recurring;
		
	/**
	 * Gets serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 * @return string
	 *		Serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 */
	function getRecurring() {
		return $this->recurring;
	}
	
	/**
	 * Sets serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 * @param string $recurring
	 *		New value for serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 */
	function setRecurring($recurring) {
		$this->recurring = $recurring;
	}
	
	/**
	 * Value of parameter wird derzeit nicht verwendet.
	 */
	private $notify;
		
	/**
	 * Gets parameter wird derzeit nicht verwendet.
	 * @return string
	 *		Parameter wird derzeit nicht verwendet.
	 */
	function getNotify() {
		return $this->notify;
	}
	
	/**
	 * Sets parameter wird derzeit nicht verwendet.
	 * @param string $notify
	 *		New value for parameter wird derzeit nicht verwendet.
	 */
	function setNotify($notify) {
		$this->notify = $notify;
	}
	
	/**
	 * Value of geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 */
	private $timestamp;
		
	/**
	 * Gets geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 * @return string
	 *		Geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 */
	function getTimestamp() {
		return $this->timestamp;
	}
	
	/**
	 * Sets geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 * @param string $timestamp
	 *		New value for geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 */
	function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
	}
}