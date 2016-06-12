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
 * Status descriptions for the Telekom service Auto Scout 24
 * @package autoScout24
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Auto Scout 24
 * @package autoScout24
 * @subpackage data
 */
interface AutoScout24StatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0003 of the service autoScout24:
	 *
	 * "The AS24 quota per minute is exceeded"
	 * @var string
	 */
	const QUOTA_EXCEEDED_DESCRIPTION_GERMAN = "The AS24 quota per minute is exceeded";
	
	/**
	 * English description of the status code 0003 of the service autoScout24:
	 *
	 * "The AS24 quota per minute is exceeded"
	 * @var string
	 */
	const QUOTA_EXCEEDED_DESCRIPTION_ENGLISH = "The AS24 quota per minute is exceeded";
	
	/**
	 * German description of the status code 0004 of the service autoScout24:
	 *
	 * "The culture ID is wrong or missing"
	 * @var string
	 */
	const CULTUREID_WRONG_OR_MISSING_DESCRIPTION_GERMAN = "The culture ID is wrong or missing";
	
	/**
	 * English description of the status code 0004 of the service autoScout24:
	 *
	 * "The culture ID is wrong or missing"
	 * @var string
	 */
	const CULTUREID_WRONG_OR_MISSING_DESCRIPTION_ENGLISH = "The culture ID is wrong or missing";
	
	/**
	 * German description of the status code 0005 of the service autoScout24:
	 *
	 * "An error parsing Boolean occurred"
	 * @var string
	 */
	const BOOLEAN_PARSING_ERROR_DESCRIPTION_GERMAN = "An error parsing Boolean occurred";
	
	/**
	 * English description of the status code 0005 of the service autoScout24:
	 *
	 * "An error parsing Boolean occurred"
	 * @var string
	 */
	const BOOLEAN_PARSING_ERROR_DESCRIPTION_ENGLISH = "An error parsing Boolean occurred";
	
	/**
	 * German description of the status code 0006 of the service autoScout24:
	 *
	 * "An error parsing Decimal occurred"
	 * @var string
	 */
	const DECIMAL_PARSING_ERROR_DESCRIPTION_GERMAN = "An error parsing Decimal occurred";
	
	/**
	 * English description of the status code 0006 of the service autoScout24:
	 *
	 * "An error parsing Decimal occurred"
	 * @var string
	 */
	const DECIMAL_PARSING_ERROR_DESCRIPTION_ENGLISH = "An error parsing Decimal occurred";
	
	/**
	 * German description of the status code 0007 of the service autoScout24:
	 *
	 * "An error parsing Int occurred"
	 * @var string
	 */
	const INT_PARSING_ERROR_DESCRIPTION_GERMAN = "An error parsing Int occurred";
	
	/**
	 * English description of the status code 0007 of the service autoScout24:
	 *
	 * "An error parsing Int occurred"
	 * @var string
	 */
	const INT_PARSING_ERROR_DESCRIPTION_ENGLISH = "An error parsing Int occurred";
	
	/**
	 * German description of the status code 0008 of the service autoScout24:
	 *
	 * "The sorting key is invalid"
	 * @var string
	 */
	const SORTING_KEY_INVALID_DESCRIPTION_GERMAN = "The sorting key is invalid";
	
	/**
	 * English description of the status code 0008 of the service autoScout24:
	 *
	 * "The sorting key is invalid"
	 * @var string
	 */
	const SORTING_KEY_INVALID_DESCRIPTION_ENGLISH = "The sorting key is invalid";
	
	/**
	 * German description of the status code 0009 of the service autoScout24:
	 *
	 * "An error parsing DateTime parsing occurred"
	 * @var string
	 */
	const DATETIME_PARSING_ERROR_DESCRIPTION_GERMAN = "An error parsing DateTime parsing occurred";
	
	/**
	 * English description of the status code 0009 of the service autoScout24:
	 *
	 * "An error parsing DateTime parsing occurred"
	 * @var string
	 */
	const DATETIME_PARSING_ERROR_DESCRIPTION_ENGLISH = "An error parsing DateTime parsing occurred";
	
	/**
	 * German description of the status code 0010 of the service autoScout24:
	 *
	 * "The requested resource is not available"
	 * @var string
	 */
	const RESOURCE_NOT_AVAILABLE_DESCRIPTION_GERMAN = "The requested resource is not available";
	
	/**
	 * English description of the status code 0010 of the service autoScout24:
	 *
	 * "The requested resource is not available"
	 * @var string
	 */
	const RESOURCE_NOT_AVAILABLE_DESCRIPTION_ENGLISH = "The requested resource is not available";
	
	/**
	 * German description of the status code 0011 of the service autoScout24:
	 *
	 * "An error in starting loopup service occurred"
	 * @var string
	 */
	const LOOKUPSERVICE_ERROR_DESCRIPTION_GERMAN = "An error in starting loopup service occurred";
	
	/**
	 * English description of the status code 0011 of the service autoScout24:
	 *
	 * "An error in starting loopup service occurred"
	 * @var string
	 */
	const LOOKUPSERVICE_ERROR_DESCRIPTION_ENGLISH = "An error in starting loopup service occurred";
	
	/**
	 * German description of the status code 0012 of the service autoScout24:
	 *
	 * "An error in starting article search service occurred"
	 * @var string
	 */
	const ARTICLESERVICE_ERROR_DESCRIPTION_GERMAN = "An error in starting article search service occurred";
	
	/**
	 * English description of the status code 0012 of the service autoScout24:
	 *
	 * "An error in starting article search service occurred"
	 * @var string
	 */
	const ARTICLESERVICE_ERROR_DESCRIPTION_ENGLISH = "An error in starting article search service occurred";
	
	/**
	 * German description of the status code 0014 of the service autoScout24:
	 *
	 * "Some Parameter are missing or invalid"
	 * @var string
	 */
	const PARAMETER_MISSING_OR_INVALID_DESCRIPTION_GERMAN = "Some Parameter are missing or invalid";
	
	/**
	 * English description of the status code 0014 of the service autoScout24:
	 *
	 * "Some Parameter are missing or invalid"
	 * @var string
	 */
	const PARAMETER_MISSING_OR_INVALID_DESCRIPTION_ENGLISH = "Some Parameter are missing or invalid";
	
	/**
	 * German description of the status code 0015 of the service autoScout24:
	 *
	 * "The method call failed"
	 * @var string
	 */
	const METHODCALL_FAILED_DESCRIPTION_GERMAN = "The method call failed";
	
	/**
	 * English description of the status code 0015 of the service autoScout24:
	 *
	 * "The method call failed"
	 * @var string
	 */
	const METHODCALL_FAILED_DESCRIPTION_ENGLISH = "The method call failed";
	
	/**
	 * German description of the status code 0021 of the service autoScout24:
	 *
	 * "User is unknown"
	 * @var string
	 */
	const USER_UNKNOWN_DESCRIPTION_GERMAN = "User is unknown";
	
	/**
	 * English description of the status code 0021 of the service autoScout24:
	 *
	 * "User is unknown"
	 * @var string
	 */
	const USER_UNKNOWN_DESCRIPTION_ENGLISH = "User is unknown";
	
	/**
	 * German description of the status code 0091 of the service autoScout24:
	 *
	 * "Token does not exist"
	 * @var string
	 */
	const TOKEN_NONEXISTANT_DESCRIPTION_GERMAN = "Token does not exist";
	
	/**
	 * English description of the status code 0091 of the service autoScout24:
	 *
	 * "Token does not exist"
	 * @var string
	 */
	const TOKEN_NONEXISTANT_DESCRIPTION_ENGLISH = "Token does not exist";
	
	/**
	 * German description of the status code 1000 of the service autoScout24:
	 *
	 * "Nothing found"
	 * @var string
	 */
	const NOTHING_FOUND_DESCRIPTION_GERMAN = "Nothing found";
	
	/**
	 * English description of the status code 1000 of the service autoScout24:
	 *
	 * "Nothing found"
	 * @var string
	 */
	const NOTHING_FOUND_DESCRIPTION_ENGLISH = "Nothing found";
	
	/**
	 * German description of the status code 6000 of the service autoScout24:
	 *
	 * "Search criteria are wrong"
	 * @var string
	 */
	const SEARCHCRITERIA_WRONG_DESCRIPTION_GERMAN = "Search criteria are wrong";
	
	/**
	 * English description of the status code 6000 of the service autoScout24:
	 *
	 * "Search criteria are wrong"
	 * @var string
	 */
	const SEARCHCRITERIA_WRONG_DESCRIPTION_ENGLISH = "Search criteria are wrong";
}