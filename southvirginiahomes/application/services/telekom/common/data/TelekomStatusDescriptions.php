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
 * Common status descriptions
 * @package common
 * @subpackage data
 */

/**
 * Common status descriptions
 * @package common
 * @subpackage data
 */
interface TelekomStatusDescriptions {
	/**
	 * German description of the status code 0000:
	 *
	 * "Der Aufruf war erfolgreich."
	 * @var string
	 */
	const SUCCESS_DESCRIPTION_GERMAN = "Der Aufruf war erfolgreich.";
	
	/**
	 * English description of the status code 0000:
	 *
	 * "The call was successful."
	 * @var string
	 */
	const SUCCESS_DESCRIPTION_ENGLISH = "The call was successful.";
	
	/**
	 * German description of the status code 0001:
	 *
	 * "Ein interner Fehler ist aufgetreten."
	 * @var string
	 */
	const INTERNAL_ERROR_DESCRIPTION_GERMAN = "Ein interner Fehler ist aufgetreten.";
	
	/**
	 * English description of the status code 0001:
	 *
	 * "An internal error occurred."
	 * @var string
	 */
	const INTERNAL_ERROR_DESCRIPTION_ENGLISH = "An internal error occurred.";
	
	/**
	 * German description of the status code 0015:
	 *
	 * "Die Umgebung ist ungültig."
	 * @var string
	 */
	const ENVIRONMENT_INVALID_DESCRIPTION_GERMAN = "Die Umgebung ist ungültig.";
	
	/**
	 * English description of the status code 0015:
	 *
	 * "The environment is invalid."
	 * @var string
	 */
	const ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH = "The environment is invalid.";
	
	/**
	 * German description of the status code 0020:
	 *
	 * "Es fehlt die Berechtigung, den Service zu nutzen."
	 * @var string
	 */
	const PERMISSIONS_MISSING_DESCRIPTION_GERMAN = "Es fehlt die Berechtigung, den Service zu nutzen.";
	
	/**
	 * English description of the status code 0020:
	 *
	 * "No authorization to use the service."
	 * @var string
	 */
	const PERMISSIONS_MISSING_DESCRIPTION_ENGLISH = "No authorization to use the service.";
	
	/**
	 * German description of the status code 0023:
	 *
	 * "Der HTTP-Accept Header ist unbekannt."
	 * @var string
	 */
	const ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN = "Der HTTP-Accept Header ist unbekannt.";
	
	/**
	 * English description of the status code 0023:
	 *
	 * "The HTTP Accept header is unknown."
	 * @var string
	 */
	const ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH = "The HTTP Accept header is unknown.";
	
	/**
	 * German description of the status code 0030:
	 *
	 * "Unzureichende Quota-Punkte."
	 * @var string
	 */
	const QUOTAS_EXCEEDED_DESCRIPTION_GERMAN = "Unzureichende Quota-Punkte.";
	
	/**
	 * English description of the status code 0030:
	 *
	 * "Insufficient quota points."
	 * @var string
	 */
	const QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH = "Insufficient quota points.";
	
	/**
	 * German description of the status code 0040:
	 *
	 * "Der Token ist abgelaufen."
	 * @var string
	 */
	const TOKEN_EXPIRED_DESCRIPTION_GERMAN = "Der Token ist abgelaufen.";
	
	/**
	 * English description of the status code 0040:
	 *
	 * "Token has expired."
	 * @var string
	 */
	const TOKEN_EXPIRED_DESCRIPTION_ENGLISH = "Token has expired.";
	
	/**
	 * German description of the status code 0042:
	 *
	 * "Das angegebene Konto existiert nicht oder gehört nicht dem angemeldeten Nutzer."
	 * @var string
	 */
	const ACCOUNT_MISMATCH_DESCRIPTION_GERMAN = "Das angegebene Konto existiert nicht oder gehört nicht dem angemeldeten Nutzer.";
	
	/**
	 * English description of the status code 0042:
	 *
	 * "Account does not exist or does not belong to user."
	 * @var string
	 */
	const ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH = "Account does not exist or does not belong to user.";
	
	/**
	 * German description of the status code 0050:
	 *
	 * "Unzureichendes Guthaben."
	 * @var string
	 */
	const INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN = "Unzureichendes Guthaben.";
	
	/**
	 * English description of the status code 0050:
	 *
	 * "Insufficient credit."
	 * @var string
	 */
	const INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH = "Insufficient credit.";
	
	/**
	 * German description of the status code 0090:
	 *
	 * "Der übergebene Token war ungültig."
	 * @var string
	 */
	const TOKEN_INVALID_DESCRIPTION_GERMAN = "Der übergebene Token war ungültig.";
	
	/**
	 * English description of the status code 0090:
	 *
	 * "The transferred token was invalid."
	 * @var string
	 */
	const TOKEN_INVALID_DESCRIPTION_ENGLISH = "The transferred token was invalid.";
}
?>