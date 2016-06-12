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
 * Details des Teilnehmers der Konferenz-Vorlage.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Details des Teilnehmers der Konferenz-Vorlage.
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceTemplateParticipantParticipantResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $isInitiator Dieser Teilnehmer ist Initiator der Konferenz
	 */
	function __construct($firstName = null, $lastName = null, $number = null, $email = null, $isInitiator = null){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->number = $number;
		$this->email = $email;
		$this->isInitiator = $isInitiator;
	}
	
	
	/**
	 * Value of vorname des Teilnehmers.
	 */
	private $firstName;
		
	/**
	 * Gets vorname des Teilnehmers.
	 * @return string
	 *		Vorname des Teilnehmers.
	 */
	function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 * Sets vorname des Teilnehmers.
	 * @param string $firstName
	 *		New value for vorname des Teilnehmers.
	 */
	function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	
	/**
	 * Value of nachname des Teilnehmers.
	 */
	private $lastName;
		
	/**
	 * Gets nachname des Teilnehmers.
	 * @return string
	 *		Nachname des Teilnehmers.
	 */
	function getLastName() {
		return $this->lastName;
	}
	
	/**
	 * Sets nachname des Teilnehmers.
	 * @param string $lastName
	 *		New value for nachname des Teilnehmers.
	 */
	function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	
	/**
	 * Value of telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 */
	private $number;
		
	/**
	 * Gets telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @return string
	 *		Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 */
	function getNumber() {
		return $this->number;
	}
	
	/**
	 * Sets telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $number
	 *		New value for telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 */
	function setNumber($number) {
		$this->number = $number;
	}
	
	/**
	 * Value of e-Mailadresse des Teilnehmers
	 */
	private $email;
		
	/**
	 * Gets e-Mailadresse des Teilnehmers
	 * @return string
	 *		E-Mailadresse des Teilnehmers
	 */
	function getEmail() {
		return $this->email;
	}
	
	/**
	 * Sets e-Mailadresse des Teilnehmers
	 * @param string $email
	 *		New value for e-Mailadresse des Teilnehmers
	 */
	function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * Value of dieser Teilnehmer ist Initiator der Konferenz
	 */
	private $isInitiator;
		
	/**
	 * Gets dieser Teilnehmer ist Initiator der Konferenz
	 * @return string
	 *		Dieser Teilnehmer ist Initiator der Konferenz
	 */
	function getIsInitiator() {
		return $this->isInitiator;
	}
	
	/**
	 * Sets dieser Teilnehmer ist Initiator der Konferenz
	 * @param string $isInitiator
	 *		New value for dieser Teilnehmer ist Initiator der Konferenz
	 */
	function setIsInitiator($isInitiator) {
		$this->isInitiator = $isInitiator;
	}
}