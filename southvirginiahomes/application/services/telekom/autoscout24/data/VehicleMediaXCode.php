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
 * XCode
 * @package autoScout24
 * @subpackage data
 */


/**
 * XCode
 * @package autoScout24
 * @subpackage data
 */
class VehicleMediaXCode {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $image_count The image count
	 * @param string $last_change_images The timestamp of the last change to the image list
	 */
	function __construct($image_count = null, $last_change_images = null){
		$this->image_count = $image_count;
		$this->last_change_images = $last_change_images;
	}
	
	
	/**
	 * Value of the image count
	 */
	private $image_count;
		
	/**
	 * Gets the image count
	 * @return string
	 *		The image count
	 */
	function getImageCount() {
		return $this->image_count;
	}
	
	/**
	 * Sets the image count
	 * @param string $image_count
	 *		New value for the image count
	 */
	function setImageCount($image_count) {
		$this->image_count = $image_count;
	}
	
	/**
	 * Value of the timestamp of the last change to the image list
	 */
	private $last_change_images;
		
	/**
	 * Gets the timestamp of the last change to the image list
	 * @return string
	 *		The timestamp of the last change to the image list
	 */
	function getLastChangeImages() {
		return $this->last_change_images;
	}
	
	/**
	 * Sets the timestamp of the last change to the image list
	 * @param string $last_change_images
	 *		New value for the timestamp of the last change to the image list
	 */
	function setLastChangeImages($last_change_images) {
		$this->last_change_images = $last_change_images;
	}
}