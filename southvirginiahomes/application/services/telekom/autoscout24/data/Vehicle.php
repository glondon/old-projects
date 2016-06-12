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
 * Vehicle container
 * @package autoScout24
 * @subpackage data
 */


/**
 * Vehicle container
 * @package autoScout24
 * @subpackage data
 */
class Vehicle {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param VehicleAvailability $availability The avability data, see Avability
	 * @param VehicleEmission $emission The emission data, see Emission
	 * @param VehiclePreviousOwner $previous_owner List of previous owner, see ownerList
	 * @param VehicleConsumption $consumption The consumption data, see ConsumptionData
	 * @param string $accident_free The usage state
	 * @param string $body_color The exterior body colour as written by the car owner
	 * @param string $body_colorgroup_id The vehicle exterior color
	 * @param string $body_id The vehicle build type id
	 * @param string $body_painting_id The type of paint on the vehicle
	 * @param string $brand_id The Make ID of the vehicle
	 * @param string $category_id The legal type of vehicle
	 * @param VehicleEquipments $equipments A list of equipment feature ids owned by a vehicle
	 * @param string $fuel_type_id The fuel type of the vehicle
	 * @param string $gear_type_id The gearing type of the vehicle
	 * @param string $general_inspection The date of next general inspection for the vehicle
	 * @param string $initial_registration The date the vehicle was first registered
	 * @param string $kilowatt The vehicle power rating
	 * @param VehicleMedia $media The media data, see x_code and images
	 * @param string $mileage The vehicle mileage
	 * @param string $model_id The Model ID of the vehicle
	 * @param string $owners_offer_key Owner offer key
	 * @param VehiclePrices $prices Details of prices
	 * @param VehicleSeals $seals A list of seal ids that vehicle has
	 * @param string $title The currency of the article
	 * @param string $vehicle_id The AS24 article ID
	 * @param string $version Extra version text of the vehicle's model, as input by the vehicle owner
	 * @param VehicleXCode $x_code The number of images of the article
	 */
	function __construct($availability = null, $emission = null, $previous_owner = null, $consumption = null, $accident_free = null, $body_color = null, $body_colorgroup_id = null, $body_id = null, $body_painting_id = null, $brand_id = null, $category_id = null, $equipments = null, $fuel_type_id = null, $gear_type_id = null, $general_inspection = null, $initial_registration = null, $kilowatt = null, $media = null, $mileage = null, $model_id = null, $owners_offer_key = null, $prices = null, $seals = null, $title = null, $vehicle_id = null, $version = null, $x_code = null){
		$this->availability = $availability;
		$this->emission = $emission;
		$this->previous_owner = $previous_owner;
		$this->consumption = $consumption;
		$this->accident_free = $accident_free;
		$this->body_color = $body_color;
		$this->body_colorgroup_id = $body_colorgroup_id;
		$this->body_id = $body_id;
		$this->body_painting_id = $body_painting_id;
		$this->brand_id = $brand_id;
		$this->category_id = $category_id;
		$this->equipments = $equipments;
		$this->fuel_type_id = $fuel_type_id;
		$this->gear_type_id = $gear_type_id;
		$this->general_inspection = $general_inspection;
		$this->initial_registration = $initial_registration;
		$this->kilowatt = $kilowatt;
		$this->media = $media;
		$this->mileage = $mileage;
		$this->model_id = $model_id;
		$this->owners_offer_key = $owners_offer_key;
		$this->prices = $prices;
		$this->seals = $seals;
		$this->title = $title;
		$this->vehicle_id = $vehicle_id;
		$this->version = $version;
		$this->x_code = $x_code;
	}
	
	
	/**
	 * Value of the avability data, see Avability
	 */
	private $availability;
		
	/**
	 * Gets the avability data, see Avability
	 * @return VehicleAvailability
	 *		The avability data, see Avability
	 */
	function getAvailability() {
		return $this->availability;
	}
	
	/**
	 * Sets the avability data, see Avability
	 * @param VehicleAvailability $availability
	 *		New value for the avability data, see Avability
	 */
	function setAvailability($availability) {
		$this->availability = $availability;
	}
	
	/**
	 * Value of the emission data, see Emission
	 */
	private $emission;
		
	/**
	 * Gets the emission data, see Emission
	 * @return VehicleEmission
	 *		The emission data, see Emission
	 */
	function getEmission() {
		return $this->emission;
	}
	
