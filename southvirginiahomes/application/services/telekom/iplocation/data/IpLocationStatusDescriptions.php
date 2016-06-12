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
 * Status descriptions for the Telekom service IP Location
 * @package ipLocation
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service IP Location
 * @package ipLocation
 * @subpackage data
 */
interface IpLocationStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0004 of the service ipLocation:
	 *
	 * "Es wurden mehr als die maximal möglichen IP-Adressen angegeben."
	 * @var string
	 */
	const LIMIT_EXCEEDED_DESCRIPTION_GERMAN = "Es wurden mehr als die maximal möglichen IP-Adressen angegeben.";
	
	/**
	 * English description of the status code 0004 of the service ipLocation:
	 *
	 * "More than the maximum number of possible IP addresses have been entered."
	 * @var string
	 */
	const LIMIT_EXCEEDED_DESCRIPTION_ENGLISH = "More than the maximum number of possible IP addresses have been entered.";
	
	/**
	 * German description of the status code 0102 of the service ipLocation:
	 *
	 * "Es wurde versucht, eine IPv6-Adresse aufzulösen. Dies wird noch nicht unterstützt."
	 * @var string
	 */
	const IP_NOT_VALID_DESCRIPTION_GERMAN = "Es wurde versucht, eine IPv6-Adresse aufzulösen. Dies wird noch nicht unterstützt.";
	
	/**
	 * English description of the status code 0102 of the service ipLocation:
	 *
	 * "An attempt was made to resolve an IPv6 address. This is not yet supported."
	 * @var string
	 */
	const IP_NOT_VALID_DESCRIPTION_ENGLISH = "An attempt was made to resolve an IPv6 address. This is not yet supported.";
	
	/**
	 * German description of the status code 0103 of the service ipLocation:
	 *
	 * "Es wurde eine unbekannte IP-Adresse angegeben."
	 * @var string
	 */
	const IP_CANNOT_BE_LOCALIZED_DESCRIPTION_GERMAN = "Es wurde eine unbekannte IP-Adresse angegeben.";
	
	/**
	 * English description of the status code 0103 of the service ipLocation:
	 *
	 * "An unknown IP address was specified."
	 * @var string
	 */
	const IP_CANNOT_BE_LOCALIZED_DESCRIPTION_ENGLISH = "An unknown IP address was specified.";
}