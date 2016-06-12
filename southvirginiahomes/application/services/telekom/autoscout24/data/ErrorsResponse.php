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
 * An error consisting of an ID and a comprehensive message
 * @package autoScout24
 * @subpackage data
 */


/**
 * An error consisting of an ID and a comprehensive message
 * @package autoScout24
 * @subpackage data
 */
class ErrorsResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]ErrorsErrorResponse $error An array of data type error.
	 */
	function __construct($error = null){
		$this->error = $error;
	}
	
	
	/**
	 * Value of an array of data type error.
	 */
	private $error;
		
	/**
	 * Gets an array of data type error.
	 * @return array[int]ErrorsErrorResponse
	 *		An array of data type error.
	 */
	function getError() {
		return $this->error;
	}
	
	/**
	 * Sets an array of data type error.
	 * @param array[int]ErrorsErrorResponse $error
	 *		New value for an array of data type error.
	 */
	function setError($error) {
		$this->error = $error;
	}
}