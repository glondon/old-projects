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
 * Build information container
 * @package autoScout24
 * @subpackage data
 */


/**
 * Build information container
 * @package autoScout24
 * @subpackage data
 */
class MakeModelTreeBuild {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $number The build number
	 * @param MakeModelTreeBuildTimeStamp $time_stamp The build timestamp
	 */
	function __construct($number = null, $time_stamp = null){
		$this->number = $number;
		$this->time_stamp = $time_stamp;
	}
	
	
	/**
	 * Value of the build number
	 */
	private $number;
		
	/**
	 * Gets the build number
	 * @return string
	 *		The build number
	 */
	function getNumber() {
		return $this->number;
	}
	
	/**
	 * Sets the build number
	 * @param string $number
	 *		New value for the build number
	 */
	function setNumber($number) {
		$this->number = $number;
	}
	
	/**
	 * Value of the build timestamp
	 */
	private $time_stamp;
		
	/**
	 * Gets the build timestamp
	 * @return MakeModelTreeBuildTimeStamp
	 *		The build timestamp
	 */
	function getTimeStamp() {
		return $this->time_stamp;
	}
	
	/**
	 * Sets the build timestamp
	 * @param MakeModelTreeBuildTimeStamp $time_stamp
	 *		New value for the build timestamp
	 */
	function setTimeStamp($time_stamp) {
		$this->time_stamp = $time_stamp;
	}
}