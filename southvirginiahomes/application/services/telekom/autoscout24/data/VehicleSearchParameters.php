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
 * Search parameters
 * @package autoScout24
 * @subpackage data
 */


/**
 * Search parameters
 * @package autoScout24
 * @subpackage data
 */
class VehicleSearchParameters {
	
	/**
	 * Constructs the data object with the specified values.
	 *
	 * Invocation of the constructor without parameters is possible.
	 * @param string $accident_free Usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 * @param VehicleSearchParametersAddress $address The adress
	 * @param VehicleSearchParametersAvailability $availability A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 * @param VehicleSearchParametersBodies $bodies A list of vehicle build type ids to search for
	 * @param VehicleSearchParametersBodyColorgroups $body_colorgroups A list of vehicle exterior Colour ids to search for
	 * @param VehicleSearchParametersBodyPaintings $body_paintings A list of paint type keys to include in the search
	 * @param VehicleSearchParametersBrands $brands A list of none, one or multiple number of make identifiers to search for
	 * @param VehicleSearchParametersCategories $categories List of legally defined types of vehicles to search for
	 * @param string $dealer_id The seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 * @param VehicleSearchParametersDoors $doors Minimum number of vehicle doors and maximum number of vehicle doors.
	 * @param VehicleSearchParametersEmission $emission Minimum emission class to search for.
	 * @param VehicleSearchParametersEquipments $equipments A list of equipment feature-ids owned by a vehicle
	 * @param VehicleSearchParametersFuelTypes $fuel_types A list of none, one or multiple number of fuels to search for
	 * @param VehicleSearchParametersGearTypeIds $gear_type_ids A list of gear types to search for
	 * @param VehicleSearchParametersGeneralInspection $general_inspection Lower and upper limit for the earliest date of the next required inspection.
	 * @param VehicleSearchParametersInitialRegistration $initial_registration Earliest and latest date of registration the results must /may have.
	 * @param VehicleSearchParametersKilowatt $kilowatt Minimum and Maximum power rating the results must / may have.Unit is kW.
	 * @param VehicleSearchParametersMileage $mileage The minimum and maximum mileage the results must / may have.Unit is km.
	 * @param VehicleSearchParametersModelLines $model_lines A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 * @param VehicleSearchParametersModels $models A list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 * @param string $owners_offer_key The owner offer key
	 * @param VehicleSearchParametersPaging $paging The number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 * @param VehicleSearchParametersPreviousOwnerCount $previous_owner_count Minimum number of previous vehicle owners to look for.
	 * @param VehicleSearchParametersPricePublic $price_public The minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 * @param string $show_dealer_vehicles Include only dealer articles in the search.
	 * @param string $show_private_vehicles Include only articles from private persons in the search.
	 * @param string $show_with_images_only Filter to include only vehicles with images
	 * @param VehicleSearchParametersSorting $sorting Specifies the column you want to sort for
	 * @param string $version The version of the model
	 */
	function __construct($accident_free = null, $address = null, $availability = null, $bodies = null, $body_colorgroups = null, $body_paintings = null, $brands = null, $categories = null, $dealer_id = null, $doors = null, $emission = null, $equipments = null, $fuel_types = null, $gear_type_ids = null, $general_inspection = null, $initial_registration = null, $kilowatt = null, $mileage = null, $model_lines = null, $models = null, $owners_offer_key = null, $paging = null, $previous_owner_count = null, $price_public = null, $show_dealer_vehicles = null, $show_private_vehicles = null, $show_with_images_only = null, $sorting = null, $version = null){
		$this->accident_free = $accident_free;
		$this->address = $address;
		$this->availability = $availability;
		$this->bodies = $bodies;
		$this->body_colorgroups = $body_colorgroups;
		$this->body_paintings = $body_paintings;
		$this->brands = $brands;
		$this->categories = $categories;
		$this->dealer_id = $dealer_id;
		$this->doors = $doors;
		$this->emission = $emission;
		$this->equipments = $equipments;
		$this->fuel_types = $fuel_types;
		$this->gear_type_ids = $gear_type_ids;
		$this->general_inspection = $general_inspection;
		$this->initial_registration = $initial_registration;
		$this->kilowatt = $kilowatt;
		$this->mileage = $mileage;
		$this->model_lines = $model_lines;
		$this->models = $models;
		$this->owners_offer_key = $owners_offer_key;
		$this->paging = $paging;
		$this->previous_owner_count = $previous_owner_count;
		$this->price_public = $price_public;
		$this->show_dealer_vehicles = $show_dealer_vehicles;
		$this->show_private_vehicles = $show_private_vehicles;
		$this->show_with_images_only = $show_with_images_only;
		$this->sorting = $sorting;
		$this->version = $version;
	}
	
	
	/**
	 * Value of usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 */
	private $accident_free;
		
