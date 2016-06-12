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
 * An error
 * @package autoScout24
 * @subpackage data
 */


/**
 * An error
 * @package autoScout24
 * @subpackage data
 */
class LookUpDataErrorsError {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $code ID of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 * @param string $message Description of an error.
	 */
	function __construct($code = null, $message = null){
		$this->code = $code;
		$this->message = $message;
	}
	
	
	/**
	 * Value of iD of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 */
	private $code;
		
	/**
	 * Gets iD of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 * @return string
	 *		ID of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 */
	function getCode() {
		return $this->code;
	}
	
	/**
	 * Sets iD of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 * @param string $code
	 *		New value for iD of an error in a string format. String format is used instead of a numerical one in order to have more descriptive & human readable errors.
	 */
	function setCode($code) {
		$this->code = $code;
	}
	
	/**
	 * Value of description of an error.
	 */
	private $message;
		
	/**
	 * Gets description of an error.
	 * @return string
	 *		Description of an error.
	 */
	function getMessage() {
		return $this->message;
	}
	
	/**
	 * Sets description of an error.
	 * @param string $message
	 *		New value for description of an error.
	 */
	function setMessage($message) {
		$this->message = $message;
	}
}