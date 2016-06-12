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
 * Status constants for all Telekom services
 * @package common
 * @subpackage data
 */

/**
 * Status constants for all Telekom services
 * @package common
 * @subpackage data
 */
interface TelekomStatusConstants {
	/**
	 * The call was successful.
	 */
	const SUCCESS = 0;
	
	/**
	 * An internal error occurred.
	 */
	const INTERNAL_ERROR = 1;
	
	/**
	 * The environment is invalid.
	 */
	const ENVIRONMENT_INVALID = 15;
	
	/**
	 * No authorization to use the service.
	 */
	const PERMISSIONS_MISSING = 20;
	
	/**
	 * The HTTP Accept header is unknown.
	 */
	const ACCEPT_HEADER_UNKNOWN = 23;
	
	/**
	 * Insufficient quota points.
	 */
	const QUOTAS_EXCEEDED = 30;
	
	/**
	 * Token has expired.
	 */
	const TOKEN_EXPIRED = 40;
	
	/**
	 * Account does not exist or does not belong to user.
	 */
	const ACCOUNT_MISMATCH = 42;
	
	/**
	 * Insufficient credit.
	 */
	const INSUFFICIENT_CREDITS = 50;
	
	/**
	 * The transferred token was invalid.
	 */
	const TOKEN_INVALID = 90;
	
	/**
	 * Unknown status
	 */
	const UNKNOWN = -1;
}
?>