	/**
	 * Gets usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 * @return string
	 *		Usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 */
	function getAccidentFree() {
		return $this->accident_free;
	}
	
	/**
	 * Sets usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 * @param string $accident_free
	 *		New value for usage state of vehicle to include in the search.If parameter is True all usage states will be included into resultset, new and used vehicles will be found otherwise. If parameter is not present the filter is ignored. 
	 */
	function setAccidentFree($accident_free) {
		$this->accident_free = $accident_free;
	}
	
	/**
	 * Value of the adress
	 */
	private $address;
		
	/**
	 * Gets the adress
	 * @return VehicleSearchParametersAddress
	 *		The adress
	 */
	function getAddress() {
		return $this->address;
	}
	
	/**
	 * Sets the adress
	 * @param VehicleSearchParametersAddress $address
	 *		New value for the adress
	 */
	function setAddress($address) {
		$this->address = $address;
	}
	
	/**
	 * Value of a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 */
	private $availability;
		
	/**
	 * Gets a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 * @return VehicleSearchParametersAvailability
	 *		A maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 */
	function getAvailability() {
		return $this->availability;
	}
	
	/**
	 * Sets a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 * @param VehicleSearchParametersAvailability $availability
	 *		New value for a maximum age a vehicle included in the search may have, in terms of the vehicles advertisement in the Autoscout database.Unit is days.
	 */
	function setAvailability($availability) {
		$this->availability = $availability;
	}
	
	/**
	 * Value of a list of vehicle build type ids to search for
	 */
	private $bodies;
		
	/**
	 * Gets a list of vehicle build type ids to search for
	 * @return VehicleSearchParametersBodies
	 *		A list of vehicle build type ids to search for
	 */
	function getBodies() {
		return $this->bodies;
	}
	
	/**
	 * Sets a list of vehicle build type ids to search for
	 * @param VehicleSearchParametersBodies $bodies
	 *		New value for a list of vehicle build type ids to search for
	 */
	function setBodies($bodies) {
		$this->bodies = $bodies;
	}
	
	/**
	 * Value of a list of vehicle exterior Colour ids to search for
	 */
	private $body_colorgroups;
		
	/**
	 * Gets a list of vehicle exterior Colour ids to search for
	 * @return VehicleSearchParametersBodyColorgroups
	 *		A list of vehicle exterior Colour ids to search for
	 */
	function getBodyColorgroups() {
		return $this->body_colorgroups;
	}
	
	/**
	 * Sets a list of vehicle exterior Colour ids to search for
	 * @param VehicleSearchParametersBodyColorgroups $body_colorgroups
	 *		New value for a list of vehicle exterior Colour ids to search for
	 */
	function setBodyColorgroups($body_colorgroups) {
		$this->body_colorgroups = $body_colorgroups;
	}
	
	/**
	 * Value of a list of paint type keys to include in the search
	 */
	private $body_paintings;
		
	/**
	 * Gets a list of paint type keys to include in the search
	 * @return VehicleSearchParametersBodyPaintings
	 *		A list of paint type keys to include in the search
	 */
	function getBodyPaintings() {
		return $this->body_paintings;
	}
	
	/**
	 * Sets a list of paint type keys to include in the search
	 * @param VehicleSearchParametersBodyPaintings $body_paintings
	 *		New value for a list of paint type keys to include in the search
	 */
	function setBodyPaintings($body_paintings) {
		$this->body_paintings = $body_paintings;
	}
	
	/**
	 * Value of a list of none, one or multiple number of make identifiers to search for
	 */
	private $brands;
		
	/**
	 * Gets a list of none, one or multiple number of make identifiers to search for
	 * @return VehicleSearchParametersBrands
	 *		A list of none, one or multiple number of make identifiers to search for
	 */
	function getBrands() {
		return $this->brands;
	}
	
	/**
	 * Sets a list of none, one or multiple number of make identifiers to search for
	 * @param VehicleSearchParametersBrands $brands
	 *		New value for a list of none, one or multiple number of make identifiers to search for
	 */
	function setBrands($brands) {
		$this->brands = $brands;
	}
	