	/**
	 * Sets the emission data, see Emission
	 * @param VehicleEmission $emission
	 *		New value for the emission data, see Emission
	 */
	function setEmission($emission) {
		$this->emission = $emission;
	}
	
	/**
	 * Value of list of previous owner, see ownerList
	 */
	private $previous_owner;
		
	/**
	 * Gets list of previous owner, see ownerList
	 * @return VehiclePreviousOwner
	 *		List of previous owner, see ownerList
	 */
	function getPreviousOwner() {
		return $this->previous_owner;
	}
	
	/**
	 * Sets list of previous owner, see ownerList
	 * @param VehiclePreviousOwner $previous_owner
	 *		New value for list of previous owner, see ownerList
	 */
	function setPreviousOwner($previous_owner) {
		$this->previous_owner = $previous_owner;
	}
	
	/**
	 * Value of the consumption data, see ConsumptionData
	 */
	private $consumption;
		
	/**
	 * Gets the consumption data, see ConsumptionData
	 * @return VehicleConsumption
	 *		The consumption data, see ConsumptionData
	 */
	function getConsumption() {
		return $this->consumption;
	}
	
	/**
	 * Sets the consumption data, see ConsumptionData
	 * @param VehicleConsumption $consumption
	 *		New value for the consumption data, see ConsumptionData
	 */
	function setConsumption($consumption) {
		$this->consumption = $consumption;
	}
	
	/**
	 * Value of the usage state
	 */
	private $accident_free;
		
	/**
	 * Gets the usage state
	 * @return string
	 *		The usage state
	 */
	function getAccidentFree() {
		return $this->accident_free;
	}
	
	/**
	 * Sets the usage state
	 * @param string $accident_free
	 *		New value for the usage state
	 */
	function setAccidentFree($accident_free) {
		$this->accident_free = $accident_free;
	}
	
	/**
	 * Value of the exterior body colour as written by the car owner
	 */
	private $body_color;
		
	/**
	 * Gets the exterior body colour as written by the car owner
	 * @return string
	 *		The exterior body colour as written by the car owner
	 */
	function getBodyColor() {
		return $this->body_color;
	}
	
	/**
	 * Sets the exterior body colour as written by the car owner
	 * @param string $body_color
	 *		New value for the exterior body colour as written by the car owner
	 */
	function setBodyColor($body_color) {
		$this->body_color = $body_color;
	}
	
	/**
	 * Value of the vehicle exterior color
	 */
	private $body_colorgroup_id;
		
	/**
	 * Gets the vehicle exterior color
	 * @return string
	 *		The vehicle exterior color
	 */
	function getBodyColorgroupId() {
		return $this->body_colorgroup_id;
	}
	
	/**
	 * Sets the vehicle exterior color
	 * @param string $body_colorgroup_id
	 *		New value for the vehicle exterior color
	 */
	function setBodyColorgroupId($body_colorgroup_id) {
		$this->body_colorgroup_id = $body_colorgroup_id;
	}
	
	/**
	 * Value of the vehicle build type id
	 */
	private $body_id;
		
	/**
	 * Gets the vehicle build type id
	 * @return string
	 *		The vehicle build type id
	 */
	function getBodyId() {
		return $this->body_id;
	}
	
	/**
	 * Sets the vehicle build type id
	 * @param string $body_id
	 *		New value for the vehicle build type id
	 */
	function setBodyId($body_id) {
		$this->body_id = $body_id;
	}
	
	/**
	 * Value of the type of paint on the vehicle
	 */
	private $body_painting_id;
		
	/**
	 * Gets the type of paint on the vehicle
	 * @return string
	 *		The type of paint on the vehicle
	 */
	function getBodyPaintingId() {
		return $this->body_painting_id;
	}
	
	/**
	 * Sets the type of paint on the vehicle
	 * @param string $body_painting_id
	 *		New value for the type of paint on the vehicle
	 */
	function setBodyPaintingId($body_painting_id) {
		$this->body_painting_id = $body_painting_id;
	}
	
	/**
	 * Value of the Make ID of the vehicle
	 */
	private $brand_id;
		
	/**
	 * Gets the Make ID of the vehicle
	 * @return string
	 *		The Make ID of the vehicle
	 */
	function getBrandId() {
		return $this->brand_id;
	}
	
	/**
	 * Sets the Make ID of the vehicle
	 * @param string $brand_id
	 *		New value for the Make ID of the vehicle
	 */
	function setBrandId($brand_id) {
		$this->brand_id = $brand_id;
	}
	
