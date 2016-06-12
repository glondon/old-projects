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
 * Status constants for the Telekom service IP Location
 * @package ipLocation
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service IP Location
 * @package ipLocation
 * @subpackage data
 */
interface IpLocationStatusConstants extends TelekomStatusConstants {
	/**
	 * More than the maximum number of possible IP addresses have
            been entered.
	 */
	const LIMIT_EXCEEDED = 50004;
	
	/**
	 * An attempt was made to resolve an IPv6 address. This is not
            yet supported.
	 */
	const IP_NOT_VALID = 50102;
	
	/**
	 * An unknown IP address was specified.
	 */
	const IP_CANNOT_BE_LOCALIZED = 50103;
	
}