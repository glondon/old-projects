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
 * The root of several images
 * @package autoScout24
 * @subpackage data
 */


/**
 * The root of several images
 * @package autoScout24
 * @subpackage data
 */
class RootPathsResponse {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $as24_url_root The root to the AS24 Detailpage
	 * @param string $images_big The root of the big image (max. size: 640x480)
	 * @param string $images_main The root of the image (size: 250x188)
	 * @param string $images_small The root of the small image (size: 20x90)
	 * @param string $images_thumbnails The root of the Thumbnail (size: 60x45)
	 */
	function __construct($as24_url_root = null, $images_big = null, $images_main = null, $images_small = null, $images_thumbnails = null){
		$this->as24_url_root = $as24_url_root;
		$this->images_big = $images_big;
		$this->images_main = $images_main;
		$this->images_small = $images_small;
		$this->images_thumbnails = $images_thumbnails;
	}
	
	
	/**
	 * Value of the root to the AS24 Detailpage
	 */
	private $as24_url_root;
		
	/**
	 * Gets the root to the AS24 Detailpage
	 * @return string
	 *		The root to the AS24 Detailpage
	 */
	function getAs24UrlRoot() {
		return $this->as24_url_root;
	}
	
	/**
	 * Sets the root to the AS24 Detailpage
	 * @param string $as24_url_root
	 *		New value for the root to the AS24 Detailpage
	 */
	function setAs24UrlRoot($as24_url_root) {
		$this->as24_url_root = $as24_url_root;
	}
	
	/**
	 * Value of the root of the big image (max. size: 640x480)
	 */
	private $images_big;
		
	/**
	 * Gets the root of the big image (max. size: 640x480)
	 * @return string
	 *		The root of the big image (max. size: 640x480)
	 */
	function getImagesBig() {
		return $this->images_big;
	}
	
	/**
	 * Sets the root of the big image (max. size: 640x480)
	 * @param string $images_big
	 *		New value for the root of the big image (max. size: 640x480)
	 */
	function setImagesBig($images_big) {
		$this->images_big = $images_big;
	}
	
	/**
	 * Value of the root of the image (size: 250x188)
	 */
	private $images_main;
		
	/**
	 * Gets the root of the image (size: 250x188)
	 * @return string
	 *		The root of the image (size: 250x188)
	 */
	function getImagesMain() {
		return $this->images_main;
	}
	
	/**
	 * Sets the root of the image (size: 250x188)
	 * @param string $images_main
	 *		New value for the root of the image (size: 250x188)
	 */
	function setImagesMain($images_main) {
		$this->images_main = $images_main;
	}
	
	/**
	 * Value of the root of the small image (size: 20x90)
	 */
	private $images_small;
		
	/**
	 * Gets the root of the small image (size: 20x90)
	 * @return string
	 *		The root of the small image (size: 20x90)
	 */
	function getImagesSmall() {
		return $this->images_small;
	}
	
	/**
	 * Sets the root of the small image (size: 20x90)
	 * @param string $images_small
	 *		New value for the root of the small image (size: 20x90)
	 */
	function setImagesSmall($images_small) {
		$this->images_small = $images_small;
	}
	
	/**
	 * Value of the root of the Thumbnail (size: 60x45)
	 */
	private $images_thumbnails;
		
	/**
	 * Gets the root of the Thumbnail (size: 60x45)
	 * @return string
	 *		The root of the Thumbnail (size: 60x45)
	 */
	function getImagesThumbnails() {
		return $this->images_thumbnails;
	}
	
	/**
	 * Sets the root of the Thumbnail (size: 60x45)
	 * @param string $images_thumbnails
	 *		New value for the root of the Thumbnail (size: 60x45)
	 */
	function setImagesThumbnails($images_thumbnails) {
		$this->images_thumbnails = $images_thumbnails;
	}
}