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
 * Status constants for the Telekom service Administration service (Quota and Accounts)
 * @package quota
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Administration service (Quota and Accounts)
 * @package quota
 * @subpackage data
 */
interface QuotaStatusConstants extends TelekomStatusConstants {
	/**
	 * The quotes are selected by the user is too high or too
            low.
	 */
	const USER_QUOTA_NOT_ALLOWED = 60060;
	
	/**
	 * The moduleId Is invalid.
	 */
	const INVALID_MODULE_ID = 60075;
	
	/**
	 * Invalid value for quota.
	 */
	const INVALID_QUOTA_VALUE = 60100;
	
}