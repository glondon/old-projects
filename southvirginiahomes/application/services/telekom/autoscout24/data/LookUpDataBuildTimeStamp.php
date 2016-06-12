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
 * The build timestamp
 * @package autoScout24
 * @subpackage data
 */


/**
 * The build timestamp
 * @package autoScout24
 * @subpackage data
 */
class LookUpDataBuildTimeStamp {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $runtime Runtime
	 * @param string $service Service
	 */
	function __construct($runtime = null, $service = null){
		$this->runtime = $runtime;
		$this->service = $service;
	}
	
	
	/**
	 * Value of runtime
	 */
	private $runtime;
		
	/**
	 * Gets runtime
	 * @return string
	 *		Runtime
	 */
	function getRuntime() {
		return $this->runtime;
	}
	
	/**
	 * Sets runtime
	 * @param string $runtime
	 *		New value for runtime
	 */
	function setRuntime($runtime) {
		$this->runtime = $runtime;
	}
	
	/**
	 * Value of service
	 */
	private $service;
		
	/**
	 * Gets service
	 * @return string
	 *		Service
	 */
	function getService() {
		return $this->service;
	}
	
	/**
	 * Sets service
	 * @param string $service
	 *		New value for service
	 */
	function setService($service) {
		$this->service = $service;
	}
}