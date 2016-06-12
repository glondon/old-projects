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
 * Factory, which creates Telekom data objects of the service IP Location from JSON response messages.
 * @package ipLocation
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../iplocation/data/IpLocationStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service IP Location from JSON response messages.
 * @package ipLocation
 * @subpackage data
 */
class IpLocationDataFactory {
	/**
	 * Creates a Telekom data object of the type LocateIpResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return LocateIpResponse
	 * 	A Telekom data object
	 */
	static function createLocateIpResponse($o) {
		$json = json_decode($o, true);
		
		$results = array();
		$results_array = null;
		
		if(array_key_exists('results', $json)) {
			$results_array = $json['results'];
			
			foreach($results_array as $results_single) {
				array_push($results, self::createLocateIpResultsResponse($results_single));
			}
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/LocateIpResponse.php');
		return new LocateIpResponse($responseStatus, $results);
	}

	/**
	 * Creates a Telekom data object of the type LocateIpResultsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LocateIpResultsResponse
	 * 	A Telekom data object
	 */
	static function createLocateIpResultsResponse($json) {
		$ipAddress = null;
	
		if(array_key_exists('ipAddress', $json)) {
			$ipAddress = $json['ipAddress'];
		}
		
		$radius = null;
	
		if(array_key_exists('radius', $json)) {
			$radius = $json['radius'];
		}
		
		$isInRegion = null;
	
		if(array_key_exists('isInRegion', $json)) {
			$isInRegion = self::createLocateIpResultsIsInRegionResponse($json['isInRegion']);
		}
		
		require_once(dirname(__FILE__).'/LocateIpResultsResponse.php');
		return new LocateIpResultsResponse($ipAddress, $radius, $isInRegion);
	}

	/**
	 * Creates a Telekom data object of the type LocateIpResultsIsInRegionResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LocateIpResultsIsInRegionResponse
	 * 	A Telekom data object
	 */
	static function createLocateIpResultsIsInRegionResponse($json) {
		$countryCode = null;
	
		if(array_key_exists('countryCode', $json)) {
			$countryCode = $json['countryCode'];
		}
		
		$region = null;
	
		if(array_key_exists('region', $json)) {
			$region = $json['region'];
		}
		
		$regionName = null;
	
		if(array_key_exists('regionName', $json)) {
			$regionName = $json['regionName'];
		}
		
		require_once(dirname(__FILE__).'/LocateIpResultsIsInRegionResponse.php');
		return new LocateIpResultsIsInRegionResponse($countryCode, $region, $regionName);
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
				return IpLocationStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == IpLocationStatusConstants::LIMIT_EXCEEDED ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::LIMIT_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::LIMIT_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == IpLocationStatusConstants::IP_NOT_VALID ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::IP_NOT_VALID_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::IP_NOT_VALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == IpLocationStatusConstants::IP_CANNOT_BE_LOCALIZED ) {
			if($language == 'german') {
				return IpLocationStatusDescriptions::IP_CANNOT_BE_LOCALIZED_DESCRIPTION_GERMAN;
			} else {
				return IpLocationStatusDescriptions::IP_CANNOT_BE_LOCALIZED_DESCRIPTION_ENGLISH;
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
			
			
			if($statusConstant == 93 ) {
				return TelekomStatusConstants::PERMISSIONS_MISSING;
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
			
			return IpLocationClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
