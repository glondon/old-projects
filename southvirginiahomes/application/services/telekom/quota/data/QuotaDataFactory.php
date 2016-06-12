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
 * Factory, which creates Telekom data objects of the service Administration service (Quota and Accounts) from JSON response messages.
 * @package quota
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../quota/data/QuotaStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Administration service (Quota and Accounts) from JSON response messages.
 * @package quota
 * @subpackage data
 */
class QuotaDataFactory {
	/**
	 * Creates a Telekom data object of the type GetQuotaInformationResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetQuotaInformationResponse
	 * 	A Telekom data object
	 */
	static function createGetQuotaInformationResponse($o) {
		$json = json_decode($o, true);
		
		$maxQuota = null;
	
		if(array_key_exists('maxQuota', $json)) {
			$maxQuota = $json['maxQuota'];
		}
		
		$maxUserQuota = null;
	
		if(array_key_exists('maxUserQuota', $json)) {
			$maxUserQuota = $json['maxUserQuota'];
		}
		
		$quotaLevel = null;
	
		if(array_key_exists('quotaLevel', $json)) {
			$quotaLevel = $json['quotaLevel'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetQuotaInformationResponse.php');
		return new GetQuotaInformationResponse($responseStatus, $maxQuota, $maxUserQuota, $quotaLevel);
	}

	/**
	 * Creates a Telekom data object of the type ChangeQuotaPoolResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return ChangeQuotaPoolResponse
	 * 	A Telekom data object
	 */
	static function createChangeQuotaPoolResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/ChangeQuotaPoolResponse.php');
		return new ChangeQuotaPoolResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type GetAccountBalanceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetAccountBalanceResponse
	 * 	A Telekom data object
	 */
	static function createGetAccountBalanceResponse($o) {
		$json = json_decode($o, true);
		
		$accounts = array();
		$accounts_array = null;
		
		if(array_key_exists('accounts', $json)) {
			$accounts_array = $json['accounts'];
			
			foreach($accounts_array as $accounts_single) {
				array_push($accounts, self::createGetAccountBalanceAccountsResponse($accounts_single));
			}
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetAccountBalanceResponse.php');
		return new GetAccountBalanceResponse($responseStatus, $accounts);
	}

	/**
	 * Creates a Telekom data object of the type GetAccountBalanceAccountsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetAccountBalanceAccountsResponse
	 * 	A Telekom data object
	 */
	static function createGetAccountBalanceAccountsResponse($json) {
		$account = null;
	
		if(array_key_exists('account', $json)) {
			$account = $json['account'];
		}
		
		$credits = null;
	
		if(array_key_exists('credits', $json)) {
			$credits = $json['credits'];
		}
		
		require_once(dirname(__FILE__).'/GetAccountBalanceAccountsResponse.php');
		return new GetAccountBalanceAccountsResponse($account, $credits);
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
				return QuotaStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == QuotaStatusConstants::USER_QUOTA_NOT_ALLOWED ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::USER_QUOTA_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::USER_QUOTA_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == QuotaStatusConstants::INVALID_MODULE_ID ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::INVALID_MODULE_ID_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::INVALID_MODULE_ID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == QuotaStatusConstants::INVALID_QUOTA_VALUE ) {
			if($language == 'german') {
				return QuotaStatusDescriptions::INVALID_QUOTA_VALUE_DESCRIPTION_GERMAN;
			} else {
				return QuotaStatusDescriptions::INVALID_QUOTA_VALUE_DESCRIPTION_ENGLISH;
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
			
			return QuotaClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
