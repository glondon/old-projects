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
 * Status constants for the Telekom service Send SMS - Phone number validation
 * @package smsValidation
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Send SMS - Phone number validation
 * @package smsValidation
 * @subpackage data
 */
interface SmsValidationStatusConstants extends TelekomStatusConstants {
	/**
	 * The message sent was too long.
	 */
	const MESSAGE_TOO_LONG = 40002;
	
	/**
	 * No recipient number was transferred or none of the
            transferred phone numbers were valid. (See Phone number formats)
	 */
	const RECIPIENT_INVALID = 40003;
	
	/**
	 * No recipient was transferred or the recipient was not
            valid. (See Phone number
            formats)
	 */
	const SENDER_NAME_INVALID = 40005;
	
	/**
	 * Validation failed.
	 */
	const VALIDATION_FAILED = 40102;
	
	/**
	 * Invalid number. (See Phone
            number formats)
	 */
	const INVALID_NUMBER = 40103;
	
	/**
	 * The number is not validated.
	 */
	const NOT_VALIDATED = 40104;
	
	/**
	 * The number is already validated.
	 */
	const ALREADY_VALIDATED = 40106;
	
	/**
	 * A validation has already started for the specified phone
            number.
	 */
	const VALIDATION_IN_PROGRESS = 40107;
	
	/**
	 * The phone number cannot be validated as no validation
            process has been started for it.
	 */
	const NO_VALIDATION_IN_PROGRESS = 40108;
	
	/**
	 * The phone number to be validated is blocked.
	 */
	const NUMBER_SUSPENDED = 40109;
	
}