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
 * The result of the operation callStatus()
 * @package voiceCall
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation callStatus()
 * @package voiceCall
 * @subpackage data
 */
class CallStatusResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param string $stateA Zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @param string $stateB Zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @param string $connectionTimeA Dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @param string $connectionTimeB Dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @param string $reasonA Grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @param string $reasonB Grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @param string $descriptionA Englische Beschreibung von reasona
	 * @param string $descriptionB Englische Beschreibung von reasonb
	 * @param string $be164 Rufnummer des zweiten Teilnehmers der angewählt wurde
	 * @param string $bindex Index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 */
	function __construct($status = null, $stateA = null, $stateB = null, $connectionTimeA = null, $connectionTimeB = null, $reasonA = null, $reasonB = null, $descriptionA = null, $descriptionB = null, $be164 = null, $bindex = null){
		parent::__construct($status);
		
		$this->stateA = $stateA;
		$this->stateB = $stateB;
		$this->connectionTimeA = $connectionTimeA;
		$this->connectionTimeB = $connectionTimeB;
		$this->reasonA = $reasonA;
		$this->reasonB = $reasonB;
		$this->descriptionA = $descriptionA;
		$this->descriptionB = $descriptionB;
		$this->be164 = $be164;
		$this->bindex = $bindex;
	}
	
	
	/**
	 * Value of zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	private $stateA;
		
	/**
	 * Gets zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @return string
	 *		Zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	function getStateA() {
		return $this->stateA;
	}
	
	/**
	 * Sets zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @param string $stateA
	 *		New value for zustand des Rufaufbaus der ersten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	function setStateA($stateA) {
		$this->stateA = $stateA;
	}
	
	/**
	 * Value of zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	private $stateB;
		
	/**
	 * Gets zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @return string
	 *		Zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	function getStateB() {
		return $this->stateB;
	}
	
	/**
	 * Sets zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 * @param string $stateB
	 *		New value for zustand des Rufaufbaus der zweiten Rufnummer:[IDLE Der Anruf wurde noch nicht aufgebaut.[CONNECTING Der Teilnehmer wird angerufen.[RINGING Das Telefon des Teilnehmers klingelt.[CONNECTED Der Teilnehmer ist verbunden.[DISCONNECTING Die Verbindung zum Teilnehmer wird beendet.[DISCONNECTED Die Verbindung zum Teilnehmer ist beendet.]]]]]]
	 */
	function setStateB($stateB) {
		$this->stateB = $stateB;
	}
	
	/**
	 * Value of dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	private $connectionTimeA;
		
	/**
	 * Gets dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @return string
	 *		Dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	function getConnectionTimeA() {
		return $this->connectionTimeA;
	}
	
	/**
	 * Sets dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @param string $connectionTimeA
	 *		New value for dauer des Anrufs beim ersten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	function setConnectionTimeA($connectionTimeA) {
		$this->connectionTimeA = $connectionTimeA;
	}
	
	/**
	 * Value of dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	private $connectionTimeB;
		
	/**
	 * Gets dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @return string
	 *		Dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	function getConnectionTimeB() {
		return $this->connectionTimeB;
	}
	
	/**
	 * Sets dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 * @param string $connectionTimeB
	 *		New value for dauer des Anrufs beim zweiten Teilnehmer in Sekunden.Ein Wert von -1 bedeutet, dass der Anruf noch nicht begonnen hat.
	 */
	function setConnectionTimeB($connectionTimeB) {
		$this->connectionTimeB = $connectionTimeB;
	}
	
	/**
	 * Value of grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	private $reasonA;
		
	/**
	 * Gets grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @return string
	 *		Grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	function getReasonA() {
		return $this->reasonA;
	}
	
	/**
	 * Sets grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @param string $reasonA
	 *		New value for grund für die Beendigung der Verbindung zum ersten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	function setReasonA($reasonA) {
		$this->reasonA = $reasonA;
	}
	
	/**
	 * Value of grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	private $reasonB;
		
	/**
	 * Gets grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @return string
	 *		Grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	function getReasonB() {
		return $this->reasonB;
	}
	
	/**
	 * Sets grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 * @param string $reasonB
	 *		New value for grund für die Beendigung der Verbindung zum zweiten Teilnehmer:[0 - Anruf noch nicht beendet.[1 - der Teilnehmer ist besetzt.[2 - der Teilnehmer hat den Anruf abgewiesen.[3 - der Teilnehmer konnte nicht erreicht werden bzw. hat nicht abgenommen.[4 - der Teilnehmer konnte aufgrund von Sperren nicht erreicht werden.[99 - ein interner Fehler ist aufgetreten.]]]]]]
	 */
	function setReasonB($reasonB) {
		$this->reasonB = $reasonB;
	}
	
	/**
	 * Value of englische Beschreibung von reasona
	 */
	private $descriptionA;
		
	/**
	 * Gets englische Beschreibung von reasona
	 * @return string
	 *		Englische Beschreibung von reasona
	 */
	function getDescriptionA() {
		return $this->descriptionA;
	}
	
	/**
	 * Sets englische Beschreibung von reasona
	 * @param string $descriptionA
	 *		New value for englische Beschreibung von reasona
	 */
	function setDescriptionA($descriptionA) {
		$this->descriptionA = $descriptionA;
	}
	
	/**
	 * Value of englische Beschreibung von reasonb
	 */
	private $descriptionB;
		
	/**
	 * Gets englische Beschreibung von reasonb
	 * @return string
	 *		Englische Beschreibung von reasonb
	 */
	function getDescriptionB() {
		return $this->descriptionB;
	}
	
	/**
	 * Sets englische Beschreibung von reasonb
	 * @param string $descriptionB
	 *		New value for englische Beschreibung von reasonb
	 */
	function setDescriptionB($descriptionB) {
		$this->descriptionB = $descriptionB;
	}
	
	/**
	 * Value of rufnummer des zweiten Teilnehmers der angewählt wurde
	 */
	private $be164;
		
	/**
	 * Gets rufnummer des zweiten Teilnehmers der angewählt wurde
	 * @return string
	 *		Rufnummer des zweiten Teilnehmers der angewählt wurde
	 */
	function getBe164() {
		return $this->be164;
	}
	
	/**
	 * Sets rufnummer des zweiten Teilnehmers der angewählt wurde
	 * @param string $be164
	 *		New value for rufnummer des zweiten Teilnehmers der angewählt wurde
	 */
	function setBe164($be164) {
		$this->be164 = $be164;
	}
	
	/**
	 * Value of index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 */
	private $bindex;
		
	/**
	 * Gets index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 * @return string
	 *		Index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 */
	function getBindex() {
		return $this->bindex;
	}
	
	/**
	 * Sets index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 * @param string $bindex
	 *		New value for index der Rufnummer des zweiten Teilnehmers, der angewählt wurde. Ein Wert 0 bedeutet, dass die erste B-Rufnummer angewählt wurde, 1 bedeutet, dass die zweite B-Rufnummer angewählt wurde usw.
	 */
	function setBindex($bindex) {
		$this->bindex = $bindex;
	}
}