	/**
	 * Value of the legal type of vehicle
	 */
	private $category_id;
		
	/**
	 * Gets the legal type of vehicle
	 * @return string
	 *		The legal type of vehicle
	 */
	function getCategoryId() {
		return $this->category_id;
	}
	
	/**
	 * Sets the legal type of vehicle
	 * @param string $category_id
	 *		New value for the legal type of vehicle
	 */
	function setCategoryId($category_id) {
		$this->category_id = $category_id;
	}
	
	/**
	 * Value of a list of equipment feature ids owned by a vehicle
	 */
	private $equipments;
		
	/**
	 * Gets a list of equipment feature ids owned by a vehicle
	 * @return VehicleEquipments
	 *		A list of equipment feature ids owned by a vehicle
	 */
	function getEquipments() {
		return $this->equipments;
	}
	
	/**
	 * Sets a list of equipment feature ids owned by a vehicle
	 * @param VehicleEquipments $equipments
	 *		New value for a list of equipment feature ids owned by a vehicle
	 */
	function setEquipments($equipments) {
		$this->equipments = $equipments;
	}
	
	/**
	 * Value of the fuel type of the vehicle
	 */
	private $fuel_type_id;
		
	/**
	 * Gets the fuel type of the vehicle
	 * @return string
	 *		The fuel type of the vehicle
	 */
	function getFuelTypeId() {
		return $this->fuel_type_id;
	}
	
	/**
	 * Sets the fuel type of the vehicle
	 * @param string $fuel_type_id
	 *		New value for the fuel type of the vehicle
	 */
	function setFuelTypeId($fuel_type_id) {
		$this->fuel_type_id = $fuel_type_id;
	}
	
	/**
	 * Value of the gearing type of the vehicle
	 */
	private $gear_type_id;
		
	/**
	 * Gets the gearing type of the vehicle
	 * @return string
	 *		The gearing type of the vehicle
	 */
	function getGearTypeId() {
		return $this->gear_type_id;
	}
	
	/**
	 * Sets the gearing type of the vehicle
	 * @param string $gear_type_id
	 *		New value for the gearing type of the vehicle
	 */
	function setGearTypeId($gear_type_id) {
		$this->gear_type_id = $gear_type_id;
	}
	
	/**
	 * Value of the date of next general inspection for the vehicle
	 */
	private $general_inspection;
		
	/**
	 * Gets the date of next general inspection for the vehicle
	 * @return string
	 *		The date of next general inspection for the vehicle
	 */
	function getGeneralInspection() {
		return $this->general_inspection;
	}
	
	/**
	 * Sets the date of next general inspection for the vehicle
	 * @param string $general_inspection
	 *		New value for the date of next general inspection for the vehicle
	 */
	function setGeneralInspection($general_inspection) {
		$this->general_inspection = $general_inspection;
	}
	
	/**
	 * Value of the date the vehicle was first registered
	 */
	private $initial_registration;
		
	/**
	 * Gets the date the vehicle was first registered
	 * @return string
	 *		The date the vehicle was first registered
	 */
	function getInitialRegistration() {
		return $this->initial_registration;
	}
	
	/**
	 * Sets the date the vehicle was first registered
	 * @param string $initial_registration
	 *		New value for the date the vehicle was first registered
	 */
	function setInitialRegistration($initial_registration) {
		$this->initial_registration = $initial_registration;
	}
	
	/**
	 * Value of the vehicle power rating
	 */
	private $kilowatt;
		
	/**
	 * Gets the vehicle power rating
	 * @return string
	 *		The vehicle power rating
	 */
	function getKilowatt() {
		return $this->kilowatt;
	}
	
	/**
	 * Sets the vehicle power rating
	 * @param string $kilowatt
	 *		New value for the vehicle power rating
	 */
	function setKilowatt($kilowatt) {
		$this->kilowatt = $kilowatt;
	}
	
	/**
	 * Value of the media data, see x_code and images
	 */
	private $media;
		
	/**
	 * Gets the media data, see x_code and images
	 * @return VehicleMedia
	 *		The media data, see x_code and images
	 */
	function getMedia() {
		return $this->media;
	}
	
	/**
	 * Sets the media data, see x_code and images
	 * @param VehicleMedia $media
	 *		New value for the media data, see x_code and images
	 */
	function setMedia($media) {
		$this->media = $media;
	}
	
