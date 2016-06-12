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
 * The result of the operation getQuotaInformation(Quota abfragen)
 * @package quota
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation getQuotaInformation(Quota abfragen)
 * @package quota
 * @subpackage data
 */
class GetQuotaInformationResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param string $maxQuota Vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 * @param string $maxUserQuota Vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 * @param string $quotaLevel Anzahl der heute verbrauchten Quota-Punkte
	 */
	function __construct($status = null, $maxQuota = null, $maxUserQuota = null, $quotaLevel = null){
		parent::__construct($status);
		
		$this->maxQuota = $maxQuota;
		$this->maxUserQuota = $maxUserQuota;
		$this->quotaLevel = $quotaLevel;
	}
	
	
	/**
	 * Value of vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 */
	private $maxQuota;
		
	/**
	 * Gets vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 * @return string
	 *		Vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 */
	function getMaxQuota() {
		return $this->maxQuota;
	}
	
	/**
	 * Sets vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 * @param string $maxQuota
	 *		New value for vom System festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Systemquota kann nicht von der Benutzerquota (maxUserQuota) überschritten werden.
	 */
	function setMaxQuota($maxQuota) {
		$this->maxQuota = $maxQuota;
	}
	
	/**
	 * Value of vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 */
	private $maxUserQuota;
		
	/**
	 * Gets vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 * @return string
	 *		Vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 */
	function getMaxUserQuota() {
		return $this->maxUserQuota;
	}
	
	/**
	 * Sets vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 * @param string $maxUserQuota
	 *		New value for vom Benutzer festgelegte Grenze an Quota-Punkten, die pro Tag maximal verbraucht werden dürfen.Diese Benutzerquota kann die Systemquota (maxQuota) nicht überschreiten.
	 */
	function setMaxUserQuota($maxUserQuota) {
		$this->maxUserQuota = $maxUserQuota;
	}
	
	/**
	 * Value of anzahl der heute verbrauchten Quota-Punkte
	 */
	private $quotaLevel;
		
	/**
	 * Gets anzahl der heute verbrauchten Quota-Punkte
	 * @return string
	 *		Anzahl der heute verbrauchten Quota-Punkte
	 */
	function getQuotaLevel() {
		return $this->quotaLevel;
	}
	
	/**
	 * Sets anzahl der heute verbrauchten Quota-Punkte
	 * @param string $quotaLevel
	 *		New value for anzahl der heute verbrauchten Quota-Punkte
	 */
	function setQuotaLevel($quotaLevel) {
		$this->quotaLevel = $quotaLevel;
	}
}