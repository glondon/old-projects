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
 * Images
 * @package autoScout24
 * @subpackage data
 */


/**
 * Images
 * @package autoScout24
 * @subpackage data
 */
class VehicleMediaImages {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param array[int]VehicleMediaImagesImage $image List of data type image.
	 */
	function __construct($image = null){
		$this->image = $image;
	}
	
	
	/**
	 * Value of list of data type image.
	 */
	private $image;
		
	/**
	 * Gets list of data type image.
	 * @return array[int]VehicleMediaImagesImage
	 *		List of data type image.
	 */
	function getImage() {
		return $this->image;
	}
	
	/**
	 * Sets list of data type image.
	 * @param array[int]VehicleMediaImagesImage $image
	 *		New value for list of data type image.
	 */
	function setImage($image) {
		$this->image = $image;
	}
}