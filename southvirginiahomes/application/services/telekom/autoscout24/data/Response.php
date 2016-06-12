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
 * The container for FindArticles response.
 * @package autoScout24
 * @subpackage data
 */


/**
 * The container for FindArticles response.
 * @package autoScout24
 * @subpackage data
 */
class Response {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $request_id Auto generated ID of each response. This is provided in order to have a unique identification of a response in case it’s needed in some discussions/troubleshooting etc.
	 * @param string $status Statuscode
	 * @param ErrorsResponse $errors An error consisting of an ID and a comprehensive message
	 * @param BuildResponse $build Build information (timestamp and number)
	 * @param RootPathsResponse $root_paths The root of several images
	 * @param VehicleSearchParameters $used_vehicle_search_parameters The used vehicle search parameter.
	 * @param VehiclesResponse $vehicles All found articles including their info
	 * @param string $vehicles_found The number of articles that have been found
	 */
	function __construct($request_id = null, $status = null, $errors = null, $build = null, $root_paths = null, $used_vehicle_search_parameters = null, $vehicles = null, $vehicles_found = null){
		$this->request_id = $request_id;
		$this->status = $status;
		$this->errors = $errors;
		$this->build = $build;
		$this->root_paths = $root_paths;
		$this->used_vehicle_search_parameters = $used_vehicle_search_parameters;
		$this->vehicles = $vehicles;
		$this->vehicles_found = $vehicles_found;
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
	 * Value of statuscode
	 */
	private $status;
		
	/**
	 * Gets statuscode
	 * @return string
	 *		Statuscode
	 */
	function getStatus() {
		return $this->status;
	}
	
	/**
	 * Sets statuscode
	 * @param string $status
	 *		New value for statuscode
	 */
	function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * Value of an error consisting of an ID and a comprehensive message
	 */
	private $errors;
		
	/**
	 * Gets an error consisting of an ID and a comprehensive message
	 * @return ErrorsResponse
	 *		An error consisting of an ID and a comprehensive message
	 */
	function getErrors() {
		return $this->errors;
	}
	
	/**
	 * Sets an error consisting of an ID and a comprehensive message
	 * @param ErrorsResponse $errors
	 *		New value for an error consisting of an ID and a comprehensive message
	 */
	function setErrors($errors) {
		$this->errors = $errors;
	}
	
	/**
	 * Value of build information (timestamp and number)
	 */
	private $build;
		
	/**
	 * Gets build information (timestamp and number)
	 * @return BuildResponse
	 *		Build information (timestamp and number)
	 */
	function getBuild() {
		return $this->build;
	}
	
	/**
	 * Sets build information (timestamp and number)
	 * @param BuildResponse $build
	 *		New value for build information (timestamp and number)
	 */
	function setBuild($build) {
		$this->build = $build;
	}
	
	/**
	 * Value of the root of several images
	 */
	private $root_paths;
		
	/**
	 * Gets the root of several images
	 * @return RootPathsResponse
	 *		The root of several images
	 */
	function getRootPaths() {
		return $this->root_paths;
	}
	
	/**
	 * Sets the root of several images
	 * @param RootPathsResponse $root_paths
	 *		New value for the root of several images
	 */
	function setRootPaths($root_paths) {
		$this->root_paths = $root_paths;
	}
	
	/**
	 * Value of the used vehicle search parameter.
	 */
	private $used_vehicle_search_parameters;
		
	/**
	 * Gets the used vehicle search parameter.
	 * @return VehicleSearchParameters
	 *		The used vehicle search parameter.
	 */
	function getUsedVehicleSearchParameters() {
		return $this->used_vehicle_search_parameters;
	}
	
	/**
	 * Sets the used vehicle search parameter.
	 * @param VehicleSearchParameters $used_vehicle_search_parameters
	 *		New value for the used vehicle search parameter.
	 */
	function setUsedVehicleSearchParameters($used_vehicle_search_parameters) {
		$this->used_vehicle_search_parameters = $used_vehicle_search_parameters;
	}
	
	/**
	 * Value of all found articles including their info
	 */
	private $vehicles;
		
	/**
	 * Gets all found articles including their info
	 * @return VehiclesResponse
	 *		All found articles including their info
	 */
	function getVehicles() {
		return $this->vehicles;
	}
	
	/**
	 * Sets all found articles including their info
	 * @param VehiclesResponse $vehicles
	 *		New value for all found articles including their info
	 */
	function setVehicles($vehicles) {
		$this->vehicles = $vehicles;
	}
	
	/**
	 * Value of the number of articles that have been found
	 */
	private $vehicles_found;
		
	/**
	 * Gets the number of articles that have been found
	 * @return string
	 *		The number of articles that have been found
	 */
	function getVehiclesFound() {
		return $this->vehicles_found;
	}
	
	/**
	 * Sets the number of articles that have been found
	 * @param string $vehicles_found
	 *		New value for the number of articles that have been found
	 */
	function setVehiclesFound($vehicles_found) {
		$this->vehicles_found = $vehicles_found;
	}
}