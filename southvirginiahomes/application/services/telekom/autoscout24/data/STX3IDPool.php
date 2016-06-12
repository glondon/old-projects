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
 * A pool of IDs
 * @package autoScout24
 * @subpackage data
 */


/**
 * A pool of IDs
 * @package autoScout24
 * @subpackage data
 */
class STX3IDPool {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param STX3IDPoolElements $elements Array of elements: name, id and text
	 * @param ArrayOfNodes $nodes An array of nodes
	 */
	function __construct($elements = null, $nodes = null){
		$this->elements = $elements;
		$this->nodes = $nodes;
	}
	
	
	/**
	 * Value of array of elements: name, id and text
	 */
	private $elements;
		
	/**
	 * Gets array of elements: name, id and text
	 * @return STX3IDPoolElements
	 *		Array of elements: name, id and text
	 */
	function getElements() {
		return $this->elements;
	}
	
	/**
	 * Sets array of elements: name, id and text
	 * @param STX3IDPoolElements $elements
	 *		New value for array of elements: name, id and text
	 */
	function setElements($elements) {
		$this->elements = $elements;
	}
	
	/**
	 * Value of an array of nodes
	 */
	private $nodes;
		
	/**
	 * Gets an array of nodes
	 * @return ArrayOfNodes
	 *		An array of nodes
	 */
	function getNodes() {
		return $this->nodes;
	}
	
	/**
	 * Sets an array of nodes
	 * @param ArrayOfNodes $nodes
	 *		New value for an array of nodes
	 */
	function setNodes($nodes) {
		$this->nodes = $nodes;
	}
}