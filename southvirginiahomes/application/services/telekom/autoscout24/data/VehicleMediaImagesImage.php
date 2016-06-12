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
 * The image of an article
 * @package autoScout24
 * @subpackage data
 */


/**
 * The image of an article
 * @package autoScout24
 * @subpackage data
 */
class VehicleMediaImagesImage {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $uri The image URI
	 * @param string $position The image list position
	 */
	function __construct($uri = null, $position = null){
		$this->uri = $uri;
		$this->position = $position;
	}
	
	
	/**
	 * Value of the image URI
	 */
	private $uri;
		
	/**
	 * Gets the image URI
	 * @return string
	 *		The image URI
	 */
	function getUri() {
		return $this->uri;
	}
	
	/**
	 * Sets the image URI
	 * @param string $uri
	 *		New value for the image URI
	 */
	function setUri($uri) {
		$this->uri = $uri;
	}
	
	/**
	 * Value of the image list position
	 */
	private $position;
		
	/**
	 * Gets the image list position
	 * @return string
	 *		The image list position
	 */
	function getPosition() {
		return $this->position;
	}
	
	/**
	 * Sets the image list position
	 * @param string $position
	 *		New value for the image list position
	 */
	function setPosition($position) {
		$this->position = $position;
	}
}