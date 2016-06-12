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
 * Factory, which creates Telekom data objects of the service Voice Call from JSON response messages.
 * @package voiceCall
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../voicecall/data/VoiceCallStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Voice Call from JSON response messages.
 * @package voiceCall
 * @subpackage data
 */
class VoiceCallDataFactory {
	/**
	 * Creates a Telekom data object of the type NewCallResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return NewCallResponse
	 * 	A Telekom data object
	 */
	static function createNewCallResponse($o) {
		$json = json_decode($o, true);
		
		$sessionID = null;
	
		if(array_key_exists('sessionID', $json)) {
			$sessionID = $json['sessionID'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/NewCallResponse.php');
		return new NewCallResponse($responseStatus, $sessionID);
	}

	/**
	 * Creates a Telekom data object of the type CallStatusResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return CallStatusResponse
	 * 	A Telekom data object
	 */
	static function createCallStatusResponse($o) {
		$json = json_decode($o, true);
		
		$stateA = null;
	
		if(array_key_exists('stateA', $json)) {
			$stateA = $json['stateA'];
		}
		
		$stateB = null;
	
		if(array_key_exists('stateB', $json)) {
			$stateB = $json['stateB'];
		}
		
		$connectionTimeA = null;
	
		if(array_key_exists('connectionTimeA', $json)) {
			$connectionTimeA = $json['connectionTimeA'];
		}
		
		$connectionTimeB = null;
	
		if(array_key_exists('connectionTimeB', $json)) {
			$connectionTimeB = $json['connectionTimeB'];
		}
		
		$reasonA = null;
	
		if(array_key_exists('reasonA', $json)) {
			$reasonA = $json['reasonA'];
		}
		
		$reasonB = null;
	
		if(array_key_exists('reasonB', $json)) {
			$reasonB = $json['reasonB'];
		}
		
		$descriptionA = null;
	
		if(array_key_exists('descriptionA', $json)) {
			$descriptionA = $json['descriptionA'];
		}
		
		$descriptionB = null;
	
		if(array_key_exists('descriptionB', $json)) {
			$descriptionB = $json['descriptionB'];
		}
		
		$be164 = null;
	
		if(array_key_exists('be164', $json)) {
			$be164 = $json['be164'];
		}
		
		$bindex = null;
	
		if(array_key_exists('bindex', $json)) {
			$bindex = $json['bindex'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/CallStatusResponse.php');
		return new CallStatusResponse($responseStatus, $stateA, $stateB, $connectionTimeA, $connectionTimeB, $reasonA, $reasonB, $descriptionA, $descriptionB, $be164, $bindex);
	}

	/**
	 * Creates a Telekom data object of the type TearDownResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return TearDownResponse
	 * 	A Telekom data object
	 */
	static function createTearDownResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/TearDownResponse.php');
		return new TearDownResponse($responseStatus);
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
				return VoiceCallStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::A_NUMBER_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::A_NUMBER_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::A_NUMBER_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::A_NUMBER_NOT_ALLOWED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::A_NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::A_NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::A_NUMBER_BLOCKED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::A_NUMBER_BLOCKED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::A_NUMBER_BLOCKED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::B_NUMBER_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::B_NUMBER_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::B_NUMBER_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::B_NUMBER_NOT_ALLOWED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::B_NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::B_NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::B_NUMBER_BLOCKED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::B_NUMBER_BLOCKED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::B_NUMBER_BLOCKED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::MAXDURATION_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::MAXDURATION_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::MAXDURATION_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::EXPIRATION_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::EXPIRATION_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::EXPIRATION_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::SESSION_ID_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::SESSION_ID_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::SESSION_ID_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::KEEPALIVE_INVALID ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::KEEPALIVE_INVALID_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::KEEPALIVE_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::SERVICE_NUMBERS_NOT_ALLOWED ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::SERVICE_NUMBERS_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::SERVICE_NUMBERS_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::PHONE_NUMBER_NOT_GIVEN ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::PHONE_NUMBER_NOT_GIVEN_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::PHONE_NUMBER_NOT_GIVEN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::TOO_MANY_PHONE_NUMBERS ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::TOO_MANY_PHONE_NUMBERS_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::TOO_MANY_PHONE_NUMBERS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == VoiceCallStatusConstants::WAITING_TIME_TOO_SHORT_OR_TOO_LONG ) {
			if($language == 'german') {
				return VoiceCallStatusDescriptions::WAITING_TIME_TOO_SHORT_OR_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return VoiceCallStatusDescriptions::WAITING_TIME_TOO_SHORT_OR_TOO_LONG_DESCRIPTION_ENGLISH;
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
			
			
			if($statusConstant == 3 ) {
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
			
			return VoiceCallClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
