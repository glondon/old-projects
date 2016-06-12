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
 * A Node
 * @package autoScout24
 * @subpackage data
 */


/**
 * A Node
 * @package autoScout24
 * @subpackage data
 */
class Node {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $name Name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 * @param string $id ID of an enumeration item
	 * @param string $text Name of an enumeration item
	 * @param ArrayOfNodes $nodes An array of nodes
	 */
	function __construct($name = null, $id = null, $text = null, $nodes = null){
		$this->name = $name;
		$this->id = $id;
		$this->text = $text;
		$this->nodes = $nodes;
	}
	
	
	/**
	 * Value of name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 */
	private $name;
		
	/**
	 * Gets name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 * @return string
	 *		Name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * Sets name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 * @param string $name
	 *		New value for name of an enumeration list to which this item belongs. It’s either a brand, model line or a model.e.g. ‘brand’
	 */
	function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Value of iD of an enumeration item
	 */
	private $id;
		
	/**
	 * Gets iD of an enumeration item
	 * @return string
	 *		ID of an enumeration item
	 */
	function getId() {
		return $this->id;
	}
	
	/**
	 * Sets iD of an enumeration item
	 * @param string $id
	 *		New value for iD of an enumeration item
	 */
	function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * Value of name of an enumeration item
	 */
	private $text;
		
	/**
	 * Gets name of an enumeration item
	 * @return string
	 *		Name of an enumeration item
	 */
	function getText() {
		return $this->text;
	}
	
	/**
	 * Sets name of an enumeration item
	 * @param string $text
	 *		New value for name of an enumeration item
	 */
	function setText($text) {
		$this->text = $text;
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