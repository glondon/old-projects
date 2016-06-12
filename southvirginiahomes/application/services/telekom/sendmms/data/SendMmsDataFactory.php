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
 * Factory, which creates Telekom data objects of the service Send MMS from JSON response messages.
 * @package sendMms
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../sendmms/data/SendMmsStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Send MMS from JSON response messages.
 * @package sendMms
 * @subpackage data
 */
class SendMmsDataFactory {
	/**
	 * Creates a Telekom data object of the type SendMmsResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return SendMmsResponse
	 * 	A Telekom data object
	 */
	static function createSendMmsResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/SendMmsResponse.php');
		return new SendMmsResponse($responseStatus);
	}


	
	

	/**
	 * Retrieves the description of a status constant in the specified language.
	 * @param string $statusConstant
	 *  The status constant
	 * @param string $language
	 *  The language
	 */
	static function getDescription($statusConstant, $language) {
		if($statusConstant == TelekomStatusConstants::SUCCESS ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::MESSAGE_TOO_LONG ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::RECIPIENTS_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::RECIPIENTS_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::RECIPIENTS_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::TOO_MANY_NUMBERS ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::TOO_MANY_NUMBERS_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::TOO_MANY_NUMBERS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::SENDER_NAME_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::MESSAGE_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::MESSAGE_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::MESSAGE_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::SUBJECT_MISSING ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::SUBJECT_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::SUBJECT_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::SUBJECT_TOO_LONG ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::SUBJECT_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::SUBJECT_TOO_LONG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::DESTINATION_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::DESTINATION_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::DESTINATION_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::MESSAGES_UNDELIVERED ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::MESSAGES_UNDELIVERED_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::MESSAGES_UNDELIVERED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::ATTACHMENT_TOO_BIG ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::ATTACHMENT_TOO_BIG_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::ATTACHMENT_TOO_BIG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::FILE_NAME_MISSING ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::FILE_NAME_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::FILE_NAME_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::CONTENT_TYPE_MISSING ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::CONTENT_TYPE_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::CONTENT_TYPE_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::ATTACHMENT_ENCODING_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::ATTACHMENT_ENCODING_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::ATTACHMENT_ENCODING_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendMmsStatusConstants::CONTENT_TYPE_INVALID ) {
			if($language == 'german') {
				return SendMmsStatusDescriptions::CONTENT_TYPE_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendMmsStatusDescriptions::CONTENT_TYPE_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		return null;
	}
	
	/**
	 * Computes the status constant for the specified status code
	 * @param statusCode String
	 *  The status code for which the status constant is to be computed
	 * @return int
	 *  The status constant for the specified status code
	 */
	static function getStatusConstant($statusCode) {
		if($statusCode == null) {
			return -1;
		} else {
			$statusConstant = intval($statusCode);
			
			
			if($statusConstant == 16 ) {
				return TelekomStatusConstants::ENVIRONMENT_INVALID;
			}
			
			if($statusConstant == TelekomStatusConstants::SUCCESS) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::TOKEN_INVALID) {
				return $statusConstant;
			}
			
			return SendMmsClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
