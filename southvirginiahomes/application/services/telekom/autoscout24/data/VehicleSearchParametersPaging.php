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
 * The number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
 * @package autoScout24
 * @subpackage data
 */


/**
 * The number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersPaging {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $current_page The Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 * @param string $results_per_page The number of results you want to receive per page
	 */
	function __construct($current_page = null, $results_per_page = null){
		$this->current_page = $current_page;
		$this->results_per_page = $results_per_page;
	}
	
	
	/**
	 * Value of the Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 */
	private $current_page;
		
	/**
	 * Gets the Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 * @return string
	 *		The Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 */
	function getCurrentPage() {
		return $this->current_page;
	}
	
	/**
	 * Sets the Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 * @param string $current_page
	 *		New value for the Current Page you want to view. This value is also dependant on the previous members. To calculate the number of pages available just divide the returned result count with your results_per_page
	 */
	function setCurrentPage($current_page) {
		$this->current_page = $current_page;
	}
	
	/**
	 * Value of the number of results you want to receive per page
	 */
	private $results_per_page;
		
	/**
	 * Gets the number of results you want to receive per page
	 * @return string
	 *		The number of results you want to receive per page
	 */
	function getResultsPerPage() {
		return $this->results_per_page;
	}
	
	/**
	 * Sets the number of results you want to receive per page
	 * @param string $results_per_page
	 *		New value for the number of results you want to receive per page
	 */
	function setResultsPerPage($results_per_page) {
		$this->results_per_page = $results_per_page;
	}
}