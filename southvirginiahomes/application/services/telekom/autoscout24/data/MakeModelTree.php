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
 * The container for GetMakeModelTree response.
 * @package autoScout24
 * @subpackage data
 */


/**
 * The container for GetMakeModelTree response.
 * @package autoScout24
 * @subpackage data
 */
class MakeModelTree {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $request_id Auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 * @param MakeModelTreeErrors $errors The error code and message, see error.
	 * @param MakeModelTreeBuild $build Build information container
	 * @param STX3IDPool $stx3_idpool Array of elements: elements and nodes
	 */
	function __construct($request_id = null, $errors = null, $build = null, $stx3_idpool = null){
		$this->request_id = $request_id;
		$this->errors = $errors;
		$this->build = $build;
		$this->stx3_idpool = $stx3_idpool;
	}
	
	
	/**
	 * Value of auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 */
	private $request_id;
		
	/**
	 * Gets auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 * @return string
	 *		Auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 */
	function getRequestId() {
		return $this->request_id;
	}
	
	/**
	 * Sets auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 * @param string $request_id
	 *		New value for auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 */
	function setRequestId($request_id) {
		$this->request_id = $request_id;
	}
	
	/**
	 * Value of the error code and message, see error.
	 */
	private $errors;
		
	/**
	 * Gets the error code and message, see error.
	 * @return MakeModelTreeErrors
	 *		The error code and message, see error.
	 */
	function getErrors() {
		return $this->errors;
	}
	
	/**
	 * Sets the error code and message, see error.
	 * @param MakeModelTreeErrors $errors
	 *		New value for the error code and message, see error.
	 */
	function setErrors($errors) {
		$this->errors = $errors;
	}
	
	/**
	 * Value of build information container
	 */
	private $build;
		
	/**
	 * Gets build information container
	 * @return MakeModelTreeBuild
	 *		Build information container
	 */
	function getBuild() {
		return $this->build;
	}
	
	/**
	 * Sets build information container
	 * @param MakeModelTreeBuild $build
	 *		New value for build information container
	 */
	function setBuild($build) {
		$this->build = $build;
	}
	
	/**
	 * Value of array of elements: elements and nodes
	 */
	private $stx3_idpool;
		
	/**
	 * Gets array of elements: elements and nodes
	 * @return STX3IDPool
	 *		Array of elements: elements and nodes
	 */
	function getStx3Idpool() {
		return $this->stx3_idpool;
	}
	
	/**
	 * Sets array of elements: elements and nodes
	 * @param STX3IDPool $stx3_idpool
	 *		New value for array of elements: elements and nodes
	 */
	function setStx3Idpool($stx3_idpool) {
		$this->stx3_idpool = $stx3_idpool;
	}
}