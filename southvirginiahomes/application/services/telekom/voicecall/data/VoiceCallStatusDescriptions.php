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
 * Status descriptions for the Telekom service Voice Call
 * @package voiceCall
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Voice Call
 * @package voiceCall
 * @subpackage data
 */
interface VoiceCallStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0004 of the service voiceCall:
	 *
	 * "Die erste Rufnummer ist in keinem der unterstützten Rufnummernformate angegeben worden oder ungültig."
	 * @var string
	 */
	const A_NUMBER_INVALID_DESCRIPTION_GERMAN = "Die erste Rufnummer ist in keinem der unterstützten Rufnummernformate angegeben worden oder ungültig.";
	
	/**
	 * English description of the status code 0004 of the service voiceCall:
	 *
	 * "The first phone number has not been specified in any of the supported phone number formats, or is invalid."
	 * @var string
	 */
	const A_NUMBER_INVALID_DESCRIPTION_ENGLISH = "The first phone number has not been specified in any of the supported phone number formats, or is invalid.";
	
	/**
	 * German description of the status code 0005 of the service voiceCall:
	 *
	 * "Die erste Rufnummer darf nicht angerufen werden."
	 * @var string
	 */
	const A_NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN = "Die erste Rufnummer darf nicht angerufen werden.";
	
	/**
	 * English description of the status code 0005 of the service voiceCall:
	 *
	 * "The first phone number may not be called."
	 * @var string
	 */
	const A_NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH = "The first phone number may not be called.";
	
	/**
	 * German description of the status code 0006 of the service voiceCall:
	 *
	 * "Der Anruf an die erste Rufnummer wurde blockiert."
	 * @var string
	 */
	const A_NUMBER_BLOCKED_DESCRIPTION_GERMAN = "Der Anruf an die erste Rufnummer wurde blockiert.";
	
	/**
	 * English description of the status code 0006 of the service voiceCall:
	 *
	 * "The call to the first phone number has been blocked."
	 * @var string
	 */
	const A_NUMBER_BLOCKED_DESCRIPTION_ENGLISH = "The call to the first phone number has been blocked.";
	
	/**
	 * German description of the status code 0007 of the service voiceCall:
	 *
	 * "Die zweite Rufnummer ist in keinem der unterstützten Rufnummernformate angegeben worden oder ungültig."
	 * @var string
	 */
	const B_NUMBER_INVALID_DESCRIPTION_GERMAN = "Die zweite Rufnummer ist in keinem der unterstützten Rufnummernformate angegeben worden oder ungültig.";
	
	/**
	 * English description of the status code 0007 of the service voiceCall:
	 *
	 * "The second phone number has not been specified in any of the supported phone number formats, or is invalid."
	 * @var string
	 */
	const B_NUMBER_INVALID_DESCRIPTION_ENGLISH = "The second phone number has not been specified in any of the supported phone number formats, or is invalid.";
	
	/**
	 * German description of the status code 0008 of the service voiceCall:
	 *
	 * "Die zweite Rufnummer darf nicht angerufen werden."
	 * @var string
	 */
	const B_NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN = "Die zweite Rufnummer darf nicht angerufen werden.";
	
	/**
	 * English description of the status code 0008 of the service voiceCall:
	 *
	 * "The second phone number may not be called."
	 * @var string
	 */
	const B_NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH = "The second phone number may not be called.";
	
	/**
	 * German description of the status code 0009 of the service voiceCall:
	 *
	 * "Der Anruf an die zweite Rufnummer wurde blockiert."
	 * @var string
	 */
	const B_NUMBER_BLOCKED_DESCRIPTION_GERMAN = "Der Anruf an die zweite Rufnummer wurde blockiert.";
	
	/**
	 * English description of the status code 0009 of the service voiceCall:
	 *
	 * "The call to the second phone number has been blocked."
	 * @var string
	 */
	const B_NUMBER_BLOCKED_DESCRIPTION_ENGLISH = "The call to the second phone number has been blocked.";
	
	/**
	 * German description of the status code 0010 of the service voiceCall:
	 *
	 * "Der für die maximale Gesprächslaufzeit angegebene Wert ist ungültig oder zu groß."
	 * @var string
	 */
	const MAXDURATION_INVALID_DESCRIPTION_GERMAN = "Der für die maximale Gesprächslaufzeit angegebene Wert ist ungültig oder zu groß.";
	
	/**
	 * English description of the status code 0010 of the service voiceCall:
	 *
	 * "The value specified for the maximum call duration is invalid or too large."
	 * @var string
	 */
	const MAXDURATION_INVALID_DESCRIPTION_ENGLISH = "The value specified for the maximum call duration is invalid or too large.";
	
	/**
	 * German description of the status code 0011 of the service voiceCall:
	 *
	 * "Der für die Zeit bis zur Statusabfrage angegebene Wert ist ungültig."
	 * @var string
	 */
	const EXPIRATION_INVALID_DESCRIPTION_GERMAN = "Der für die Zeit bis zur Statusabfrage angegebene Wert ist ungültig.";
	
	/**
	 * English description of the status code 0011 of the service voiceCall:
	 *
	 * "The value specified for the time to the status request is invalid."
	 * @var string
	 */
	const EXPIRATION_INVALID_DESCRIPTION_ENGLISH = "The value specified for the time to the status request is invalid.";
	
	/**
	 * German description of the status code 0012 of the service voiceCall:
	 *
	 * "Die bei der Statusabfrage angegebene Identifikationsnummer ist ungültig oder unbekannt."
	 * @var string
	 */
	const SESSION_ID_INVALID_DESCRIPTION_GERMAN = "Die bei der Statusabfrage angegebene Identifikationsnummer ist ungültig oder unbekannt.";
	
	/**
	 * English description of the status code 0012 of the service voiceCall:
	 *
	 * "The ID number that was entered during the status request is invalid or not known."
	 * @var string
	 */
	const SESSION_ID_INVALID_DESCRIPTION_ENGLISH = "The ID number that was entered during the status request is invalid or not known.";
	
	/**
	 * German description of the status code 0013 of the service voiceCall:
	 *
	 * "Die bei der Statusabfrage in keepalive angegebene Zeitdauer ist ungültig."
	 * @var string
	 */
	const KEEPALIVE_INVALID_DESCRIPTION_GERMAN = "Die bei der Statusabfrage in keepalive angegebene Zeitdauer ist ungültig.";
	
	/**
	 * English description of the status code 0013 of the service voiceCall:
	 *
	 * "The duration specified during the status request in keepalive is invalid."
	 * @var string
	 */
	const KEEPALIVE_INVALID_DESCRIPTION_ENGLISH = "The duration specified during the status request in keepalive is invalid.";
	
	/**
	 * German description of the status code 0102 of the service voiceCall:
	 *
	 * "Das Wählen von Service-Rufnummern ist nicht gestattet."
	 * @var string
	 */
	const SERVICE_NUMBERS_NOT_ALLOWED_DESCRIPTION_GERMAN = "Das Wählen von Service-Rufnummern ist nicht gestattet.";
	
	/**
	 * English description of the status code 0102 of the service voiceCall:
	 *
	 * "Using service numbers is not permitted."
	 * @var string
	 */
	const SERVICE_NUMBERS_NOT_ALLOWED_DESCRIPTION_ENGLISH = "Using service numbers is not permitted.";
	
	/**
	 * German description of the status code 0104 of the service voiceCall:
	 *
	 * "Keine Telefonnummer angegeben."
	 * @var string
	 */
	const PHONE_NUMBER_NOT_GIVEN_DESCRIPTION_GERMAN = "Keine Telefonnummer angegeben.";
	
	/**
	 * English description of the status code 0104 of the service voiceCall:
	 *
	 * "No phone number was given."
	 * @var string
	 */
	const PHONE_NUMBER_NOT_GIVEN_DESCRIPTION_ENGLISH = "No phone number was given.";
	
	/**
	 * German description of the status code 0105 of the service voiceCall:
	 *
	 * "Zu viele Telefonnummern angegeben."
	 * @var string
	 */
	const TOO_MANY_PHONE_NUMBERS_DESCRIPTION_GERMAN = "Zu viele Telefonnummern angegeben.";
	
	/**
	 * English description of the status code 0105 of the service voiceCall:
	 *
	 * "Too many phone Numbers."
	 * @var string
	 */
	const TOO_MANY_PHONE_NUMBERS_DESCRIPTION_ENGLISH = "Too many phone Numbers.";
	
	/**
	 * German description of the status code 0106 of the service voiceCall:
	 *
	 * "Wert im Feld maxWait zu kurz oder zu lang."
	 * @var string
	 */
	const WAITING_TIME_TOO_SHORT_OR_TOO_LONG_DESCRIPTION_GERMAN = "Wert im Feld maxWait zu kurz oder zu lang.";
	
	/**
	 * English description of the status code 0106 of the service voiceCall:
	 *
	 * "Waiting time (maxWait) is too short or too long."
	 * @var string
	 */
	const WAITING_TIME_TOO_SHORT_OR_TOO_LONG_DESCRIPTION_ENGLISH = "Waiting time (maxWait) is too short or too long.";
}