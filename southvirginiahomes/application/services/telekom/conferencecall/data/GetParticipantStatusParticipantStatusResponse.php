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
 * Status des Konferenzteilnehmers.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Status des Konferenzteilnehmers.
 * @package conferenceCall
 * @subpackage data
 */
class GetParticipantStatusParticipantStatusResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $number Die gewählte Telefonnummer.
	 * @param string $last_reason Grund eines Verbindungsabbruchs.
	 * @param string $status Statuscode
	 * @param string $muted Stummschaltung des Teilnehmers.
	 * @param string $last_access_time Zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 */
	function __construct($number = null, $last_reason = null, $status = null, $muted = null, $last_access_time = null){
		$this->number = $number;
		$this->last_reason = $last_reason;
		$this->status = $status;
		$this->muted = $muted;
		$this->last_access_time = $last_access_time;
	}
	
	
	/**
	 * Value of die gewählte Telefonnummer.
	 */
	private $number;
		
	/**
	 * Gets die gewählte Telefonnummer.
	 * @return string
	 *		Die gewählte Telefonnummer.
	 */
	function getNumber() {
		return $this->number;
	}
	
	/**
	 * Sets die gewählte Telefonnummer.
	 * @param string $number
	 *		New value for die gewählte Telefonnummer.
	 */
	function setNumber($number) {
		$this->number = $number;
	}
	
	/**
	 * Value of grund eines Verbindungsabbruchs.
	 */
	private $last_reason;
		
	/**
	 * Gets grund eines Verbindungsabbruchs.
	 * @return string
	 *		Grund eines Verbindungsabbruchs.
	 */
	function getLastReason() {
		return $this->last_reason;
	}
	
	/**
	 * Sets grund eines Verbindungsabbruchs.
	 * @param string $last_reason
	 *		New value for grund eines Verbindungsabbruchs.
	 */
	function setLastReason($last_reason) {
		$this->last_reason = $last_reason;
	}
	
	/**
	 * Value of statuscode
	 */
	private $status;
		
	/**
	 * Gets statuscode
	 * @return string
	 *		Statuscode
	 */
	function getStatus() {
		return $this->status;
	}
	
	/**
	 * Sets statuscode
	 * @param string $status
	 *		New value for statuscode
	 */
	function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * Value of stummschaltung des Teilnehmers.
	 */
	private $muted;
		
	/**
	 * Gets stummschaltung des Teilnehmers.
	 * @return string
	 *		Stummschaltung des Teilnehmers.
	 */
	function getMuted() {
		return $this->muted;
	}
	
	/**
	 * Sets stummschaltung des Teilnehmers.
	 * @param string $muted
	 *		New value for stummschaltung des Teilnehmers.
	 */
	function setMuted($muted) {
		$this->muted = $muted;
	}
	
	/**
	 * Value of zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 */
	private $last_access_time;
		
	/**
	 * Gets zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 * @return string
	 *		Zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 */
	function getLastAccessTime() {
		return $this->last_access_time;
	}
	
	/**
	 * Sets zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 * @param string $last_access_time
	 *		New value for zeitstempel der letzten Statusaktualisierung, formatiert nach ISO8601.
	 */
	function setLastAccessTime($last_access_time) {
		$this->last_access_time = $last_access_time;
	}
}