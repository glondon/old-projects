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
 * Status constants for the Telekom service Auto Scout 24
 * @package autoScout24
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Auto Scout 24
 * @package autoScout24
 * @subpackage data
 */
interface AutoScout24StatusConstants extends TelekomStatusConstants {
	/**
	 * The AS24 quota per minute is exceeded
	 */
	const QUOTA_EXCEEDED = 80003;
	
	/**
	 * The culture ID is wrong or missing
	 */
	const CULTUREID_WRONG_OR_MISSING = 80004;
	
	/**
	 * An error parsing Boolean occurred
	 */
	const BOOLEAN_PARSING_ERROR = 80005;
	
	/**
	 * An error parsing Decimal occurred
	 */
	const DECIMAL_PARSING_ERROR = 80006;
	
	/**
	 * An error parsing Int occurred
	 */
	const INT_PARSING_ERROR = 80007;
	
	/**
	 * The sorting key is invalid
	 */
	const SORTING_KEY_INVALID = 80008;
	
	/**
	 * An error parsing DateTime parsing occurred
	 */
	const DATETIME_PARSING_ERROR = 80009;
	
	/**
	 * The requested resource is not available
	 */
	const RESOURCE_NOT_AVAILABLE = 80010;
	
	/**
	 * An error in starting loopup service occurred
	 */
	const LOOKUPSERVICE_ERROR = 80011;
	
	/**
	 * An error in starting article search service
            occurred
	 */
	const ARTICLESERVICE_ERROR = 80012;
	
	/**
	 * Some Parameter are missing or invalid
	 */
	const PARAMETER_MISSING_OR_INVALID = 80014;
	
	/**
	 * The method call failed
	 */
	const METHODCALL_FAILED = 80015;
	
	/**
	 * User is unknown
	 */
	const USER_UNKNOWN = 80021;
	
	/**
	 * Token does not exist
	 */
	const TOKEN_NONEXISTANT = 80091;
	
	/**
	 * Nothing found
	 */
	const NOTHING_FOUND = 81000;
	
	/**
	 * Search criteria are wrong
	 */
	const SEARCHCRITERIA_WRONG = 86000;
	
}