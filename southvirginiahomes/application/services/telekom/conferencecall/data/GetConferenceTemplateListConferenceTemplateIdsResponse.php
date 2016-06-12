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
 * Liste der gefundenen Konferenz-Vorlagen.
 * @package conferenceCall
 * @subpackage data
 */


/**
 * Liste der gefundenen Konferenz-Vorlagen.
 * @package conferenceCall
 * @subpackage data
 */
class GetConferenceTemplateListConferenceTemplateIdsResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $conferenceTemplateId Die ID einer Konferenz-Vorlage
	 */
	function __construct($conferenceTemplateId = null){
		$this->conferenceTemplateId = $conferenceTemplateId;
	}
	
	
	/**
	 * Value of die ID einer Konferenz-Vorlage
	 */
	private $conferenceTemplateId;
		
	/**
	 * Gets die ID einer Konferenz-Vorlage
	 * @return string
	 *		Die ID einer Konferenz-Vorlage
	 */
	function getConferenceTemplateId() {
		return $this->conferenceTemplateId;
	}
	
	/**
	 * Sets die ID einer Konferenz-Vorlage
	 * @param string $conferenceTemplateId
	 *		New value for die ID einer Konferenz-Vorlage
	 */
	function setConferenceTemplateId($conferenceTemplateId) {
		$this->conferenceTemplateId = $conferenceTemplateId;
	}
}