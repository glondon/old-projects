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
 * Status constants for the Telekom service Send MMS
 * @package sendMms
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Send MMS
 * @package sendMms
 * @subpackage data
 */
interface SendMmsStatusConstants extends TelekomStatusConstants {
	/**
	 * The message to be sent is too long.
	 */
	const MESSAGE_TOO_LONG = 70002;
	
	/**
	 * None of the phone numbers were valid. (See Phone number
            formats)
	 */
	const RECIPIENTS_INVALID = 70003;
	
	/**
	 * Too many numbers have been past.
	 */
	const TOO_MANY_NUMBERS = 70004;
	
	/**
	 * The name of the sender is invalid.
	 */
	const SENDER_NAME_INVALID = 70005;
	
	/**
	 * No message was specified.
	 */
	const MESSAGE_INVALID = 70006;
	
	/**
	 * The subject is not specified.
	 */
	const SUBJECT_MISSING = 70007;
	
	/**
	 * The subject is too long.
	 */
	const SUBJECT_TOO_LONG = 70008;
	
	/**
	 * The recipient is part of an unsupported destination
            network.
	 */
	const DESTINATION_INVALID = 70009;
	
	/**
	 * Some messages could not be delivered.
	 */
	const MESSAGES_UNDELIVERED = 70010;
	
	/**
	 * The attachment is too big.
	 */
	const ATTACHMENT_TOO_BIG = 70011;
	
	/**
	 * The file name is missing.
	 */
	const FILE_NAME_MISSING = 70012;
	
	/**
	 * The content type is missing
	 */
	const CONTENT_TYPE_MISSING = 70013;
	
	/**
	 * The attachment is not base64 encoded.
	 */
	const ATTACHMENT_ENCODING_INVALID = 70014;
	
	/**
	 * The file type of the attachment is not
            supported.
	 */
	const CONTENT_TYPE_INVALID = 70015;
	
}