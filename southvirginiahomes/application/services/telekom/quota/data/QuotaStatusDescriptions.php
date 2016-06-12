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
 * Status descriptions for the Telekom service Administration service (Quota and Accounts)
 * @package quota
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Administration service (Quota and Accounts)
 * @package quota
 * @subpackage data
 */
interface QuotaStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0060 of the service quota:
	 *
	 * "Die vom Nutzer gewählte Quota ist zu hoch oder zu niedrig."
	 * @var string
	 */
	const USER_QUOTA_NOT_ALLOWED_DESCRIPTION_GERMAN = "Die vom Nutzer gewählte Quota ist zu hoch oder zu niedrig.";
	
	/**
	 * English description of the status code 0060 of the service quota:
	 *
	 * "The quotes are selected by the user is too high or too low."
	 * @var string
	 */
	const USER_QUOTA_NOT_ALLOWED_DESCRIPTION_ENGLISH = "The quotes are selected by the user is too high or too low.";
	
	/**
	 * German description of the status code 0075 of the service quota:
	 *
	 * "Die moduleId ist ungültig."
	 * @var string
	 */
	const INVALID_MODULE_ID_DESCRIPTION_GERMAN = "Die moduleId ist ungültig.";
	
	/**
	 * English description of the status code 0075 of the service quota:
	 *
	 * "The moduleId Is invalid."
	 * @var string
	 */
	const INVALID_MODULE_ID_DESCRIPTION_ENGLISH = "The moduleId Is invalid.";
	
	/**
	 * German description of the status code 0100 of the service quota:
	 *
	 * "Ungültiger Wert für quota."
	 * @var string
	 */
	const INVALID_QUOTA_VALUE_DESCRIPTION_GERMAN = "Ungültiger Wert für quota.";
	
	/**
	 * English description of the status code 0100 of the service quota:
	 *
	 * "Invalid value for quota."
	 * @var string
	 */
	const INVALID_QUOTA_VALUE_DESCRIPTION_ENGLISH = "Invalid value for quota.";
}