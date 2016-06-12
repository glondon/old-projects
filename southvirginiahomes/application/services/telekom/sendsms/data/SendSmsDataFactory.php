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
 * Factory, which creates Telekom data objects of the service Send SMS from JSON response messages.
 * @package sendSms
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../sendsms/data/SendSmsStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Send SMS from JSON response messages.
 * @package sendSms
 * @subpackage data
 */
class SendSmsDataFactory {
	/**
	 * Creates a Telekom data object of the type SendSmsResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return SendSmsResponse
	 * 	A Telekom data object
	 */
	static function createSendSmsResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/SendSmsResponse.php');
		return new SendSmsResponse($responseStatus);
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
				return SendSmsStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::MESSAGE_TOO_LONG ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::INVALID_PHONE_NUMBER_FORMAT ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::INVALID_PHONE_NUMBER_FORMAT_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::INVALID_PHONE_NUMBER_FORMAT_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::TOO_MANY_NUMBERS ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::TOO_MANY_NUMBERS_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::TOO_MANY_NUMBERS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::SENDER_NAME_INVALID ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::MESSAGE_INVALID ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::MESSAGE_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::MESSAGE_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SendSmsStatusConstants::RECIPIENTS_INVALID ) {
			if($language == 'german') {
				return SendSmsStatusDescriptions::RECIPIENTS_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SendSmsStatusDescriptions::RECIPIENTS_INVALID_DESCRIPTION_ENGLISH;
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
			
			return SendSmsClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