	/**
	 * Value of list of legally defined types of vehicles to search for
	 */
	private $categories;
		
	/**
	 * Gets list of legally defined types of vehicles to search for
	 * @return VehicleSearchParametersCategories
	 *		List of legally defined types of vehicles to search for
	 */
	function getCategories() {
		return $this->categories;
	}
	
	/**
	 * Sets list of legally defined types of vehicles to search for
	 * @param VehicleSearchParametersCategories $categories
	 *		New value for list of legally defined types of vehicles to search for
	 */
	function setCategories($categories) {
		$this->categories = $categories;
	}
	
	/**
	 * Value of the seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 */
	private $dealer_id;
		
	/**
	 * Gets the seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 * @return string
	 *		The seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 */
	function getDealerId() {
		return $this->dealer_id;
	}
	
	/**
	 * Sets the seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 * @param string $dealer_id
	 *		New value for the seller id which uniquely identifies the Dealer when performing a B2B dealer search.
	 */
	function setDealerId($dealer_id) {
		$this->dealer_id = $dealer_id;
	}
	
	/**
	 * Value of minimum number of vehicle doors and maximum number of vehicle doors.
	 */
	private $doors;
		
	/**
	 * Gets minimum number of vehicle doors and maximum number of vehicle doors.
	 * @return VehicleSearchParametersDoors
	 *		Minimum number of vehicle doors and maximum number of vehicle doors.
	 */
	function getDoors() {
		return $this->doors;
	}
	
	/**
	 * Sets minimum number of vehicle doors and maximum number of vehicle doors.
	 * @param VehicleSearchParametersDoors $doors
	 *		New value for minimum number of vehicle doors and maximum number of vehicle doors.
	 */
	function setDoors($doors) {
		$this->doors = $doors;
	}
	
	/**
	 * Value of minimum emission class to search for.
	 */
	private $emission;
		
	/**
	 * Gets minimum emission class to search for.
	 * @return VehicleSearchParametersEmission
	 *		Minimum emission class to search for.
	 */
	function getEmission() {
		return $this->emission;
	}
	
	/**
	 * Sets minimum emission class to search for.
	 * @param VehicleSearchParametersEmission $emission
	 *		New value for minimum emission class to search for.
	 */
	function setEmission($emission) {
		$this->emission = $emission;
	}
	
	/**
	 * Value of a list of equipment feature-ids owned by a vehicle
	 */
	private $equipments;
		
	/**
	 * Gets a list of equipment feature-ids owned by a vehicle
	 * @return VehicleSearchParametersEquipments
	 *		A list of equipment feature-ids owned by a vehicle
	 */
	function getEquipments() {
		return $this->equipments;
	}
	
	/**
	 * Sets a list of equipment feature-ids owned by a vehicle
	 * @param VehicleSearchParametersEquipments $equipments
	 *		New value for a list of equipment feature-ids owned by a vehicle
	 */
	function setEquipments($equipments) {
		$this->equipments = $equipments;
	}
	
	/**
	 * Value of a list of none, one or multiple number of fuels to search for
	 */
	private $fuel_types;
		
	/**
	 * Gets a list of none, one or multiple number of fuels to search for
	 * @return VehicleSearchParametersFuelTypes
	 *		A list of none, one or multiple number of fuels to search for
	 */
	function getFuelTypes() {
		return $this->fuel_types;
	}
	
	/**
	 * Sets a list of none, one or multiple number of fuels to search for
	 * @param VehicleSearchParametersFuelTypes $fuel_types
	 *		New value for a list of none, one or multiple number of fuels to search for
	 */
	function setFuelTypes($fuel_types) {
		$this->fuel_types = $fuel_types;
	}
	
	/**
	 * Value of a list of gear types to search for
	 */
	private $gear_type_ids;
		
	/**
	 * Gets a list of gear types to search for
	 * @return VehicleSearchParametersGearTypeIds
	 *		A list of gear types to search for
	 */
	function getGearTypeIds() {
		return $this->gear_type_ids;
	}
	
	/**
	 * Sets a list of gear types to search for
	 * @param VehicleSearchParametersGearTypeIds $gear_type_ids
	 *		New value for a list of gear types to search for
	 */
	function setGearTypeIds($gear_type_ids) {
		$this->gear_type_ids = $gear_type_ids;
	}
	
	/**
	 * Value of lower and upper limit for the earliest date of the next required inspection.
	 */
	private $general_inspection;
		
