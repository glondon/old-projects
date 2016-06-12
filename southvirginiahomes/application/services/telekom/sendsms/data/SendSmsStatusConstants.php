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
 * Status constants for the Telekom service Send SMS
 * @package sendSms
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Send SMS
 * @package sendSms
 * @subpackage data
 */
interface SendSmsStatusConstants extends TelekomStatusConstants {
	/**
	 * The message sent was too long.
	 */
	const MESSAGE_TOO_LONG = 30002;
	
	/**
	 * None of the phone numbers were valid. (See Phone number formats)
	 */
	const INVALID_PHONE_NUMBER_FORMAT = 30003;
	
	/**
	 * Too many recipients were specified.
	 */
	const TOO_MANY_NUMBERS = 30004;
	
	/**
	 * The specified sender name is invalid.
	 */
	const SENDER_NAME_INVALID = 30005;
	
	/**
	 * The transferred message does not contain any
            characters.
	 */
	const MESSAGE_INVALID = 30006;
	
	/**
	 * No recipient number was transferred.
	 */
	const RECIPIENTS_INVALID = 30007;
	
}