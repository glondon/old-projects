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
 * Status constants for the Telekom service Voice Call
 * @package voiceCall
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Voice Call
 * @package voiceCall
 * @subpackage data
 */
interface VoiceCallStatusConstants extends TelekomStatusConstants {
	/**
	 * The first phone number has not been specified in any of the
            supported phone number formats, or is invalid.
	 */
	const A_NUMBER_INVALID = 10004;
	
	/**
	 * The first phone number may not be called.
	 */
	const A_NUMBER_NOT_ALLOWED = 10005;
	
	/**
	 * The call to the first phone number has been
            blocked.
	 */
	const A_NUMBER_BLOCKED = 10006;
	
	/**
	 * The second phone number has not been specified in any of
            the supported phone number formats, or is invalid.
	 */
	const B_NUMBER_INVALID = 10007;
	
	/**
	 * The second phone number may not be called.
	 */
	const B_NUMBER_NOT_ALLOWED = 10008;
	
	/**
	 * The call to the second phone number has been
            blocked.
	 */
	const B_NUMBER_BLOCKED = 10009;
	
	/**
	 * The value specified for the maximum call duration is
            invalid or too large.
	 */
	const MAXDURATION_INVALID = 10010;
	
	/**
	 * The value specified for the time to the status request is
            invalid.
	 */
	const EXPIRATION_INVALID = 10011;
	
	/**
	 * The ID number that was entered during the status request is
            invalid or not known.
	 */
	const SESSION_ID_INVALID = 10012;
	
	/**
	 * The duration specified during the status request in
            keepalive is invalid.
	 */
	const KEEPALIVE_INVALID = 10013;
	
	/**
	 * Using service numbers is not permitted.
	 */
	const SERVICE_NUMBERS_NOT_ALLOWED = 10102;
	
	/**
	 * No phone number was given.
	 */
	const PHONE_NUMBER_NOT_GIVEN = 10104;
	
	/**
	 * Too many phone Numbers.
	 */
	const TOO_MANY_PHONE_NUMBERS = 10105;
	
	/**
	 * Waiting time (maxWait) is too short or
            too long.
	 */
	const WAITING_TIME_TOO_SHORT_OR_TOO_LONG = 10106;
	
}