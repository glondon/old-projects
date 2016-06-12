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
 * Array of nodes
 * @package autoScout24
 * @subpackage data
 */


/**
 * Array of nodes
 * @package autoScout24
 * @subpackage data
 */
class ArrayOfNodes {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]Node $node List of node
	 */
	function __construct($node = null){
		$this->node = $node;
	}
	
	
	/**
	 * Value of list of node
	 */
	private $node;
		
	/**
	 * Gets list of node
	 * @return array[int]Node
	 *		List of node
	 */
	function getNode() {
		return $this->node;
	}
	
	/**
	 * Sets list of node
	 * @param array[int]Node $node
	 *		New value for list of node
	 */
	function setNode($node) {
		$this->node = $node;
	}
}