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
 * The result of the operation getMakeModelTree(Retrieve the model tree structure)
 * @package autoScout24
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceResponse.php');

/**
 * The result of the operation getMakeModelTree(Retrieve the model tree structure)
 * @package autoScout24
 * @subpackage data
 */
class GetMakeModelTreeResponse extends TelekomServiceResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param TelekomServiceStatusResponse $status Telekom status information
	 * @param MakeModelTree $response The container for GetMakeModelTree response.
	 */
	function __construct($status = null, $response = null){
		parent::__construct($status);
		
		$this->response = $response;
	}
	
	
	/**
	 * Value of the container for GetMakeModelTree response.
	 */
	private $response;
		
	/**
	 * Gets the container for GetMakeModelTree response.
	 * @return MakeModelTree
	 *		The container for GetMakeModelTree response.
	 */
	function getResponse() {
		return $this->response;
	}
	
	/**
	 * Sets the container for GetMakeModelTree response.
	 * @param MakeModelTree $response
	 *		New value for the container for GetMakeModelTree response.
	 */
	function setResponse($response) {
		$this->response = $response;
	}
}