	/**
	 * Value of the vehicle mileage
	 */
	private $mileage;
		
	/**
	 * Gets the vehicle mileage
	 * @return string
	 *		The vehicle mileage
	 */
	function getMileage() {
		return $this->mileage;
	}
	
	/**
	 * Sets the vehicle mileage
	 * @param string $mileage
	 *		New value for the vehicle mileage
	 */
	function setMileage($mileage) {
		$this->mileage = $mileage;
	}
	
	/**
	 * Value of the Model ID of the vehicle
	 */
	private $model_id;
		
	/**
	 * Gets the Model ID of the vehicle
	 * @return string
	 *		The Model ID of the vehicle
	 */
	function getModelId() {
		return $this->model_id;
	}
	
	/**
	 * Sets the Model ID of the vehicle
	 * @param string $model_id
	 *		New value for the Model ID of the vehicle
	 */
	function setModelId($model_id) {
		$this->model_id = $model_id;
	}
	
	/**
	 * Value of owner offer key
	 */
	private $owners_offer_key;
		
	/**
	 * Gets owner offer key
	 * @return string
	 *		Owner offer key
	 */
	function getOwnersOfferKey() {
		return $this->owners_offer_key;
	}
	
	/**
	 * Sets owner offer key
	 * @param string $owners_offer_key
	 *		New value for owner offer key
	 */
	function setOwnersOfferKey($owners_offer_key) {
		$this->owners_offer_key = $owners_offer_key;
	}
	
	/**
	 * Value of details of prices
	 */
	private $prices;
		
	/**
	 * Gets details of prices
	 * @return VehiclePrices
	 *		Details of prices
	 */
	function getPrices() {
		return $this->prices;
	}
	
	/**
	 * Sets details of prices
	 * @param VehiclePrices $prices
	 *		New value for details of prices
	 */
	function setPrices($prices) {
		$this->prices = $prices;
	}
	
	/**
	 * Value of a list of seal ids that vehicle has
	 */
	private $seals;
		
	/**
	 * Gets a list of seal ids that vehicle has
	 * @return VehicleSeals
	 *		A list of seal ids that vehicle has
	 */
	function getSeals() {
		return $this->seals;
	}
	
	/**
	 * Sets a list of seal ids that vehicle has
	 * @param VehicleSeals $seals
	 *		New value for a list of seal ids that vehicle has
	 */
	function setSeals($seals) {
		$this->seals = $seals;
	}
	
	/**
	 * Value of the currency of the article
	 */
	private $title;
		
	/**
	 * Gets the currency of the article
	 * @return string
	 *		The currency of the article
	 */
	function getTitle() {
		return $this->title;
	}
	
	/**
	 * Sets the currency of the article
	 * @param string $title
	 *		New value for the currency of the article
	 */
	function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Value of the AS24 article ID
	 */
	private $vehicle_id;
		
	/**
	 * Gets the AS24 article ID
	 * @return string
	 *		The AS24 article ID
	 */
	function getVehicleId() {
		return $this->vehicle_id;
	}
	
	/**
	 * Sets the AS24 article ID
	 * @param string $vehicle_id
	 *		New value for the AS24 article ID
	 */
	function setVehicleId($vehicle_id) {
		$this->vehicle_id = $vehicle_id;
	}
	
	/**
	 * Value of extra version text of the vehicle's model, as input by the vehicle owner
	 */
	private $version;
		
	/**
	 * Gets extra version text of the vehicle's model, as input by the vehicle owner
	 * @return string
	 *		Extra version text of the vehicle's model, as input by the vehicle owner
	 */
	function getVersion() {
		return $this->version;
	}
	
	/**
	 * Sets extra version text of the vehicle's model, as input by the vehicle owner
	 * @param string $version
	 *		New value for extra version text of the vehicle's model, as input by the vehicle owner
	 */
	function setVersion($version) {
		$this->version = $version;
	}
	
	/**
	 * Value of the number of images of the article
	 */
	private $x_code;
		
	/**
	 * Gets the number of images of the article
	 * @return VehicleXCode
	 *		The number of images of the article
	 */
	function getXCode() {
		return $this->x_code;
	}
	
	/**
	 * Sets the number of images of the article
	 * @param VehicleXCode $x_code
	 *		New value for the number of images of the article
	 */
	function setXCode($x_code) {
		$this->x_code = $x_code;
	}
}