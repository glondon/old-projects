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
 * Status descriptions for the Telekom service Send SMS
 * @package sendSms
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Send SMS
 * @package sendSms
 * @subpackage data
 */
interface SendSmsStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0002 of the service sendSms:
	 *
	 * "Die übergebene Mitteilung war zu lang."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_GERMAN = "Die übergebene Mitteilung war zu lang.";
	
	/**
	 * English description of the status code 0002 of the service sendSms:
	 *
	 * "The message sent was too long."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH = "The message sent was too long.";
	
	/**
	 * German description of the status code 0003 of the service sendSms:
	 *
	 * "Keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate)"
	 * @var string
	 */
	const INVALID_PHONE_NUMBER_FORMAT_DESCRIPTION_GERMAN = "Keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate)";
	
	/**
	 * English description of the status code 0003 of the service sendSms:
	 *
	 * "None of the phone numbers were valid. (See Phone number formats)"
	 * @var string
	 */
	const INVALID_PHONE_NUMBER_FORMAT_DESCRIPTION_ENGLISH = "None of the phone numbers were valid. (See Phone number formats)";
	
	/**
	 * German description of the status code 0004 of the service sendSms:
	 *
	 * "Es wurden zu viele Empfänger angegeben"
	 * @var string
	 */
	const TOO_MANY_NUMBERS_DESCRIPTION_GERMAN = "Es wurden zu viele Empfänger angegeben";
	
	/**
	 * English description of the status code 0004 of the service sendSms:
	 *
	 * "Too many recipients were specified."
	 * @var string
	 */
	const TOO_MANY_NUMBERS_DESCRIPTION_ENGLISH = "Too many recipients were specified.";
	
	/**
	 * German description of the status code 0005 of the service sendSms:
	 *
	 * "Der angegebene Sendername ist ungültig."
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_GERMAN = "Der angegebene Sendername ist ungültig.";
	
	/**
	 * English description of the status code 0005 of the service sendSms:
	 *
	 * "The specified sender name is invalid."
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_ENGLISH = "The specified sender name is invalid.";
	
	/**
	 * German description of the status code 0006 of the service sendSms:
	 *
	 * "Die übergebene Mitteilung enthält keine Zeichen."
	 * @var string
	 */
	const MESSAGE_INVALID_DESCRIPTION_GERMAN = "Die übergebene Mitteilung enthält keine Zeichen.";
	
	/**
	 * English description of the status code 0006 of the service sendSms:
	 *
	 * "The transferred message does not contain any characters."
	 * @var string
	 */
	const MESSAGE_INVALID_DESCRIPTION_ENGLISH = "The transferred message does not contain any characters.";
	
	/**
	 * German description of the status code 0007 of the service sendSms:
	 *
	 * "Es wurden keine Empfängerrufnummern übergeben."
	 * @var string
	 */
	const RECIPIENTS_INVALID_DESCRIPTION_GERMAN = "Es wurden keine Empfängerrufnummern übergeben.";
	
	/**
	 * English description of the status code 0007 of the service sendSms:
	 *
	 * "No recipient number was transferred."
	 * @var string
	 */
	const RECIPIENTS_INVALID_DESCRIPTION_ENGLISH = "No recipient number was transferred.";
}