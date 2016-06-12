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
 * Array of elements: name, id and text
 * @package autoScout24
 * @subpackage data
 */


/**
 * Array of elements: name, id and text
 * @package autoScout24
 * @subpackage data
 */
class STX3IDPoolElements {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]Element $element List of elements, see element.
	 */
	function __construct($element = null){
		$this->element = $element;
	}
	
	
	/**
	 * Value of list of elements, see element.
	 */
	private $element;
		
	/**
	 * Gets list of elements, see element.
	 * @return array[int]Element
	 *		List of elements, see element.
	 */
	function getElement() {
		return $this->element;
	}
	
	/**
	 * Sets list of elements, see element.
	 * @param array[int]Element $element
	 *		New value for list of elements, see element.
	 */
	function setElement($element) {
		$this->element = $element;
	}
}