	/**
	 * Gets lower and upper limit for the earliest date of the next required inspection.
	 * @return VehicleSearchParametersGeneralInspection
	 *		Lower and upper limit for the earliest date of the next required inspection.
	 */
	function getGeneralInspection() {
		return $this->general_inspection;
	}
	
	/**
	 * Sets lower and upper limit for the earliest date of the next required inspection.
	 * @param VehicleSearchParametersGeneralInspection $general_inspection
	 *		New value for lower and upper limit for the earliest date of the next required inspection.
	 */
	function setGeneralInspection($general_inspection) {
		$this->general_inspection = $general_inspection;
	}
	
	/**
	 * Value of earliest and latest date of registration the results must /may have.
	 */
	private $initial_registration;
		
	/**
	 * Gets earliest and latest date of registration the results must /may have.
	 * @return VehicleSearchParametersInitialRegistration
	 *		Earliest and latest date of registration the results must /may have.
	 */
	function getInitialRegistration() {
		return $this->initial_registration;
	}
	
	/**
	 * Sets earliest and latest date of registration the results must /may have.
	 * @param VehicleSearchParametersInitialRegistration $initial_registration
	 *		New value for earliest and latest date of registration the results must /may have.
	 */
	function setInitialRegistration($initial_registration) {
		$this->initial_registration = $initial_registration;
	}
	
	/**
	 * Value of minimum and Maximum power rating the results must / may have.Unit is kW.
	 */
	private $kilowatt;
		
	/**
	 * Gets minimum and Maximum power rating the results must / may have.Unit is kW.
	 * @return VehicleSearchParametersKilowatt
	 *		Minimum and Maximum power rating the results must / may have.Unit is kW.
	 */
	function getKilowatt() {
		return $this->kilowatt;
	}
	
	/**
	 * Sets minimum and Maximum power rating the results must / may have.Unit is kW.
	 * @param VehicleSearchParametersKilowatt $kilowatt
	 *		New value for minimum and Maximum power rating the results must / may have.Unit is kW.
	 */
	function setKilowatt($kilowatt) {
		$this->kilowatt = $kilowatt;
	}
	
	/**
	 * Value of the minimum and maximum mileage the results must / may have.Unit is km.
	 */
	private $mileage;
		
	/**
	 * Gets the minimum and maximum mileage the results must / may have.Unit is km.
	 * @return VehicleSearchParametersMileage
	 *		The minimum and maximum mileage the results must / may have.Unit is km.
	 */
	function getMileage() {
		return $this->mileage;
	}
	
	/**
	 * Sets the minimum and maximum mileage the results must / may have.Unit is km.
	 * @param VehicleSearchParametersMileage $mileage
	 *		New value for the minimum and maximum mileage the results must / may have.Unit is km.
	 */
	function setMileage($mileage) {
		$this->mileage = $mileage;
	}
	
	/**
	 * Value of a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 */
	private $model_lines;
		
	/**
	 * Gets a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 * @return VehicleSearchParametersModelLines
	 *		A list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 */
	function getModelLines() {
		return $this->model_lines;
	}
	
	/**
	 * Sets a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 * @param VehicleSearchParametersModelLines $model_lines
	 *		New value for a list of none, one or multiple number of model-line identifiers to search for (take care that models do depend on the make(s)).
	 */
	function setModelLines($model_lines) {
		$this->model_lines = $model_lines;
	}
	
	/**
	 * Value of a list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 */
	private $models;
		
	/**
	 * Gets a list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 * @return VehicleSearchParametersModels
	 *		A list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 */
	function getModels() {
		return $this->models;
	}
	
	/**
	 * Sets a list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 * @param VehicleSearchParametersModels $models
	 *		New value for a list of none, one or multiple number of model identifiers to search for (take care that models do depend on the make(s)).
	 */
	function setModels($models) {
		$this->models = $models;
	}
	
	/**
	 * Value of the owner offer key
	 */
	private $owners_offer_key;
		
	/**
	 * Gets the owner offer key
	 * @return string
	 *		The owner offer key
	 */
	function getOwnersOfferKey() {
		return $this->owners_offer_key;
	}
	
	/**
	 * Sets the owner offer key
	 * @param string $owners_offer_key
	 *		New value for the owner offer key
	 */
	function setOwnersOfferKey($owners_offer_key) {
		$this->owners_offer_key = $owners_offer_key;
	}
	
	/**
	 * Value of the number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 */
	private $paging;
		
