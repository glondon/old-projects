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
 * An element
 * @package autoScout24
 * @subpackage data
 */


/**
 * An element
 * @package autoScout24
 * @subpackage data
 */
class Element {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $name Name of an enumeration list to which this item belongs.
	 * @param string $id ID of an enumeration item.
	 * @param string $text Name of an enumeration item.
	 */
	function __construct($name = null, $id = null, $text = null){
		$this->name = $name;
		$this->id = $id;
		$this->text = $text;
	}
	
	
	/**
	 * Value of name of an enumeration list to which this item belongs.
	 */
	private $name;
		
	/**
	 * Gets name of an enumeration list to which this item belongs.
	 * @return string
	 *		Name of an enumeration list to which this item belongs.
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * Sets name of an enumeration list to which this item belongs.
	 * @param string $name
	 *		New value for name of an enumeration list to which this item belongs.
	 */
	function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Value of iD of an enumeration item.
	 */
	private $id;
		
	/**
	 * Gets iD of an enumeration item.
	 * @return string
	 *		ID of an enumeration item.
	 */
	function getId() {
		return $this->id;
	}
	
	/**
	 * Sets iD of an enumeration item.
	 * @param string $id
	 *		New value for iD of an enumeration item.
	 */
	function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * Value of name of an enumeration item.
	 */
	private $text;
		
	/**
	 * Gets name of an enumeration item.
	 * @return string
	 *		Name of an enumeration item.
	 */
	function getText() {
		return $this->text;
	}
	
	/**
	 * Sets name of an enumeration item.
	 * @param string $text
	 *		New value for name of an enumeration item.
	 */
	function setText($text) {
		$this->text = $text;
	}
}