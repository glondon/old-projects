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
 * Informationen über eine Konferenz.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Informationen über eine Konferenz.
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceStatusConferenceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $starttime Der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 * @param GetConferenceStatusConferenceDetailResponse $detail Die Detailinformationen der Konferenz.
	 * @param GetConferenceStatusConferenceScheduleResponse $schedule Bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @param array[int]GetConferenceStatusConferenceParticipantsResponse $participants Die Liste der Teilnehmer der Konferenz und Ihres Status.
	 */
	function __construct($starttime = null, $detail = null, $schedule = null, $account = null, $participants = null){
		$this->starttime = $starttime;
		$this->detail = $detail;
		$this->schedule = $schedule;
		$this->account = $account;
		$this->participants = $participants;
	}
	
	
	/**
	 * Value of der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 */
	private $starttime;
		
	/**
	 * Gets der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 * @return string
	 *		Der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 */
	function getStarttime() {
		return $this->starttime;
	}
	
	/**
	 * Sets der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 * @param string $starttime
	 *		New value for der Unix-Timestamp des Startpunktes der Konferenz in UTC-Zeit.Bei einer geplanten Konferenz ist dieses Feld leer (null).
	 */
	function setStarttime($starttime) {
		$this->starttime = $starttime;
	}
	
	/**
	 * Value of die Detailinformationen der Konferenz.
	 */
	private $detail;
		
	/**
	 * Gets die Detailinformationen der Konferenz.
	 * @return GetConferenceStatusConferenceDetailResponse
	 *		Die Detailinformationen der Konferenz.
	 */
	function getDetail() {
		return $this->detail;
	}
	
	/**
	 * Sets die Detailinformationen der Konferenz.
	 * @param GetConferenceStatusConferenceDetailResponse $detail
	 *		New value for die Detailinformationen der Konferenz.
	 */
	function setDetail($detail) {
		$this->detail = $detail;
	}
	
	/**
	 * Value of bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 */
	private $schedule;
		
	/**
	 * Gets bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 * @return GetConferenceStatusConferenceScheduleResponse
	 *		Bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 */
	function getSchedule() {
		return $this->schedule;
	}
	
	/**
	 * Sets bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 * @param GetConferenceStatusConferenceScheduleResponse $schedule
	 *		New value for bei einer geplanten Konferenz enthält dieses Feld die Planungsinformationen.Bei einer Ad-Hoc Konferenz ist dieses Feld leer (null).
	 */
	function setSchedule($schedule) {
		$this->schedule = $schedule;
	}
	
	/**
	 * Value of konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 */
	private $account;
		
	/**
	 * Gets konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return string
	 *		Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 */
	function getAccount() {
		return $this->account;
	}
	
	/**
	 * Sets konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @param string $account
	 *		New value for konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 */
	function setAccount($account) {
		$this->account = $account;
	}
	
	/**
	 * Value of die Liste der Teilnehmer der Konferenz und Ihres Status.
	 */
	private $participants;
		
	/**
	 * Gets die Liste der Teilnehmer der Konferenz und Ihres Status.
	 * @return array[int]GetConferenceStatusConferenceParticipantsResponse
	 *		Die Liste der Teilnehmer der Konferenz und Ihres Status.
	 */
	function getParticipants() {
		return $this->participants;
	}
	
	/**
	 * Sets die Liste der Teilnehmer der Konferenz und Ihres Status.
	 * @param array[int]GetConferenceStatusConferenceParticipantsResponse $participants
	 *		New value for die Liste der Teilnehmer der Konferenz und Ihres Status.
	 */
	function setParticipants($participants) {
		$this->participants = $participants;
	}
}