	/**
	 * Gets the number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 * @return VehicleSearchParametersPaging
	 *		The number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 */
	function getPaging() {
		return $this->paging;
	}
	
	/**
	 * Sets the number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 * @param VehicleSearchParametersPaging $paging
	 *		New value for the number of results you want to receive per page and the Current Page you want to view.[results_per_page][current_page]
	 */
	function setPaging($paging) {
		$this->paging = $paging;
	}
	
	/**
	 * Value of minimum number of previous vehicle owners to look for.
	 */
	private $previous_owner_count;
		
	/**
	 * Gets minimum number of previous vehicle owners to look for.
	 * @return VehicleSearchParametersPreviousOwnerCount
	 *		Minimum number of previous vehicle owners to look for.
	 */
	function getPreviousOwnerCount() {
		return $this->previous_owner_count;
	}
	
	/**
	 * Sets minimum number of previous vehicle owners to look for.
	 * @param VehicleSearchParametersPreviousOwnerCount $previous_owner_count
	 *		New value for minimum number of previous vehicle owners to look for.
	 */
	function setPreviousOwnerCount($previous_owner_count) {
		$this->previous_owner_count = $previous_owner_count;
	}
	
	/**
	 * Value of the minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 */
	private $price_public;
		
	/**
	 * Gets the minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 * @return VehicleSearchParametersPricePublic
	 *		The minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 */
	function getPricePublic() {
		return $this->price_public;
	}
	
	/**
	 * Sets the minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 * @param VehicleSearchParametersPricePublic $price_public
	 *		New value for the minimum pricing the search results must have.The maximum pricing the search results may have.Unit is Euro.
	 */
	function setPricePublic($price_public) {
		$this->price_public = $price_public;
	}
	
	/**
	 * Value of include only dealer articles in the search.
	 */
	private $show_dealer_vehicles;
		
	/**
	 * Gets include only dealer articles in the search.
	 * @return string
	 *		Include only dealer articles in the search.
	 */
	function getShowDealerVehicles() {
		return $this->show_dealer_vehicles;
	}
	
	/**
	 * Sets include only dealer articles in the search.
	 * @param string $show_dealer_vehicles
	 *		New value for include only dealer articles in the search.
	 */
	function setShowDealerVehicles($show_dealer_vehicles) {
		$this->show_dealer_vehicles = $show_dealer_vehicles;
	}
	
	/**
	 * Value of include only articles from private persons in the search.
	 */
	private $show_private_vehicles;
		
	/**
	 * Gets include only articles from private persons in the search.
	 * @return string
	 *		Include only articles from private persons in the search.
	 */
	function getShowPrivateVehicles() {
		return $this->show_private_vehicles;
	}
	
	/**
	 * Sets include only articles from private persons in the search.
	 * @param string $show_private_vehicles
	 *		New value for include only articles from private persons in the search.
	 */
	function setShowPrivateVehicles($show_private_vehicles) {
		$this->show_private_vehicles = $show_private_vehicles;
	}
	
	/**
	 * Value of filter to include only vehicles with images
	 */
	private $show_with_images_only;
		
	/**
	 * Gets filter to include only vehicles with images
	 * @return string
	 *		Filter to include only vehicles with images
	 */
	function getShowWithImagesOnly() {
		return $this->show_with_images_only;
	}
	
	/**
	 * Sets filter to include only vehicles with images
	 * @param string $show_with_images_only
	 *		New value for filter to include only vehicles with images
	 */
	function setShowWithImagesOnly($show_with_images_only) {
		$this->show_with_images_only = $show_with_images_only;
	}
	
	/**
	 * Value of specifies the column you want to sort for
	 */
	private $sorting;
		
	/**
	 * Gets specifies the column you want to sort for
	 * @return VehicleSearchParametersSorting
	 *		Specifies the column you want to sort for
	 */
	function getSorting() {
		return $this->sorting;
	}
	
	/**
	 * Sets specifies the column you want to sort for
	 * @param VehicleSearchParametersSorting $sorting
	 *		New value for specifies the column you want to sort for
	 */
	function setSorting($sorting) {
		$this->sorting = $sorting;
	}
	
	/**
	 * Value of the version of the model
	 */
	private $version;
		
	/**
	 * Gets the version of the model
	 * @return string
	 *		The version of the model
	 */
	function getVersion() {
		return $this->version;
	}
	
	/**
	 * Sets the version of the model
	 * @param string $version
	 *		New value for the version of the model
	 */
	function setVersion($version) {
		$this->version = $version;
	}
}