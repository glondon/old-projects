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
 * Die Detailinformationen der Konferenz.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Die Detailinformationen der Konferenz.
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceStatusConferenceDetailResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $name Kurze Bezeichnung der Konferenz.
	 * @param string $description Statusnachricht
	 * @param string $duration Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $joinConfirm Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 */
	function __construct($name = null, $description = null, $duration = null, $joinConfirm = null){
		$this->name = $name;
		$this->description = $description;
		$this->duration = $duration;
		$this->joinConfirm = $joinConfirm;
	}
	
	
	/**
	 * Value of kurze Bezeichnung der Konferenz.
	 */
	private $name;
		
	/**
	 * Gets kurze Bezeichnung der Konferenz.
	 * @return string
	 *		Kurze Bezeichnung der Konferenz.
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * Sets kurze Bezeichnung der Konferenz.
	 * @param string $name
	 *		New value for kurze Bezeichnung der Konferenz.
	 */
	function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Value of statusnachricht
	 */
	private $description;
		
	/**
	 * Gets statusnachricht
	 * @return string
	 *		Statusnachricht
	 */
	function getDescription() {
		return $this->description;
	}
	
	/**
	 * Sets statusnachricht
	 * @param string $description
	 *		New value for statusnachricht
	 */
	function setDescription($description) {
		$this->description = $description;
	}
	
	/**
	 * Value of maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 */
	private $duration;
		
	/**
	 * Gets maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @return string
	 *		Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 */
	function getDuration() {
		return $this->duration;
	}
	
	/**
	 * Sets maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $duration
	 *		New value for maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 */
	function setDuration($duration) {
		$this->duration = $duration;
	}
	
	/**
	 * Value of bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 */
	private $joinConfirm;
		
	/**
	 * Gets bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @return string
	 *		Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 */
	function getJoinConfirm() {
		return $this->joinConfirm;
	}
	
	/**
	 * Sets bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @param string $joinConfirm
	 *		New value for bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 */
	function setJoinConfirm($joinConfirm) {
		$this->joinConfirm = $joinConfirm;
	}
}