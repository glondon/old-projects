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
 * The number of images of the article
 * @package autoScout24
 * @subpackage data
 */


/**
 * The number of images of the article
 * @package autoScout24
 * @subpackage data
 */
class VehicleXCode {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $as24_detail_page_url The path to the AS24 Detailpage without the root
	 */
	function __construct($as24_detail_page_url = null){
		$this->as24_detail_page_url = $as24_detail_page_url;
	}
	
	
	/**
	 * Value of the path to the AS24 Detailpage without the root
	 */
	private $as24_detail_page_url;
		
	/**
	 * Gets the path to the AS24 Detailpage without the root
	 * @return string
	 *		The path to the AS24 Detailpage without the root
	 */
	function getAs24DetailPageUrl() {
		return $this->as24_detail_page_url;
	}
	
	/**
	 * Sets the path to the AS24 Detailpage without the root
	 * @param string $as24_detail_page_url
	 *		New value for the path to the AS24 Detailpage without the root
	 */
	function setAs24DetailPageUrl($as24_detail_page_url) {
		$this->as24_detail_page_url = $as24_detail_page_url;
	}
}