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
 * Factory, which creates Telekom data objects of the service Send SMS - Phone number validation from JSON response messages.
 * @package smsValidation
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../smsvalidation/data/SmsValidationStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Send SMS - Phone number validation from JSON response messages.
 * @package smsValidation
 * @subpackage data
 */
class SmsValidationDataFactory {
	/**
	 * Creates a Telekom data object of the type SendValidationKeywordResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return SendValidationKeywordResponse
	 * 	A Telekom data object
	 */
	static function createSendValidationKeywordResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/SendValidationKeywordResponse.php');
		return new SendValidationKeywordResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type ValidateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return ValidateResponse
	 * 	A Telekom data object
	 */
	static function createValidateResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/ValidateResponse.php');
		return new ValidateResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type InvalidateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return InvalidateResponse
	 * 	A Telekom data object
	 */
	static function createInvalidateResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/InvalidateResponse.php');
		return new InvalidateResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type GetValidatedNumbersResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetValidatedNumbersResponse
	 * 	A Telekom data object
	 */
	static function createGetValidatedNumbersResponse($o) {
		$json = json_decode($o, true);
		
		$numbers = array();
		$numbers_array = null;
		
		if(array_key_exists('numbers', $json)) {
			$numbers_array = $json['numbers'];
			
			foreach($numbers_array as $numbers_single) {
				array_push($numbers, self::createGetValidatedNumbersNumbersResponse($numbers_single));
			}
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetValidatedNumbersResponse.php');
		return new GetValidatedNumbersResponse($responseStatus, $numbers);
	}

	/**
	 * Creates a Telekom data object of the type GetValidatedNumbersNumbersResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetValidatedNumbersNumbersResponse
	 * 	A Telekom data object
	 */
	static function createGetValidatedNumbersNumbersResponse($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$validUntil = null;
	
		if(array_key_exists('validUntil', $json)) {
			$validUntil = $json['validUntil'];
		}
		
		require_once(dirname(__FILE__).'/GetValidatedNumbersNumbersResponse.php');
		return new GetValidatedNumbersNumbersResponse($number, $validUntil);
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
				return SmsValidationStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::MESSAGE_TOO_LONG ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::MESSAGE_TOO_LONG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::RECIPIENT_INVALID ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::RECIPIENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::RECIPIENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::SENDER_NAME_INVALID ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::SENDER_NAME_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::VALIDATION_FAILED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::VALIDATION_FAILED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::VALIDATION_FAILED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::INVALID_NUMBER ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::INVALID_NUMBER_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::INVALID_NUMBER_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::NOT_VALIDATED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::NOT_VALIDATED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::NOT_VALIDATED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::ALREADY_VALIDATED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::ALREADY_VALIDATED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::ALREADY_VALIDATED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::VALIDATION_IN_PROGRESS ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::VALIDATION_IN_PROGRESS_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::VALIDATION_IN_PROGRESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::NO_VALIDATION_IN_PROGRESS ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::NO_VALIDATION_IN_PROGRESS_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::NO_VALIDATION_IN_PROGRESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == SmsValidationStatusConstants::NUMBER_SUSPENDED ) {
			if($language == 'german') {
				return SmsValidationStatusDescriptions::NUMBER_SUSPENDED_DESCRIPTION_GERMAN;
			} else {
				return SmsValidationStatusDescriptions::NUMBER_SUSPENDED_DESCRIPTION_ENGLISH;
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
			
			return SmsValidationClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
