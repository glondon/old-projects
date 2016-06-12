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
 * Status descriptions for the Telekom service Send MMS
 * @package sendMms
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Send MMS
 * @package sendMms
 * @subpackage data
 */
interface SendMmsStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0002 of the service sendMms:
	 *
	 * "Die zu sendende Nachricht ist zu lang."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_GERMAN = "Die zu sendende Nachricht ist zu lang.";
	
	/**
	 * English description of the status code 0002 of the service sendMms:
	 *
	 * "The message to be sent is too long."
	 * @var string
	 */
	const MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH = "The message to be sent is too long.";
	
	/**
	 * German description of the status code 0003 of the service sendMms:
	 *
	 * "Keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate) "
	 * @var string
	 */
	const RECIPIENTS_INVALID_DESCRIPTION_GERMAN = "Keine der übergebenen Rufnummern war gültig. (Siehe Rufnummernformate) ";
	
	/**
	 * English description of the status code 0003 of the service sendMms:
	 *
	 * "None of the phone numbers were valid. (See Phone number formats)"
	 * @var string
	 */
	const RECIPIENTS_INVALID_DESCRIPTION_ENGLISH = "None of the phone numbers were valid. (See Phone number formats)";
	
	/**
	 * German description of the status code 0004 of the service sendMms:
	 *
	 * "Es wurden zu viele Rufnummern übergeben."
	 * @var string
	 */
	const TOO_MANY_NUMBERS_DESCRIPTION_GERMAN = "Es wurden zu viele Rufnummern übergeben.";
	
	/**
	 * English description of the status code 0004 of the service sendMms:
	 *
	 * "Too many numbers have been past."
	 * @var string
	 */
	const TOO_MANY_NUMBERS_DESCRIPTION_ENGLISH = "Too many numbers have been past.";
	
	/**
	 * German description of the status code 0005 of the service sendMms:
	 *
	 * "Der Absendername ist ungültig."
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_GERMAN = "Der Absendername ist ungültig.";
	
	/**
	 * English description of the status code 0005 of the service sendMms:
	 *
	 * "The name of the sender is invalid."
	 * @var string
	 */
	const SENDER_NAME_INVALID_DESCRIPTION_ENGLISH = "The name of the sender is invalid.";
	
	/**
	 * German description of the status code 0006 of the service sendMms:
	 *
	 * "Es wurde keine Nachricht übergeben."
	 * @var string
	 */
	const MESSAGE_INVALID_DESCRIPTION_GERMAN = "Es wurde keine Nachricht übergeben.";
	
	/**
	 * English description of the status code 0006 of the service sendMms:
	 *
	 * "No message was specified."
	 * @var string
	 */
	const MESSAGE_INVALID_DESCRIPTION_ENGLISH = "No message was specified.";
	
	/**
	 * German description of the status code 0007 of the service sendMms:
	 *
	 * "Es wurde kein Betreff angegeben."
	 * @var string
	 */
	const SUBJECT_MISSING_DESCRIPTION_GERMAN = "Es wurde kein Betreff angegeben.";
	
	/**
	 * English description of the status code 0007 of the service sendMms:
	 *
	 * "The subject is not specified."
	 * @var string
	 */
	const SUBJECT_MISSING_DESCRIPTION_ENGLISH = "The subject is not specified.";
	
	/**
	 * German description of the status code 0008 of the service sendMms:
	 *
	 * "Der Betreff ist zu lang."
	 * @var string
	 */
	const SUBJECT_TOO_LONG_DESCRIPTION_GERMAN = "Der Betreff ist zu lang.";
	
	/**
	 * English description of the status code 0008 of the service sendMms:
	 *
	 * "The subject is too long."
	 * @var string
	 */
	const SUBJECT_TOO_LONG_DESCRIPTION_ENGLISH = "The subject is too long.";
	
	/**
	 * German description of the status code 0009 of the service sendMms:
	 *
	 * "Das Empfängernetzwerk wird nicht unterstützt."
	 * @var string
	 */
	const DESTINATION_INVALID_DESCRIPTION_GERMAN = "Das Empfängernetzwerk wird nicht unterstützt.";
	
	/**
	 * English description of the status code 0009 of the service sendMms:
	 *
	 * "The recipient is part of an unsupported destination network."
	 * @var string
	 */
	const DESTINATION_INVALID_DESCRIPTION_ENGLISH = "The recipient is part of an unsupported destination network.";
	
	/**
	 * German description of the status code 0010 of the service sendMms:
	 *
	 * "Einige Nachrichten konnten nicht zugestellt werden."
	 * @var string
	 */
	const MESSAGES_UNDELIVERED_DESCRIPTION_GERMAN = "Einige Nachrichten konnten nicht zugestellt werden.";
	
	/**
	 * English description of the status code 0010 of the service sendMms:
	 *
	 * "Some messages could not be delivered."
	 * @var string
	 */
	const MESSAGES_UNDELIVERED_DESCRIPTION_ENGLISH = "Some messages could not be delivered.";
	
	/**
	 * German description of the status code 0011 of the service sendMms:
	 *
	 * "Der Anhang ist zu groß."
	 * @var string
	 */
	const ATTACHMENT_TOO_BIG_DESCRIPTION_GERMAN = "Der Anhang ist zu groß.";
	
	/**
	 * English description of the status code 0011 of the service sendMms:
	 *
	 * "The attachment is too big."
	 * @var string
	 */
	const ATTACHMENT_TOO_BIG_DESCRIPTION_ENGLISH = "The attachment is too big.";
	
	/**
	 * German description of the status code 0012 of the service sendMms:
	 *
	 * "Der Dateiname fehlt."
	 * @var string
	 */
	const FILE_NAME_MISSING_DESCRIPTION_GERMAN = "Der Dateiname fehlt.";
	
	/**
	 * English description of the status code 0012 of the service sendMms:
	 *
	 * "The file name is missing."
	 * @var string
	 */
	const FILE_NAME_MISSING_DESCRIPTION_ENGLISH = "The file name is missing.";
	
	/**
	 * German description of the status code 0013 of the service sendMms:
	 *
	 * "Der Dateityp des Anhangs fehlt."
	 * @var string
	 */
	const CONTENT_TYPE_MISSING_DESCRIPTION_GERMAN = "Der Dateityp des Anhangs fehlt.";
	
	/**
	 * English description of the status code 0013 of the service sendMms:
	 *
	 * "The content type is missing"
	 * @var string
	 */
	const CONTENT_TYPE_MISSING_DESCRIPTION_ENGLISH = "The content type is missing";
	
	/**
	 * German description of the status code 0014 of the service sendMms:
	 *
	 * "Der Anhang wurde nicht in base64 codiert."
	 * @var string
	 */
	const ATTACHMENT_ENCODING_INVALID_DESCRIPTION_GERMAN = "Der Anhang wurde nicht in base64 codiert.";
	
	/**
	 * English description of the status code 0014 of the service sendMms:
	 *
	 * "The attachment is not base64 encoded."
	 * @var string
	 */
	const ATTACHMENT_ENCODING_INVALID_DESCRIPTION_ENGLISH = "The attachment is not base64 encoded.";
	
	/**
	 * German description of the status code 0015 of the service sendMms:
	 *
	 * "Der Dateityp des Anhangs wird nicht unterstützt."
	 * @var string
	 */
	const CONTENT_TYPE_INVALID_DESCRIPTION_GERMAN = "Der Dateityp des Anhangs wird nicht unterstützt.";
	
	/**
	 * English description of the status code 0015 of the service sendMms:
	 *
	 * "The file type of the attachment is not supported."
	 * @var string
	 */
	const CONTENT_TYPE_INVALID_DESCRIPTION_ENGLISH = "The file type of the attachment is not supported.";
}