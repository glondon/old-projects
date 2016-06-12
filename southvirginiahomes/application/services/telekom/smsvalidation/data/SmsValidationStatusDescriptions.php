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
 * Status descriptions for the Telekom service Send SMS - Phone number validation
 * @package smsValidation
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Send SMS - Phone number validation
 * @package smsValidation
 * @subpackage data
 */
interface SmsValidationStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0002 of the service smsValidation:
	 *
	 * "Die übergebene Mitteilung war zu lang."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_GERMAN = "Die übergebene Mitteilung war zu lang.";
	
	/**
	 * English description of the status code 0002 of the service smsValidation:
	 *
	 * "The message sent was too long."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH = "The message sent was too long.";
	
	/**
	 * German description of the status code 0003 of the service smsValidation:
	 *
	 * "Es wurden keine Empfängerrufnummern übergeben oder keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate)"
	 * @var string
	 */
	const RECIPIENT_INVALID_DESCRIPTION_GERMAN = "Es wurden keine Empfängerrufnummern übergeben oder keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate)";
	
	/**
	 * English description of the status code 0003 of the service smsValidation:
	 *
	 * "No recipient number was transferred or none of the transferred phone numbers were valid. (See Phone number formats)"
	 * @var string
	 */
	const RECIPIENT_INVALID_DESCRIPTION_ENGLISH = "No recipient number was transferred or none of the transferred phone numbers were valid. (See Phone number formats)";
	
	/**
	 * German description of the status code 0005 of the service smsValidation:
	 *
	 * "Es wurde kein Empfängername übergeben oder der übergebene Empfängername war gültig. (Siehe Rufnummernformate)"
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_GERMAN = "Es wurde kein Empfängername übergeben oder der übergebene Empfängername war gültig. (Siehe Rufnummernformate)";
	
	/**
	 * English description of the status code 0005 of the service smsValidation:
	 *
	 * "No recipient was transferred or the recipient was not valid. (See Phone number formats)"
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_ENGLISH = "No recipient was transferred or the recipient was not valid. (See Phone number formats)";
	
	/**
	 * German description of the status code 0102 of the service smsValidation:
	 *
	 * "Validierung fehlgeschlagen."
	 * @var string
	 */
	const VALIDATION_FAILED_DESCRIPTION_GERMAN = "Validierung fehlgeschlagen.";
	
	/**
	 * English description of the status code 0102 of the service smsValidation:
	 *
	 * "Validation failed."
	 * @var string
	 */
	const VALIDATION_FAILED_DESCRIPTION_ENGLISH = "Validation failed.";
	
	/**
	 * German description of the status code 0103 of the service smsValidation:
	 *
	 * "Ungültige Rufnummer. (Siehe Rufnummernformate)"
	 * @var string
	 */
	const INVALID_NUMBER_DESCRIPTION_GERMAN = "Ungültige Rufnummer. (Siehe Rufnummernformate)";
	
	/**
	 * English description of the status code 0103 of the service smsValidation:
	 *
	 * "Invalid number. (See Phone number formats)"
	 * @var string
	 */
	const INVALID_NUMBER_DESCRIPTION_ENGLISH = "Invalid number. (See Phone number formats)";
	
	/**
	 * German description of the status code 0104 of the service smsValidation:
	 *
	 * "Die Rufnummer ist nicht validiert."
	 * @var string
	 */
	const NOT_VALIDATED_DESCRIPTION_GERMAN = "Die Rufnummer ist nicht validiert.";
	
	/**
	 * English description of the status code 0104 of the service smsValidation:
	 *
	 * "The number is not validated."
	 * @var string
	 */
	const NOT_VALIDATED_DESCRIPTION_ENGLISH = "The number is not validated.";
	
	/**
	 * German description of the status code 0106 of the service smsValidation:
	 *
	 * "Die Rufnummer wurde bereits validiert."
	 * @var string
	 */
	const ALREADY_VALIDATED_DESCRIPTION_GERMAN = "Die Rufnummer wurde bereits validiert.";
	
	/**
	 * English description of the status code 0106 of the service smsValidation:
	 *
	 * "The number is already validated."
	 * @var string
	 */
	const ALREADY_VALIDATED_DESCRIPTION_ENGLISH = "The number is already validated.";
	
	/**
	 * German description of the status code 0107 of the service smsValidation:
	 *
	 * "Für die angegebene Rufnummer wurde bereits eine Validierung gestartet."
	 * @var string
	 */
	const VALIDATION_IN_PROGRESS_DESCRIPTION_GERMAN = "Für die angegebene Rufnummer wurde bereits eine Validierung gestartet.";
	
	/**
	 * English description of the status code 0107 of the service smsValidation:
	 *
	 * "A validation has already started for the specified phone number."
	 * @var string
	 */
	const VALIDATION_IN_PROGRESS_DESCRIPTION_ENGLISH = "A validation has already started for the specified phone number.";
	
	/**
	 * German description of the status code 0108 of the service smsValidation:
	 *
	 * "Die Rufnummer kann nicht validiert werden, da für sie kein Validierungsprozess gestartet wurde."
	 * @var string
	 */
	const NO_VALIDATION_IN_PROGRESS_DESCRIPTION_GERMAN = "Die Rufnummer kann nicht validiert werden, da für sie kein Validierungsprozess gestartet wurde.";
	
	/**
	 * English description of the status code 0108 of the service smsValidation:
	 *
	 * "The phone number cannot be validated as no validation process has been started for it."
	 * @var string
	 */
	const NO_VALIDATION_IN_PROGRESS_DESCRIPTION_ENGLISH = "The phone number cannot be validated as no validation process has been started for it.";
	
	/**
	 * German description of the status code 0109 of the service smsValidation:
	 *
	 * "Die zu validierende Rufnummer ist gesperrt."
	 * @var string
	 */
	const NUMBER_SUSPENDED_DESCRIPTION_GERMAN = "Die zu validierende Rufnummer ist gesperrt.";
	
	/**
	 * English description of the status code 0109 of the service smsValidation:
	 *
	 * "The phone number to be validated is blocked."
	 * @var string
	 */
	const NUMBER_SUSPENDED_DESCRIPTION_ENGLISH = "The phone number to be validated is blocked.";
}