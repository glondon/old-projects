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
 * A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
 * @package autoScout24
 * @subpackage data
 */


/**
 * A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParametersModelLines {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]string $model_line_id A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 */
	function __construct($model_line_id = null){
		$this->model_line_id = $model_line_id;
	}
	
	
	/**
	 * Value of a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 */
	private $model_line_id;
		
	/**
	 * Gets a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 * @return array[int]string
	 *		A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 */
	function getModelLineId() {
		return $this->model_line_id;
	}
	
	/**
	 * Sets a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 * @param array[int]string $model_line_id
	 *		New value for a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s))
	 */
	function setModelLineId($model_line_id) {
		$this->model_line_id = $model_line_id;
	}
}