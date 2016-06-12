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
 * The media data, see x_code and images
 * @package autoScout24
 * @subpackage data
 */


/**
 * The media data, see x_code and images
 * @package autoScout24
 * @subpackage data
 */
class VehicleMedia {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleMediaXCode $x_code XCode
	 * @param VehicleMediaImages $images Images
	 */
	function __construct($x_code = null, $images = null){
		$this->x_code = $x_code;
		$this->images = $images;
	}
	
	
	/**
	 * Value of xCode
	 */
	private $x_code;
		
	/**
	 * Gets xCode
	 * @return VehicleMediaXCode
	 *		XCode
	 */
	function getXCode() {
		return $this->x_code;
	}
	
	/**
	 * Sets xCode
	 * @param VehicleMediaXCode $x_code
	 *		New value for xCode
	 */
	function setXCode($x_code) {
		$this->x_code = $x_code;
	}
	
	/**
	 * Value of images
	 */
	private $images;
		
	/**
	 * Gets images
	 * @return VehicleMediaImages
	 *		Images
	 */
	function getImages() {
		return $this->images;
	}
	
	/**
	 * Sets images
	 * @param VehicleMediaImages $images
	 *		New value for images
	 */
	function setImages($images) {
		$this->images = $images;
	}
}