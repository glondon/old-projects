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
 * Factory, which creates Telekom data objects of the service Auto Scout 24 from JSON response messages.
 * @package autoScout24
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../autoscout24/data/AutoScout24StatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Auto Scout 24 from JSON response messages.
 * @package autoScout24
 * @subpackage data
 */
class AutoScout24DataFactory {
	/**
	 * Creates a Telekom data object of the type FindArticlesResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return FindArticlesResponse
	 * 	A Telekom data object
	 */
	static function createFindArticlesResponse($o) {
		$json = json_decode($o, true);
		
		$response = null;
	
		if(array_key_exists('response', $json)) {
			$response = self::createResponse($json['response']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/FindArticlesResponse.php');
		return new FindArticlesResponse($responseStatus, $response);
	}

	/**
	 * Creates a Telekom data object of the type GetLookUpDataResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetLookUpDataResponse
	 * 	A Telekom data object
	 */
	static function createGetLookUpDataResponse($o) {
		$json = json_decode($o, true);
		
		$response = null;
	
		if(array_key_exists('response', $json)) {
			$response = self::createLookUpData($json['response']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetLookUpDataResponse.php');
		return new GetLookUpDataResponse($responseStatus, $response);
	}

	/**
	 * Creates a Telekom data object of the type GetMakeModelTreeResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetMakeModelTreeResponse
	 * 	A Telekom data object
	 */
	static function createGetMakeModelTreeResponse($o) {
		$json = json_decode($o, true);
		
		$response = null;
	
		if(array_key_exists('response', $json)) {
			$response = self::createMakeModelTree($json['response']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetMakeModelTreeResponse.php');
		return new GetMakeModelTreeResponse($responseStatus, $response);
	}

	/**
	 * Creates a Telekom data object of the type Response from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return Response
	 * 	A Telekom data object
	 */
	static function createResponse($json) {
		$request_id = null;
	
		if(array_key_exists('request_id', $json)) {
			$request_id = $json['request_id'];
		}
		
		$status = null;
	
		if(array_key_exists('status', $json)) {
			$status = $json['status'];
		}
		
		$errors = null;
	
		if(array_key_exists('errors', $json)) {
			$errors = self::createErrorsResponse($json['errors']);
		}
		
		$build = null;
	
		if(array_key_exists('build', $json)) {
			$build = self::createBuildResponse($json['build']);
		}
		
		$root_paths = null;
	
		if(array_key_exists('root_paths', $json)) {
			$root_paths = self::createRootPathsResponse($json['root_paths']);
		}
		
		$used_vehicle_search_parameters = null;
	
		if(array_key_exists('used_vehicle_search_parameters', $json)) {
			$used_vehicle_search_parameters = self::createVehicleSearchParameters($json['used_vehicle_search_parameters']);
		}
		
		$vehicles = null;
	
		if(array_key_exists('vehicles', $json)) {
			$vehicles = self::createVehiclesResponse($json['vehicles']);
		}
		
		$vehicles_found = null;
	
		if(array_key_exists('vehicles_found', $json)) {
			$vehicles_found = $json['vehicles_found'];
		}
		
		require_once(dirname(__FILE__).'/Response.php');
		return new Response($request_id, $status, $errors, $build, $root_paths, $used_vehicle_search_parameters, $vehicles, $vehicles_found);
	}

	/**
	 * Creates a Telekom data object of the type ErrorsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return ErrorsResponse
	 * 	A Telekom data object
	 */
	static function createErrorsResponse($json) {
		$error = array();
		$error_array = null;
		
		if(array_key_exists('error', $json)) {
			$error_array = $json['error'];
			
			foreach($error_array as $error_single) {
				array_push($error, self::createErrorsErrorResponse($error_single));
			}
		}
		
		require_once(dirname(__FILE__).'/ErrorsResponse.php');
		return new ErrorsResponse($error);
	}

	/**
	 * Creates a Telekom data object of the type BuildResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return BuildResponse
	 * 	A Telekom data object
	 */
	static function createBuildResponse($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$time_stamp = null;
	
		if(array_key_exists('time_stamp', $json)) {
			$time_stamp = self::createBuildTimeStampResponse($json['time_stamp']);
		}
		
		require_once(dirname(__FILE__).'/BuildResponse.php');
		return new BuildResponse($number, $time_stamp);
	}

	/**
	 * Creates a Telekom data object of the type RootPathsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return RootPathsResponse
	 * 	A Telekom data object
	 */
	static function createRootPathsResponse($json) {
		$as24_url_root = null;
	
		if(array_key_exists('as24_url_root', $json)) {
			$as24_url_root = $json['as24_url_root'];
		}
		
		$images_big = null;
	
		if(array_key_exists('images_big', $json)) {
			$images_big = $json['images_big'];
		}
		
		$images_main = null;
	
		if(array_key_exists('images_main', $json)) {
			$images_main = $json['images_main'];
		}
		
		$images_small = null;
	
		if(array_key_exists('images_small', $json)) {
			$images_small = $json['images_small'];
		}
		
		$images_thumbnails = null;
	
		if(array_key_exists('images_thumbnails', $json)) {
			$images_thumbnails = $json['images_thumbnails'];
		}
		
		require_once(dirname(__FILE__).'/RootPathsResponse.php');
		return new RootPathsResponse($as24_url_root, $images_big, $images_main, $images_small, $images_thumbnails);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParameters from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParameters
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParameters($json) {
		$accident_free = null;
	
		if(array_key_exists('accident_free', $json)) {
			$accident_free = $json['accident_free'];
		}
		
		$address = null;
	
		if(array_key_exists('address', $json)) {
			$address = self::createVehicleSearchParametersAddress($json['address']);
		}
		
		$availability = null;
	
		if(array_key_exists('availability', $json)) {
			$availability = self::createVehicleSearchParametersAvailability($json['availability']);
		}
		
		$bodies = null;
	
		if(array_key_exists('bodies', $json)) {
			$bodies = self::createVehicleSearchParametersBodies($json['bodies']);
		}
		
		$body_colorgroups = null;
	
		if(array_key_exists('body_colorgroups', $json)) {
			$body_colorgroups = self::createVehicleSearchParametersBodyColorgroups($json['body_colorgroups']);
		}
		
		$body_paintings = null;
	
		if(array_key_exists('body_paintings', $json)) {
			$body_paintings = self::createVehicleSearchParametersBodyPaintings($json['body_paintings']);
		}
		
		$brands = null;
	
		if(array_key_exists('brands', $json)) {
			$brands = self::createVehicleSearchParametersBrands($json['brands']);
		}
		
		$categories = null;
	
		if(array_key_exists('categories', $json)) {
			$categories = self::createVehicleSearchParametersCategories($json['categories']);
		}
		
		$dealer_id = null;
	
		if(array_key_exists('dealer_id', $json)) {
			$dealer_id = $json['dealer_id'];
		}
		
		$doors = null;
	
		if(array_key_exists('doors', $json)) {
			$doors = self::createVehicleSearchParametersDoors($json['doors']);
		}
		
		$emission = null;
	
		if(array_key_exists('emission', $json)) {
			$emission = self::createVehicleSearchParametersEmission($json['emission']);
		}
		
		$equipments = null;
	
		if(array_key_exists('equipments', $json)) {
			$equipments = self::createVehicleSearchParametersEquipments($json['equipments']);
		}
		
		$fuel_types = null;
	
		if(array_key_exists('fuel_types', $json)) {
			$fuel_types = self::createVehicleSearchParametersFuelTypes($json['fuel_types']);
		}
		
		$gear_type_ids = null;
	
		if(array_key_exists('gear_type_ids', $json)) {
			$gear_type_ids = self::createVehicleSearchParametersGearTypeIds($json['gear_type_ids']);
		}
		
		$general_inspection = null;
	
		if(array_key_exists('general_inspection', $json)) {
			$general_inspection = self::createVehicleSearchParametersGeneralInspection($json['general_inspection']);
		}
		
		$initial_registration = null;
	
		if(array_key_exists('initial_registration', $json)) {
			$initial_registration = self::createVehicleSearchParametersInitialRegistration($json['initial_registration']);
		}
		
		$kilowatt = null;
	
		if(array_key_exists('kilowatt', $json)) {
			$kilowatt = self::createVehicleSearchParametersKilowatt($json['kilowatt']);
		}
		
		$mileage = null;
	
		if(array_key_exists('mileage', $json)) {
			$mileage = self::createVehicleSearchParametersMileage($json['mileage']);
		}
		
		$model_lines = null;
	
		if(array_key_exists('model_lines', $json)) {
			$model_lines = self::createVehicleSearchParametersModelLines($json['model_lines']);
		}
		
		$models = null;
	
		if(array_key_exists('models', $json)) {
			$models = self::createVehicleSearchParametersModels($json['models']);
		}
		
		$owners_offer_key = null;
	
		if(array_key_exists('owners_offer_key', $json)) {
			$owners_offer_key = $json['owners_offer_key'];
		}
		
		$paging = null;
	
		if(array_key_exists('paging', $json)) {
			$paging = self::createVehicleSearchParametersPaging($json['paging']);
		}
		
		$previous_owner_count = null;
	
		if(array_key_exists('previous_owner_count', $json)) {
			$previous_owner_count = self::createVehicleSearchParametersPreviousOwnerCount($json['previous_owner_count']);
		}
		
		$price_public = null;
	
		if(array_key_exists('price_public', $json)) {
			$price_public = self::createVehicleSearchParametersPricePublic($json['price_public']);
		}
		
		$show_dealer_vehicles = null;
	
		if(array_key_exists('show_dealer_vehicles', $json)) {
			$show_dealer_vehicles = $json['show_dealer_vehicles'];
		}
		
		$show_private_vehicles = null;
	
		if(array_key_exists('show_private_vehicles', $json)) {
			$show_private_vehicles = $json['show_private_vehicles'];
		}
		
		$show_with_images_only = null;
	
		if(array_key_exists('show_with_images_only', $json)) {
			$show_with_images_only = $json['show_with_images_only'];
		}
		
		$sorting = null;
	
		if(array_key_exists('sorting', $json)) {
			$sorting = self::createVehicleSearchParametersSorting($json['sorting']);
		}
		
		$version = null;
	
		if(array_key_exists('version', $json)) {
			$version = $json['version'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParameters.php');
		return new VehicleSearchParameters($accident_free, $address, $availability, $bodies, $body_colorgroups, $body_paintings, $brands, $categories, $dealer_id, $doors, $emission, $equipments, $fuel_types, $gear_type_ids, $general_inspection, $initial_registration, $kilowatt, $mileage, $model_lines, $models, $owners_offer_key, $paging, $previous_owner_count, $price_public, $show_dealer_vehicles, $show_private_vehicles, $show_with_images_only, $sorting, $version);
	}

	/**
	 * Creates a Telekom data object of the type VehiclesResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclesResponse
	 * 	A Telekom data object
	 */
	static function createVehiclesResponse($json) {
		$vehicle = array();
		$vehicle_array = null;
		
		if(array_key_exists('vehicle', $json)) {
			$vehicle_array = $json['vehicle'];
			
			foreach($vehicle_array as $vehicle_single) {
				array_push($vehicle, self::createVehicle($vehicle_single));
			}
		}
		
		require_once(dirname(__FILE__).'/VehiclesResponse.php');
		return new VehiclesResponse($vehicle);
	}

	/**
	 * Creates a Telekom data object of the type ErrorsErrorResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return ErrorsErrorResponse
	 * 	A Telekom data object
	 */
	static function createErrorsErrorResponse($json) {
		$code = null;
	
		if(array_key_exists('code', $json)) {
			$code = $json['code'];
		}
		
		$message = null;
	
		if(array_key_exists('message', $json)) {
			$message = $json['message'];
		}
		
		require_once(dirname(__FILE__).'/ErrorsErrorResponse.php');
		return new ErrorsErrorResponse($code, $message);
	}

	/**
	 * Creates a Telekom data object of the type BuildTimeStampResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return BuildTimeStampResponse
	 * 	A Telekom data object
	 */
	static function createBuildTimeStampResponse($json) {
		$runtime = null;
	
		if(array_key_exists('runtime', $json)) {
			$runtime = $json['runtime'];
		}
		
		$service = null;
	
		if(array_key_exists('service', $json)) {
			$service = $json['service'];
		}
		
		require_once(dirname(__FILE__).'/BuildTimeStampResponse.php');
		return new BuildTimeStampResponse($runtime, $service);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersAddress from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersAddress
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersAddress($json) {
		$countries = null;
	
		if(array_key_exists('countries', $json)) {
			$countries = self::createVehicleSearchParametersAddressCountries($json['countries']);
		}
		
		$radius = null;
	
		if(array_key_exists('radius', $json)) {
			$radius = $json['radius'];
		}
		
		$zip_code = null;
	
		if(array_key_exists('zip_code', $json)) {
			$zip_code = $json['zip_code'];
		}
		
		$zip_country_id = null;
	
		if(array_key_exists('zip_country_id', $json)) {
			$zip_country_id = $json['zip_country_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersAddress.php');
		return new VehicleSearchParametersAddress($countries, $radius, $zip_code, $zip_country_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersAvailability from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersAvailability
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersAvailability($json) {
		$begin = null;
	
		if(array_key_exists('begin', $json)) {
			$begin = self::createVehicleSearchParametersAvailabilityBegin($json['begin']);
		}
		
		$last_change = null;
	
		if(array_key_exists('last_change', $json)) {
			$last_change = self::createVehicleSearchParametersAvailabilityLastChange($json['last_change']);
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersAvailability.php');
		return new VehicleSearchParametersAvailability($begin, $last_change);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersBodies from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersBodies
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersBodies($json) {
		$body_id = null;
	
		if(array_key_exists('body_id', $json)) {
			$body_id = $json['body_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersBodies.php');
		return new VehicleSearchParametersBodies($body_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersBodyColorgroups from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersBodyColorgroups
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersBodyColorgroups($json) {
		$body_colorgroup_id = null;
	
		if(array_key_exists('body_colorgroup_id', $json)) {
			$body_colorgroup_id = $json['body_colorgroup_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersBodyColorgroups.php');
		return new VehicleSearchParametersBodyColorgroups($body_colorgroup_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersBodyPaintings from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersBodyPaintings
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersBodyPaintings($json) {
		$body_painting_id = null;
	
		if(array_key_exists('body_painting_id', $json)) {
			$body_painting_id = $json['body_painting_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersBodyPaintings.php');
		return new VehicleSearchParametersBodyPaintings($body_painting_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersBrands from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersBrands
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersBrands($json) {
		$brand_id = null;
	
		if(array_key_exists('brand_id', $json)) {
			$brand_id = $json['brand_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersBrands.php');
		return new VehicleSearchParametersBrands($brand_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersCategories from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersCategories
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersCategories($json) {
		$category_id = null;
	
		if(array_key_exists('category_id', $json)) {
			$category_id = $json['category_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersCategories.php');
		return new VehicleSearchParametersCategories($category_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersDoors from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersDoors
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersDoors($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersDoors.php');
		return new VehicleSearchParametersDoors($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersEmission from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersEmission
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersEmission($json) {
		$class_id = null;
	
		if(array_key_exists('class_id', $json)) {
			$class_id = self::createVehicleSearchParametersEmissionClassId($json['class_id']);
		}
		
		$sticker_id = null;
	
		if(array_key_exists('sticker_id', $json)) {
			$sticker_id = self::createVehicleSearchParametersEmissionStickerId($json['sticker_id']);
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersEmission.php');
		return new VehicleSearchParametersEmission($class_id, $sticker_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersEquipments from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersEquipments
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersEquipments($json) {
		$equipment_id = null;
	
		if(array_key_exists('equipment_id', $json)) {
			$equipment_id = $json['equipment_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersEquipments.php');
		return new VehicleSearchParametersEquipments($equipment_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersFuelTypes from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersFuelTypes
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersFuelTypes($json) {
		$fuel_type_id = null;
	
		if(array_key_exists('fuel_type_id', $json)) {
			$fuel_type_id = $json['fuel_type_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersFuelTypes.php');
		return new VehicleSearchParametersFuelTypes($fuel_type_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersGearTypeIds from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersGearTypeIds
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersGearTypeIds($json) {
		$gear_type_id = null;
	
		if(array_key_exists('gear_type_id', $json)) {
			$gear_type_id = $json['gear_type_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersGearTypeIds.php');
		return new VehicleSearchParametersGearTypeIds($gear_type_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersGeneralInspection from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersGeneralInspection
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersGeneralInspection($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersGeneralInspection.php');
		return new VehicleSearchParametersGeneralInspection($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersInitialRegistration from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersInitialRegistration
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersInitialRegistration($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersInitialRegistration.php');
		return new VehicleSearchParametersInitialRegistration($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersKilowatt from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersKilowatt
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersKilowatt($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersKilowatt.php');
		return new VehicleSearchParametersKilowatt($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersMileage from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersMileage
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersMileage($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersMileage.php');
		return new VehicleSearchParametersMileage($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersModelLines from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersModelLines
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersModelLines($json) {
		$model_line_id = null;
	
		if(array_key_exists('model_line_id', $json)) {
			$model_line_id = $json['model_line_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersModelLines.php');
		return new VehicleSearchParametersModelLines($model_line_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersModels from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersModels
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersModels($json) {
		$model_id = null;
	
		if(array_key_exists('model_id', $json)) {
			$model_id = $json['model_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersModels.php');
		return new VehicleSearchParametersModels($model_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersPaging from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersPaging
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersPaging($json) {
		$current_page = null;
	
		if(array_key_exists('current_page', $json)) {
			$current_page = $json['current_page'];
		}
		
		$results_per_page = null;
	
		if(array_key_exists('results_per_page', $json)) {
			$results_per_page = $json['results_per_page'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersPaging.php');
		return new VehicleSearchParametersPaging($current_page, $results_per_page);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersPreviousOwnerCount from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersPreviousOwnerCount
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersPreviousOwnerCount($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersPreviousOwnerCount.php');
		return new VehicleSearchParametersPreviousOwnerCount($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersPricePublic from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersPricePublic
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersPricePublic($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		$vat_type_id = null;
	
		if(array_key_exists('vat_type_id', $json)) {
			$vat_type_id = $json['vat_type_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersPricePublic.php');
		return new VehicleSearchParametersPricePublic($from, $to, $vat_type_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersSorting from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersSorting
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersSorting($json) {
		$descending = null;
	
		if(array_key_exists('descending', $json)) {
			$descending = $json['descending'];
		}
		
		$key = null;
	
		if(array_key_exists('key', $json)) {
			$key = $json['key'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersSorting.php');
		return new VehicleSearchParametersSorting($descending, $key);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersAddressCountries from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersAddressCountries
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersAddressCountries($json) {
		$country_id = null;
	
		if(array_key_exists('country_id', $json)) {
			$country_id = $json['country_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersAddressCountries.php');
		return new VehicleSearchParametersAddressCountries($country_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersAvailabilityBegin from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersAvailabilityBegin
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersAvailabilityBegin($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersAvailabilityBegin.php');
		return new VehicleSearchParametersAvailabilityBegin($from);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersAvailabilityLastChange from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersAvailabilityLastChange
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersAvailabilityLastChange($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		$to = null;
	
		if(array_key_exists('to', $json)) {
			$to = $json['to'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersAvailabilityLastChange.php');
		return new VehicleSearchParametersAvailabilityLastChange($from, $to);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersEmissionClassId from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersEmissionClassId
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersEmissionClassId($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersEmissionClassId.php');
		return new VehicleSearchParametersEmissionClassId($from);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSearchParametersEmissionStickerId from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSearchParametersEmissionStickerId
	 * 	A Telekom data object
	 */
	static function createVehicleSearchParametersEmissionStickerId($json) {
		$from = null;
	
		if(array_key_exists('from', $json)) {
			$from = $json['from'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSearchParametersEmissionStickerId.php');
		return new VehicleSearchParametersEmissionStickerId($from);
	}

	/**
	 * Creates a Telekom data object of the type Vehicle from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return Vehicle
	 * 	A Telekom data object
	 */
	static function createVehicle($json) {
		$availability = null;
	
		if(array_key_exists('availability', $json)) {
			$availability = self::createVehicleAvailability($json['availability']);
		}
		
		$emission = null;
	
		if(array_key_exists('emission', $json)) {
			$emission = self::createVehicleEmission($json['emission']);
		}
		
		$previous_owner = null;
	
		if(array_key_exists('previous_owner', $json)) {
			$previous_owner = self::createVehiclePreviousOwner($json['previous_owner']);
		}
		
		$consumption = null;
	
		if(array_key_exists('consumption', $json)) {
			$consumption = self::createVehicleConsumption($json['consumption']);
		}
		
		$accident_free = null;
	
		if(array_key_exists('accident_free', $json)) {
			$accident_free = $json['accident_free'];
		}
		
		$body_color = null;
	
		if(array_key_exists('body_color', $json)) {
			$body_color = $json['body_color'];
		}
		
		$body_colorgroup_id = null;
	
		if(array_key_exists('body_colorgroup_id', $json)) {
			$body_colorgroup_id = $json['body_colorgroup_id'];
		}
		
		$body_id = null;
	
		if(array_key_exists('body_id', $json)) {
			$body_id = $json['body_id'];
		}
		
		$body_painting_id = null;
	
		if(array_key_exists('body_painting_id', $json)) {
			$body_painting_id = $json['body_painting_id'];
		}
		
		$brand_id = null;
	
		if(array_key_exists('brand_id', $json)) {
			$brand_id = $json['brand_id'];
		}
		
		$category_id = null;
	
		if(array_key_exists('category_id', $json)) {
			$category_id = $json['category_id'];
		}
		
		$equipments = null;
	
		if(array_key_exists('equipments', $json)) {
			$equipments = self::createVehicleEquipments($json['equipments']);
		}
		
		$fuel_type_id = null;
	
		if(array_key_exists('fuel_type_id', $json)) {
			$fuel_type_id = $json['fuel_type_id'];
		}
		
		$gear_type_id = null;
	
		if(array_key_exists('gear_type_id', $json)) {
			$gear_type_id = $json['gear_type_id'];
		}
		
		$general_inspection = null;
	
		if(array_key_exists('general_inspection', $json)) {
			$general_inspection = $json['general_inspection'];
		}
		
		$initial_registration = null;
	
		if(array_key_exists('initial_registration', $json)) {
			$initial_registration = $json['initial_registration'];
		}
		
		$kilowatt = null;
	
		if(array_key_exists('kilowatt', $json)) {
			$kilowatt = $json['kilowatt'];
		}
		
		$media = null;
	
		if(array_key_exists('media', $json)) {
			$media = self::createVehicleMedia($json['media']);
		}
		
		$mileage = null;
	
		if(array_key_exists('mileage', $json)) {
			$mileage = $json['mileage'];
		}
		
		$model_id = null;
	
		if(array_key_exists('model_id', $json)) {
			$model_id = $json['model_id'];
		}
		
		$owners_offer_key = null;
	
		if(array_key_exists('owners_offer_key', $json)) {
			$owners_offer_key = $json['owners_offer_key'];
		}
		
		$prices = null;
	
		if(array_key_exists('prices', $json)) {
			$prices = self::createVehiclePrices($json['prices']);
		}
		
		$seals = null;
	
		if(array_key_exists('seals', $json)) {
			$seals = self::createVehicleSeals($json['seals']);
		}
		
		$title = null;
	
		if(array_key_exists('title', $json)) {
			$title = $json['title'];
		}
		
		$vehicle_id = null;
	
		if(array_key_exists('vehicle_id', $json)) {
			$vehicle_id = $json['vehicle_id'];
		}
		
		$version = null;
	
		if(array_key_exists('version', $json)) {
			$version = $json['version'];
		}
		
		$x_code = null;
	
		if(array_key_exists('x_code', $json)) {
			$x_code = self::createVehicleXCode($json['x_code']);
		}
		
		require_once(dirname(__FILE__).'/Vehicle.php');
		return new Vehicle($availability, $emission, $previous_owner, $consumption, $accident_free, $body_color, $body_colorgroup_id, $body_id, $body_painting_id, $brand_id, $category_id, $equipments, $fuel_type_id, $gear_type_id, $general_inspection, $initial_registration, $kilowatt, $media, $mileage, $model_id, $owners_offer_key, $prices, $seals, $title, $vehicle_id, $version, $x_code);
	}

	/**
	 * Creates a Telekom data object of the type VehicleAvailability from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleAvailability
	 * 	A Telekom data object
	 */
	static function createVehicleAvailability($json) {
		$begin = null;
	
		if(array_key_exists('begin', $json)) {
			$begin = $json['begin'];
		}
		
		$end = null;
	
		if(array_key_exists('end', $json)) {
			$end = $json['end'];
		}
		
		$last_change = null;
	
		if(array_key_exists('last_change', $json)) {
			$last_change = $json['last_change'];
		}
		
		require_once(dirname(__FILE__).'/VehicleAvailability.php');
		return new VehicleAvailability($begin, $end, $last_change);
	}

	/**
	 * Creates a Telekom data object of the type VehicleEmission from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleEmission
	 * 	A Telekom data object
	 */
	static function createVehicleEmission($json) {
		$class_id = null;
	
		if(array_key_exists('class_id', $json)) {
			$class_id = $json['class_id'];
		}
		
		$co2_liquid = null;
	
		if(array_key_exists('co2_liquid', $json)) {
			$co2_liquid = $json['co2_liquid'];
		}
		
		$sticker_id = null;
	
		if(array_key_exists('sticker_id', $json)) {
			$sticker_id = $json['sticker_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleEmission.php');
		return new VehicleEmission($class_id, $co2_liquid, $sticker_id);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePreviousOwner from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePreviousOwner
	 * 	A Telekom data object
	 */
	static function createVehiclePreviousOwner($json) {
		$count = null;
	
		if(array_key_exists('count', $json)) {
			$count = $json['count'];
		}
		
		$owner = null;
	
		if(array_key_exists('owner', $json)) {
			$owner = self::createVehiclePreviousOwnerOwner($json['owner']);
		}
		
		require_once(dirname(__FILE__).'/VehiclePreviousOwner.php');
		return new VehiclePreviousOwner($count, $owner);
	}

	/**
	 * Creates a Telekom data object of the type VehicleConsumption from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleConsumption
	 * 	A Telekom data object
	 */
	static function createVehicleConsumption($json) {
		$liquid = null;
	
		if(array_key_exists('liquid', $json)) {
			$liquid = self::createVehicleConsumptionLiquid($json['liquid']);
		}
		
		require_once(dirname(__FILE__).'/VehicleConsumption.php');
		return new VehicleConsumption($liquid);
	}

	/**
	 * Creates a Telekom data object of the type VehicleEquipments from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleEquipments
	 * 	A Telekom data object
	 */
	static function createVehicleEquipments($json) {
		$equipment_id = null;
	
		if(array_key_exists('equipment_id', $json)) {
			$equipment_id = $json['equipment_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleEquipments.php');
		return new VehicleEquipments($equipment_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleMedia from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleMedia
	 * 	A Telekom data object
	 */
	static function createVehicleMedia($json) {
		$x_code = null;
	
		if(array_key_exists('x_code', $json)) {
			$x_code = self::createVehicleMediaXCode($json['x_code']);
		}
		
		$images = null;
	
		if(array_key_exists('images', $json)) {
			$images = self::createVehicleMediaImages($json['images']);
		}
		
		require_once(dirname(__FILE__).'/VehicleMedia.php');
		return new VehicleMedia($x_code, $images);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePrices from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePrices
	 * 	A Telekom data object
	 */
	static function createVehiclePrices($json) {
		$price = array();
		$price_array = null;
		
		if(array_key_exists('price', $json)) {
			$price_array = $json['price'];
			
			foreach($price_array as $price_single) {
				array_push($price, self::createVehiclePricesPrice($price_single));
			}
		}
		
		require_once(dirname(__FILE__).'/VehiclePrices.php');
		return new VehiclePrices($price);
	}

	/**
	 * Creates a Telekom data object of the type VehicleSeals from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleSeals
	 * 	A Telekom data object
	 */
	static function createVehicleSeals($json) {
		$seal_id = null;
	
		if(array_key_exists('seal_id', $json)) {
			$seal_id = $json['seal_id'];
		}
		
		require_once(dirname(__FILE__).'/VehicleSeals.php');
		return new VehicleSeals($seal_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleXCode from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleXCode
	 * 	A Telekom data object
	 */
	static function createVehicleXCode($json) {
		$as24_detail_page_url = null;
	
		if(array_key_exists('as24_detail_page_url', $json)) {
			$as24_detail_page_url = $json['as24_detail_page_url'];
		}
		
		require_once(dirname(__FILE__).'/VehicleXCode.php');
		return new VehicleXCode($as24_detail_page_url);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePreviousOwnerOwner from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePreviousOwnerOwner
	 * 	A Telekom data object
	 */
	static function createVehiclePreviousOwnerOwner($json) {
		$owner = array();
		$owner_array = null;
		
		if(array_key_exists('owner', $json)) {
			$owner_array = $json['owner'];
			
			foreach($owner_array as $owner_single) {
				array_push($owner, self::createVehiclePreviousOwnerOwnerOwner($owner_single));
			}
		}
		
		require_once(dirname(__FILE__).'/VehiclePreviousOwnerOwner.php');
		return new VehiclePreviousOwnerOwner($owner);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePreviousOwnerOwnerOwner from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePreviousOwnerOwnerOwner
	 * 	A Telekom data object
	 */
	static function createVehiclePreviousOwnerOwnerOwner($json) {
		$city = null;
	
		if(array_key_exists('city', $json)) {
			$city = $json['city'];
		}
		
		$country = null;
	
		if(array_key_exists('country', $json)) {
			$country = $json['country'];
		}
		
		$zip = null;
	
		if(array_key_exists('zip', $json)) {
			$zip = $json['zip'];
		}
		
		$x_code = null;
	
		if(array_key_exists('x_code', $json)) {
			$x_code = self::createVehiclePreviousOwnerOwnerOwnerXCode($json['x_code']);
		}
		
		require_once(dirname(__FILE__).'/VehiclePreviousOwnerOwnerOwner.php');
		return new VehiclePreviousOwnerOwnerOwner($city, $country, $zip, $x_code);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePreviousOwnerOwnerOwnerXCode from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePreviousOwnerOwnerOwnerXCode
	 * 	A Telekom data object
	 */
	static function createVehiclePreviousOwnerOwnerOwnerXCode($json) {
		$customer_type_id = null;
	
		if(array_key_exists('customer_type_id', $json)) {
			$customer_type_id = $json['customer_type_id'];
		}
		
		require_once(dirname(__FILE__).'/VehiclePreviousOwnerOwnerOwnerXCode.php');
		return new VehiclePreviousOwnerOwnerOwnerXCode($customer_type_id);
	}

	/**
	 * Creates a Telekom data object of the type VehicleConsumptionLiquid from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleConsumptionLiquid
	 * 	A Telekom data object
	 */
	static function createVehicleConsumptionLiquid($json) {
		$combined = null;
	
		if(array_key_exists('combined', $json)) {
			$combined = $json['combined'];
		}
		
		$extra_urban = null;
	
		if(array_key_exists('extra_urban', $json)) {
			$extra_urban = $json['extra_urban'];
		}
		
		$urban = null;
	
		if(array_key_exists('urban', $json)) {
			$urban = $json['urban'];
		}
		
		require_once(dirname(__FILE__).'/VehicleConsumptionLiquid.php');
		return new VehicleConsumptionLiquid($combined, $extra_urban, $urban);
	}

	/**
	 * Creates a Telekom data object of the type VehicleMediaXCode from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleMediaXCode
	 * 	A Telekom data object
	 */
	static function createVehicleMediaXCode($json) {
		$image_count = null;
	
		if(array_key_exists('image_count', $json)) {
			$image_count = $json['image_count'];
		}
		
		$last_change_images = null;
	
		if(array_key_exists('last_change_images', $json)) {
			$last_change_images = $json['last_change_images'];
		}
		
		require_once(dirname(__FILE__).'/VehicleMediaXCode.php');
		return new VehicleMediaXCode($image_count, $last_change_images);
	}

	/**
	 * Creates a Telekom data object of the type VehicleMediaImages from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleMediaImages
	 * 	A Telekom data object
	 */
	static function createVehicleMediaImages($json) {
		$image = array();
		$image_array = null;
		
		if(array_key_exists('image', $json)) {
			$image_array = $json['image'];
			
			foreach($image_array as $image_single) {
				array_push($image, self::createVehicleMediaImagesImage($image_single));
			}
		}
		
		require_once(dirname(__FILE__).'/VehicleMediaImages.php');
		return new VehicleMediaImages($image);
	}

	/**
	 * Creates a Telekom data object of the type VehicleMediaImagesImage from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehicleMediaImagesImage
	 * 	A Telekom data object
	 */
	static function createVehicleMediaImagesImage($json) {
		$uri = null;
	
		if(array_key_exists('uri', $json)) {
			$uri = $json['uri'];
		}
		
		$position = null;
	
		if(array_key_exists('position', $json)) {
			$position = $json['position'];
		}
		
		require_once(dirname(__FILE__).'/VehicleMediaImagesImage.php');
		return new VehicleMediaImagesImage($uri, $position);
	}

	/**
	 * Creates a Telekom data object of the type VehiclePricesPrice from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return VehiclePricesPrice
	 * 	A Telekom data object
	 */
	static function createVehiclePricesPrice($json) {
		$currency_id = null;
	
		if(array_key_exists('currency_id', $json)) {
			$currency_id = $json['currency_id'];
		}
		
		$type = null;
	
		if(array_key_exists('type', $json)) {
			$type = $json['type'];
		}
		
		$value = null;
	
		if(array_key_exists('value', $json)) {
			$value = $json['value'];
		}
		
		$vat_type_id = null;
	
		if(array_key_exists('vat_type_id', $json)) {
			$vat_type_id = $json['vat_type_id'];
		}
		
		require_once(dirname(__FILE__).'/VehiclePricesPrice.php');
		return new VehiclePricesPrice($currency_id, $type, $value, $vat_type_id);
	}

	/**
	 * Creates a Telekom data object of the type LookUpData from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LookUpData
	 * 	A Telekom data object
	 */
	static function createLookUpData($json) {
		$request_id = null;
	
		if(array_key_exists('request_id', $json)) {
			$request_id = $json['request_id'];
		}
		
		$errors = null;
	
		if(array_key_exists('errors', $json)) {
			$errors = self::createLookUpDataErrors($json['errors']);
		}
		
		$build = null;
	
		if(array_key_exists('build', $json)) {
			$build = self::createLookUpDataBuild($json['build']);
		}
		
		$stx3_idpool = null;
	
		if(array_key_exists('stx3_idpool', $json)) {
			$stx3_idpool = self::createSTX3IDPool($json['stx3_idpool']);
		}
		
		require_once(dirname(__FILE__).'/LookUpData.php');
		return new LookUpData($request_id, $errors, $build, $stx3_idpool);
	}

	/**
	 * Creates a Telekom data object of the type LookUpDataErrors from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LookUpDataErrors
	 * 	A Telekom data object
	 */
	static function createLookUpDataErrors($json) {
		$error = array();
		$error_array = null;
		
		if(array_key_exists('error', $json)) {
			$error_array = $json['error'];
			
			foreach($error_array as $error_single) {
				array_push($error, self::createLookUpDataErrorsError($error_single));
			}
		}
		
		require_once(dirname(__FILE__).'/LookUpDataErrors.php');
		return new LookUpDataErrors($error);
	}

	/**
	 * Creates a Telekom data object of the type LookUpDataBuild from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LookUpDataBuild
	 * 	A Telekom data object
	 */
	static function createLookUpDataBuild($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$time_stamp = null;
	
		if(array_key_exists('time_stamp', $json)) {
			$time_stamp = self::createLookUpDataBuildTimeStamp($json['time_stamp']);
		}
		
		require_once(dirname(__FILE__).'/LookUpDataBuild.php');
		return new LookUpDataBuild($number, $time_stamp);
	}

	/**
	 * Creates a Telekom data object of the type STX3IDPool from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return STX3IDPool
	 * 	A Telekom data object
	 */
	static function createSTX3IDPool($json) {
		$elements = null;
	
		if(array_key_exists('elements', $json)) {
			$elements = self::createSTX3IDPoolElements($json['elements']);
		}
		
		$nodes = null;
	
		if(array_key_exists('nodes', $json)) {
			$nodes = self::createArrayOfNodes($json['nodes']);
		}
		
		require_once(dirname(__FILE__).'/STX3IDPool.php');
		return new STX3IDPool($elements, $nodes);
	}

	/**
	 * Creates a Telekom data object of the type LookUpDataErrorsError from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LookUpDataErrorsError
	 * 	A Telekom data object
	 */
	static function createLookUpDataErrorsError($json) {
		$code = null;
	
		if(array_key_exists('code', $json)) {
			$code = $json['code'];
		}
		
		$message = null;
	
		if(array_key_exists('message', $json)) {
			$message = $json['message'];
		}
		
		require_once(dirname(__FILE__).'/LookUpDataErrorsError.php');
		return new LookUpDataErrorsError($code, $message);
	}

	/**
	 * Creates a Telekom data object of the type LookUpDataBuildTimeStamp from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return LookUpDataBuildTimeStamp
	 * 	A Telekom data object
	 */
	static function createLookUpDataBuildTimeStamp($json) {
		$runtime = null;
	
		if(array_key_exists('runtime', $json)) {
			$runtime = $json['runtime'];
		}
		
		$service = null;
	
		if(array_key_exists('service', $json)) {
			$service = $json['service'];
		}
		
		require_once(dirname(__FILE__).'/LookUpDataBuildTimeStamp.php');
		return new LookUpDataBuildTimeStamp($runtime, $service);
	}

	/**
	 * Creates a Telekom data object of the type STX3IDPoolElements from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return STX3IDPoolElements
	 * 	A Telekom data object
	 */
	static function createSTX3IDPoolElements($json) {
		$element = array();
		$element_array = null;
		
		if(array_key_exists('element', $json)) {
			$element_array = $json['element'];
			
			foreach($element_array as $element_single) {
				array_push($element, self::createElement($element_single));
			}
		}
		
		require_once(dirname(__FILE__).'/STX3IDPoolElements.php');
		return new STX3IDPoolElements($element);
	}

	/**
	 * Creates a Telekom data object of the type ArrayOfNodes from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return ArrayOfNodes
	 * 	A Telekom data object
	 */
	static function createArrayOfNodes($json) {
		$node = array();
		$node_array = null;
		
		if(array_key_exists('node', $json)) {
			$node_array = $json['node'];
			
			foreach($node_array as $node_single) {
				array_push($node, self::createNode($node_single));
			}
		}
		
		require_once(dirname(__FILE__).'/ArrayOfNodes.php');
		return new ArrayOfNodes($node);
	}

	/**
	 * Creates a Telekom data object of the type Element from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return Element
	 * 	A Telekom data object
	 */
	static function createElement($json) {
		$name = null;
	
		if(array_key_exists('name', $json)) {
			$name = $json['name'];
		}
		
		$id = null;
	
		if(array_key_exists('id', $json)) {
			$id = $json['id'];
		}
		
		$text = null;
	
		if(array_key_exists('text', $json)) {
			$text = $json['text'];
		}
		
		require_once(dirname(__FILE__).'/Element.php');
		return new Element($name, $id, $text);
	}

	/**
	 * Creates a Telekom data object of the type Node from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return Node
	 * 	A Telekom data object
	 */
	static function createNode($json) {
		$name = null;
	
		if(array_key_exists('name', $json)) {
			$name = $json['name'];
		}
		
		$id = null;
	
		if(array_key_exists('id', $json)) {
			$id = $json['id'];
		}
		
		$text = null;
	
		if(array_key_exists('text', $json)) {
			$text = $json['text'];
		}
		
		$nodes = null;
	
		if(array_key_exists('nodes', $json)) {
			$nodes = self::createArrayOfNodes($json['nodes']);
		}
		
		require_once(dirname(__FILE__).'/Node.php');
		return new Node($name, $id, $text, $nodes);
	}

	/**
	 * Creates a Telekom data object of the type MakeModelTree from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return MakeModelTree
	 * 	A Telekom data object
	 */
	static function createMakeModelTree($json) {
		$request_id = null;
	
		if(array_key_exists('request_id', $json)) {
			$request_id = $json['request_id'];
		}
		
		$errors = null;
	
		if(array_key_exists('errors', $json)) {
			$errors = self::createMakeModelTreeErrors($json['errors']);
		}
		
		$build = null;
	
		if(array_key_exists('build', $json)) {
			$build = self::createMakeModelTreeBuild($json['build']);
		}
		
		$stx3_idpool = null;
	
		if(array_key_exists('stx3_idpool', $json)) {
			$stx3_idpool = self::createSTX3IDPool($json['stx3_idpool']);
		}
		
		require_once(dirname(__FILE__).'/MakeModelTree.php');
		return new MakeModelTree($request_id, $errors, $build, $stx3_idpool);
	}

	/**
	 * Creates a Telekom data object of the type MakeModelTreeErrors from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return MakeModelTreeErrors
	 * 	A Telekom data object
	 */
	static function createMakeModelTreeErrors($json) {
		$error = array();
		$error_array = null;
		
		if(array_key_exists('error', $json)) {
			$error_array = $json['error'];
			
			foreach($error_array as $error_single) {
				array_push($error, self::createMakeModelTreeErrorsError($error_single));
			}
		}
		
		require_once(dirname(__FILE__).'/MakeModelTreeErrors.php');
		return new MakeModelTreeErrors($error);
	}

	/**
	 * Creates a Telekom data object of the type MakeModelTreeBuild from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return MakeModelTreeBuild
	 * 	A Telekom data object
	 */
	static function createMakeModelTreeBuild($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$time_stamp = null;
	
		if(array_key_exists('time_stamp', $json)) {
			$time_stamp = self::createMakeModelTreeBuildTimeStamp($json['time_stamp']);
		}
		
		require_once(dirname(__FILE__).'/MakeModelTreeBuild.php');
		return new MakeModelTreeBuild($number, $time_stamp);
	}

	/**
	 * Creates a Telekom data object of the type MakeModelTreeErrorsError from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return MakeModelTreeErrorsError
	 * 	A Telekom data object
	 */
	static function createMakeModelTreeErrorsError($json) {
		$code = null;
	
		if(array_key_exists('code', $json)) {
			$code = $json['code'];
		}
		
		$message = null;
	
		if(array_key_exists('message', $json)) {
			$message = $json['message'];
		}
		
		require_once(dirname(__FILE__).'/MakeModelTreeErrorsError.php');
		return new MakeModelTreeErrorsError($code, $message);
	}

	/**
	 * Creates a Telekom data object of the type MakeModelTreeBuildTimeStamp from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return MakeModelTreeBuildTimeStamp
	 * 	A Telekom data object
	 */
	static function createMakeModelTreeBuildTimeStamp($json) {
		$runtime = null;
	
		if(array_key_exists('runtime', $json)) {
			$runtime = $json['runtime'];
		}
		
		$service = null;
	
		if(array_key_exists('service', $json)) {
			$service = $json['service'];
		}
		
		require_once(dirname(__FILE__).'/MakeModelTreeBuildTimeStamp.php');
		return new MakeModelTreeBuildTimeStamp($runtime, $service);
	}


	
	/**
	 * Creates a JSON object from an object of the type SearchParameters.
	 * @param SearchParameters $o
	 * 	The object, which is to be converted to JSON
	 * @return String
	 * 	A JSON data object
	 */
	static function jsonizeSearchParameters(SearchParameters $o) {		
		return json_encode(self::associatizeSearchParameters($o));
	}

	/**
	 * Creates a JSON object from an object of the type LookUpDataRequest.
	 * @param LookUpDataRequest $o
	 * 	The object, which is to be converted to JSON
	 * @return String
	 * 	A JSON data object
	 */
	static function jsonizeLookUpDataRequest(LookUpDataRequest $o) {		
		return json_encode(self::associatizeLookUpDataRequest($o));
	}

	/**
	 * Creates a JSON object from an object of the type MakeModelRequest.
	 * @param MakeModelRequest $o
	 * 	The object, which is to be converted to JSON
	 * @return String
	 * 	A JSON data object
	 */
	static function jsonizeMakeModelRequest(MakeModelRequest $o) {		
		return json_encode(self::associatizeMakeModelRequest($o));
	}

	
	/**
	 * Creates an associative array of the type VehicleSearchParametersAddressCountries.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersAddressCountries.
	 */
	static function associatizeVehicleSearchParametersAddressCountries($o) {		
		$a = array();
		
		
		$country_id = $o->getCountryId();
		
		if($country_id != null) {
			$a["country_id"] = $country_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersAddress.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersAddress.
	 */
	static function associatizeVehicleSearchParametersAddress($o) {		
		$a = array();
		
		
		$countries = $o->getCountries();
		
		if($countries != null) {
			
			$a["countries"] = self::associatizeVehicleSearchParametersAddressCountries($countries);
		}

		$radius = $o->getRadius();
		
		if($radius != null) {
			$a["radius"] = $radius;
		}

		$zip_code = $o->getZipCode();
		
		if($zip_code != null) {
			$a["zip_code"] = $zip_code;
		}

		$zip_country_id = $o->getZipCountryId();
		
		if($zip_country_id != null) {
			$a["zip_country_id"] = $zip_country_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersAvailabilityBegin.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersAvailabilityBegin.
	 */
	static function associatizeVehicleSearchParametersAvailabilityBegin($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersAvailabilityLastChange.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersAvailabilityLastChange.
	 */
	static function associatizeVehicleSearchParametersAvailabilityLastChange($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersAvailability.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersAvailability.
	 */
	static function associatizeVehicleSearchParametersAvailability($o) {		
		$a = array();
		
		
		$begin = $o->getBegin();
		
		if($begin != null) {
			
			$a["begin"] = self::associatizeVehicleSearchParametersAvailabilityBegin($begin);
		}

		$last_change = $o->getLastChange();
		
		if($last_change != null) {
			
			$a["last_change"] = self::associatizeVehicleSearchParametersAvailabilityLastChange($last_change);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersBodies.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersBodies.
	 */
	static function associatizeVehicleSearchParametersBodies($o) {		
		$a = array();
		
		
		$body_id = $o->getBodyId();
		
		if($body_id != null) {
			$a["body_id"] = $body_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersBodyColorgroups.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersBodyColorgroups.
	 */
	static function associatizeVehicleSearchParametersBodyColorgroups($o) {		
		$a = array();
		
		
		$body_colorgroup_id = $o->getBodyColorgroupId();
		
		if($body_colorgroup_id != null) {
			$a["body_colorgroup_id"] = $body_colorgroup_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersBodyPaintings.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersBodyPaintings.
	 */
	static function associatizeVehicleSearchParametersBodyPaintings($o) {		
		$a = array();
		
		
		$body_painting_id = $o->getBodyPaintingId();
		
		if($body_painting_id != null) {
			$a["body_painting_id"] = $body_painting_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersBrands.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersBrands.
	 */
	static function associatizeVehicleSearchParametersBrands($o) {		
		$a = array();
		
		
		$brand_id = $o->getBrandId();
		
		if($brand_id != null) {
			$a["brand_id"] = $brand_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersCategories.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersCategories.
	 */
	static function associatizeVehicleSearchParametersCategories($o) {		
		$a = array();
		
		
		$category_id = $o->getCategoryId();
		
		if($category_id != null) {
			$a["category_id"] = $category_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersDoors.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersDoors.
	 */
	static function associatizeVehicleSearchParametersDoors($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersEmissionClassId.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersEmissionClassId.
	 */
	static function associatizeVehicleSearchParametersEmissionClassId($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersEmissionStickerId.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersEmissionStickerId.
	 */
	static function associatizeVehicleSearchParametersEmissionStickerId($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersEmission.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersEmission.
	 */
	static function associatizeVehicleSearchParametersEmission($o) {		
		$a = array();
		
		
		$class_id = $o->getClassId();
		
		if($class_id != null) {
			
			$a["class_id"] = self::associatizeVehicleSearchParametersEmissionClassId($class_id);
		}

		$sticker_id = $o->getStickerId();
		
		if($sticker_id != null) {
			
			$a["sticker_id"] = self::associatizeVehicleSearchParametersEmissionStickerId($sticker_id);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersEquipments.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersEquipments.
	 */
	static function associatizeVehicleSearchParametersEquipments($o) {		
		$a = array();
		
		
		$equipment_id = $o->getEquipmentId();
		
		if($equipment_id != null) {
			$a["equipment_id"] = $equipment_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersFuelTypes.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersFuelTypes.
	 */
	static function associatizeVehicleSearchParametersFuelTypes($o) {		
		$a = array();
		
		
		$fuel_type_id = $o->getFuelTypeId();
		
		if($fuel_type_id != null) {
			$a["fuel_type_id"] = $fuel_type_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersGearTypeIds.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersGearTypeIds.
	 */
	static function associatizeVehicleSearchParametersGearTypeIds($o) {		
		$a = array();
		
		
		$gear_type_id = $o->getGearTypeId();
		
		if($gear_type_id != null) {
			$a["gear_type_id"] = $gear_type_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersGeneralInspection.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersGeneralInspection.
	 */
	static function associatizeVehicleSearchParametersGeneralInspection($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersInitialRegistration.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersInitialRegistration.
	 */
	static function associatizeVehicleSearchParametersInitialRegistration($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersKilowatt.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersKilowatt.
	 */
	static function associatizeVehicleSearchParametersKilowatt($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersMileage.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersMileage.
	 */
	static function associatizeVehicleSearchParametersMileage($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersModelLines.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersModelLines.
	 */
	static function associatizeVehicleSearchParametersModelLines($o) {		
		$a = array();
		
		
		$model_line_id = $o->getModelLineId();
		
		if($model_line_id != null) {
			$a["model_line_id"] = $model_line_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersModels.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersModels.
	 */
	static function associatizeVehicleSearchParametersModels($o) {		
		$a = array();
		
		
		$model_id = $o->getModelId();
		
		if($model_id != null) {
			$a["model_id"] = $model_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersPaging.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersPaging.
	 */
	static function associatizeVehicleSearchParametersPaging($o) {		
		$a = array();
		
		
		$current_page = $o->getCurrentPage();
		
		if($current_page != null) {
			$a["current_page"] = $current_page;
		}

		$results_per_page = $o->getResultsPerPage();
		
		if($results_per_page != null) {
			$a["results_per_page"] = $results_per_page;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersPreviousOwnerCount.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersPreviousOwnerCount.
	 */
	static function associatizeVehicleSearchParametersPreviousOwnerCount($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersPricePublic.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersPricePublic.
	 */
	static function associatizeVehicleSearchParametersPricePublic($o) {		
		$a = array();
		
		
		$from = $o->getFrom();
		
		if($from != null) {
			$a["from"] = $from;
		}

		$to = $o->getTo();
		
		if($to != null) {
			$a["to"] = $to;
		}

		$vat_type_id = $o->getVatTypeId();
		
		if($vat_type_id != null) {
			$a["vat_type_id"] = $vat_type_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParametersSorting.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParametersSorting.
	 */
	static function associatizeVehicleSearchParametersSorting($o) {		
		$a = array();
		
		
		$descending = $o->getDescending();
		
		if($descending != null) {
			$a["descending"] = $descending;
		}

		$key = $o->getKey();
		
		if($key != null) {
			$a["key"] = $key;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSearchParameters.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSearchParameters.
	 */
	static function associatizeVehicleSearchParameters($o) {		
		$a = array();
		
		
		$accident_free = $o->getAccidentFree();
		
		if($accident_free != null) {
			$a["accident_free"] = $accident_free;
		}

		$address = $o->getAddress();
		
		if($address != null) {
			
			$a["address"] = self::associatizeVehicleSearchParametersAddress($address);
		}

		$availability = $o->getAvailability();
		
		if($availability != null) {
			
			$a["availability"] = self::associatizeVehicleSearchParametersAvailability($availability);
		}

		$bodies = $o->getBodies();
		
		if($bodies != null) {
			
			$a["bodies"] = self::associatizeVehicleSearchParametersBodies($bodies);
		}

		$body_colorgroups = $o->getBodyColorgroups();
		
		if($body_colorgroups != null) {
			
			$a["body_colorgroups"] = self::associatizeVehicleSearchParametersBodyColorgroups($body_colorgroups);
		}

		$body_paintings = $o->getBodyPaintings();
		
		if($body_paintings != null) {
			
			$a["body_paintings"] = self::associatizeVehicleSearchParametersBodyPaintings($body_paintings);
		}

		$brands = $o->getBrands();
		
		if($brands != null) {
			
			$a["brands"] = self::associatizeVehicleSearchParametersBrands($brands);
		}

		$categories = $o->getCategories();
		
		if($categories != null) {
			
			$a["categories"] = self::associatizeVehicleSearchParametersCategories($categories);
		}

		$dealer_id = $o->getDealerId();
		
		if($dealer_id != null) {
			$a["dealer_id"] = $dealer_id;
		}

		$doors = $o->getDoors();
		
		if($doors != null) {
			
			$a["doors"] = self::associatizeVehicleSearchParametersDoors($doors);
		}

		$emission = $o->getEmission();
		
		if($emission != null) {
			
			$a["emission"] = self::associatizeVehicleSearchParametersEmission($emission);
		}

		$equipments = $o->getEquipments();
		
		if($equipments != null) {
			
			$a["equipments"] = self::associatizeVehicleSearchParametersEquipments($equipments);
		}

		$fuel_types = $o->getFuelTypes();
		
		if($fuel_types != null) {
			
			$a["fuel_types"] = self::associatizeVehicleSearchParametersFuelTypes($fuel_types);
		}

		$gear_type_ids = $o->getGearTypeIds();
		
		if($gear_type_ids != null) {
			
			$a["gear_type_ids"] = self::associatizeVehicleSearchParametersGearTypeIds($gear_type_ids);
		}

		$general_inspection = $o->getGeneralInspection();
		
		if($general_inspection != null) {
			
			$a["general_inspection"] = self::associatizeVehicleSearchParametersGeneralInspection($general_inspection);
		}

		$initial_registration = $o->getInitialRegistration();
		
		if($initial_registration != null) {
			
			$a["initial_registration"] = self::associatizeVehicleSearchParametersInitialRegistration($initial_registration);
		}

		$kilowatt = $o->getKilowatt();
		
		if($kilowatt != null) {
			
			$a["kilowatt"] = self::associatizeVehicleSearchParametersKilowatt($kilowatt);
		}

		$mileage = $o->getMileage();
		
		if($mileage != null) {
			
			$a["mileage"] = self::associatizeVehicleSearchParametersMileage($mileage);
		}

		$model_lines = $o->getModelLines();
		
		if($model_lines != null) {
			
			$a["model_lines"] = self::associatizeVehicleSearchParametersModelLines($model_lines);
		}

		$models = $o->getModels();
		
		if($models != null) {
			
			$a["models"] = self::associatizeVehicleSearchParametersModels($models);
		}

		$owners_offer_key = $o->getOwnersOfferKey();
		
		if($owners_offer_key != null) {
			$a["owners_offer_key"] = $owners_offer_key;
		}

		$paging = $o->getPaging();
		
		if($paging != null) {
			
			$a["paging"] = self::associatizeVehicleSearchParametersPaging($paging);
		}

		$previous_owner_count = $o->getPreviousOwnerCount();
		
		if($previous_owner_count != null) {
			
			$a["previous_owner_count"] = self::associatizeVehicleSearchParametersPreviousOwnerCount($previous_owner_count);
		}

		$price_public = $o->getPricePublic();
		
		if($price_public != null) {
			
			$a["price_public"] = self::associatizeVehicleSearchParametersPricePublic($price_public);
		}

		$show_dealer_vehicles = $o->getShowDealerVehicles();
		
		if($show_dealer_vehicles != null) {
			$a["show_dealer_vehicles"] = $show_dealer_vehicles;
		}

		$show_private_vehicles = $o->getShowPrivateVehicles();
		
		if($show_private_vehicles != null) {
			$a["show_private_vehicles"] = $show_private_vehicles;
		}

		$show_with_images_only = $o->getShowWithImagesOnly();
		
		if($show_with_images_only != null) {
			$a["show_with_images_only"] = $show_with_images_only;
		}

		$sorting = $o->getSorting();
		
		if($sorting != null) {
			
			$a["sorting"] = self::associatizeVehicleSearchParametersSorting($sorting);
		}

		$version = $o->getVersion();
		
		if($version != null) {
			$a["version"] = $version;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type SearchParameters.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of SearchParameters.
	 */
	static function associatizeSearchParameters($o) {		
		$a = array();
		
		
		$culture_id = $o->getCultureId();
		
		if($culture_id != null) {
			$a["culture_id"] = $culture_id;
		}

		$vehicle_search_parameters = $o->getVehicleSearchParameters();
		
		if($vehicle_search_parameters != null) {
			
			$a["vehicle_search_parameters"] = self::associatizeVehicleSearchParameters($vehicle_search_parameters);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpDataRequest.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpDataRequest.
	 */
	static function associatizeLookUpDataRequest($o) {		
		$a = array();
		
		
		$culture_id = $o->getCultureId();
		
		if($culture_id != null) {
			$a["culture_id"] = $culture_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelRequest.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelRequest.
	 */
	static function associatizeMakeModelRequest($o) {		
		$a = array();
		
		
		$culture_id = $o->getCultureId();
		
		if($culture_id != null) {
			$a["culture_id"] = $culture_id;
		}

		$dealer_id = $o->getDealerId();
		
		if($dealer_id != null) {
			$a["dealer_id"] = $dealer_id;
		}

		$group_id = $o->getGroupId();
		
		if($group_id != null) {
			$a["group_id"] = $group_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleAvailability.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleAvailability.
	 */
	static function associatizeVehicleAvailability($o) {		
		$a = array();
		
		
		$begin = $o->getBegin();
		
		if($begin != null) {
			$a["begin"] = $begin;
		}

		$end = $o->getEnd();
		
		if($end != null) {
			$a["end"] = $end;
		}

		$last_change = $o->getLastChange();
		
		if($last_change != null) {
			$a["last_change"] = $last_change;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleEmission.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleEmission.
	 */
	static function associatizeVehicleEmission($o) {		
		$a = array();
		
		
		$class_id = $o->getClassId();
		
		if($class_id != null) {
			$a["class_id"] = $class_id;
		}

		$co2_liquid = $o->getCo2Liquid();
		
		if($co2_liquid != null) {
			$a["co2_liquid"] = $co2_liquid;
		}

		$sticker_id = $o->getStickerId();
		
		if($sticker_id != null) {
			$a["sticker_id"] = $sticker_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePreviousOwnerOwnerOwnerXCode.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePreviousOwnerOwnerOwnerXCode.
	 */
	static function associatizeVehiclePreviousOwnerOwnerOwnerXCode($o) {		
		$a = array();
		
		
		$customer_type_id = $o->getCustomerTypeId();
		
		if($customer_type_id != null) {
			$a["customer_type_id"] = $customer_type_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePreviousOwnerOwnerOwner.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePreviousOwnerOwnerOwner.
	 */
	static function associatizeVehiclePreviousOwnerOwnerOwner($o) {		
		$a = array();
		
		
		$city = $o->getCity();
		
		if($city != null) {
			$a["city"] = $city;
		}

		$country = $o->getCountry();
		
		if($country != null) {
			$a["country"] = $country;
		}

		$zip = $o->getZip();
		
		if($zip != null) {
			$a["zip"] = $zip;
		}

		$x_code = $o->getXCode();
		
		if($x_code != null) {
			
			$a["x_code"] = self::associatizeVehiclePreviousOwnerOwnerOwnerXCode($x_code);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePreviousOwnerOwner.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePreviousOwnerOwner.
	 */
	static function associatizeVehiclePreviousOwnerOwner($o) {		
		$a = array();
		
		
		$owner = $o->getOwner();
		
		if($owner != null) {
			
			$ownerArray = array();
			
			foreach($owner as $value) {
				$ownerArray[] = self::associatizeVehiclePreviousOwnerOwnerOwner($value);
			}
			
			$a["owner"] = $ownerArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePreviousOwner.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePreviousOwner.
	 */
	static function associatizeVehiclePreviousOwner($o) {		
		$a = array();
		
		
		$count = $o->getCount();
		
		if($count != null) {
			$a["count"] = $count;
		}

		$owner = $o->getOwner();
		
		if($owner != null) {
			
			$a["owner"] = self::associatizeVehiclePreviousOwnerOwner($owner);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleConsumptionLiquid.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleConsumptionLiquid.
	 */
	static function associatizeVehicleConsumptionLiquid($o) {		
		$a = array();
		
		
		$combined = $o->getCombined();
		
		if($combined != null) {
			$a["combined"] = $combined;
		}

		$extra_urban = $o->getExtraUrban();
		
		if($extra_urban != null) {
			$a["extra_urban"] = $extra_urban;
		}

		$urban = $o->getUrban();
		
		if($urban != null) {
			$a["urban"] = $urban;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleConsumption.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleConsumption.
	 */
	static function associatizeVehicleConsumption($o) {		
		$a = array();
		
		
		$liquid = $o->getLiquid();
		
		if($liquid != null) {
			
			$a["liquid"] = self::associatizeVehicleConsumptionLiquid($liquid);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleEquipments.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleEquipments.
	 */
	static function associatizeVehicleEquipments($o) {		
		$a = array();
		
		
		$equipment_id = $o->getEquipmentId();
		
		if($equipment_id != null) {
			$a["equipment_id"] = $equipment_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleMediaXCode.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleMediaXCode.
	 */
	static function associatizeVehicleMediaXCode($o) {		
		$a = array();
		
		
		$image_count = $o->getImageCount();
		
		if($image_count != null) {
			$a["image_count"] = $image_count;
		}

		$last_change_images = $o->getLastChangeImages();
		
		if($last_change_images != null) {
			$a["last_change_images"] = $last_change_images;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleMediaImagesImage.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleMediaImagesImage.
	 */
	static function associatizeVehicleMediaImagesImage($o) {		
		$a = array();
		
		
		$uri = $o->getUri();
		
		if($uri != null) {
			$a["uri"] = $uri;
		}

		$position = $o->getPosition();
		
		if($position != null) {
			$a["position"] = $position;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleMediaImages.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleMediaImages.
	 */
	static function associatizeVehicleMediaImages($o) {		
		$a = array();
		
		
		$image = $o->getImage();
		
		if($image != null) {
			
			$imageArray = array();
			
			foreach($image as $value) {
				$imageArray[] = self::associatizeVehicleMediaImagesImage($value);
			}
			
			$a["image"] = $imageArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleMedia.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleMedia.
	 */
	static function associatizeVehicleMedia($o) {		
		$a = array();
		
		
		$x_code = $o->getXCode();
		
		if($x_code != null) {
			
			$a["x_code"] = self::associatizeVehicleMediaXCode($x_code);
		}

		$images = $o->getImages();
		
		if($images != null) {
			
			$a["images"] = self::associatizeVehicleMediaImages($images);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePricesPrice.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePricesPrice.
	 */
	static function associatizeVehiclePricesPrice($o) {		
		$a = array();
		
		
		$currency_id = $o->getCurrencyId();
		
		if($currency_id != null) {
			$a["currency_id"] = $currency_id;
		}

		$type = $o->getType();
		
		if($type != null) {
			$a["type"] = $type;
		}

		$value = $o->getValue();
		
		if($value != null) {
			$a["value"] = $value;
		}

		$vat_type_id = $o->getVatTypeId();
		
		if($vat_type_id != null) {
			$a["vat_type_id"] = $vat_type_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehiclePrices.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehiclePrices.
	 */
	static function associatizeVehiclePrices($o) {		
		$a = array();
		
		
		$price = $o->getPrice();
		
		if($price != null) {
			
			$priceArray = array();
			
			foreach($price as $value) {
				$priceArray[] = self::associatizeVehiclePricesPrice($value);
			}
			
			$a["price"] = $priceArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleSeals.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleSeals.
	 */
	static function associatizeVehicleSeals($o) {		
		$a = array();
		
		
		$seal_id = $o->getSealId();
		
		if($seal_id != null) {
			$a["seal_id"] = $seal_id;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type VehicleXCode.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of VehicleXCode.
	 */
	static function associatizeVehicleXCode($o) {		
		$a = array();
		
		
		$as24_detail_page_url = $o->getAs24DetailPageUrl();
		
		if($as24_detail_page_url != null) {
			$a["as24_detail_page_url"] = $as24_detail_page_url;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type Vehicle.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of Vehicle.
	 */
	static function associatizeVehicle($o) {		
		$a = array();
		
		
		$availability = $o->getAvailability();
		
		if($availability != null) {
			
			$a["availability"] = self::associatizeVehicleAvailability($availability);
		}

		$emission = $o->getEmission();
		
		if($emission != null) {
			
			$a["emission"] = self::associatizeVehicleEmission($emission);
		}

		$previous_owner = $o->getPreviousOwner();
		
		if($previous_owner != null) {
			
			$a["previous_owner"] = self::associatizeVehiclePreviousOwner($previous_owner);
		}

		$consumption = $o->getConsumption();
		
		if($consumption != null) {
			
			$a["consumption"] = self::associatizeVehicleConsumption($consumption);
		}

		$accident_free = $o->getAccidentFree();
		
		if($accident_free != null) {
			$a["accident_free"] = $accident_free;
		}

		$body_color = $o->getBodyColor();
		
		if($body_color != null) {
			$a["body_color"] = $body_color;
		}

		$body_colorgroup_id = $o->getBodyColorgroupId();
		
		if($body_colorgroup_id != null) {
			$a["body_colorgroup_id"] = $body_colorgroup_id;
		}

		$body_id = $o->getBodyId();
		
		if($body_id != null) {
			$a["body_id"] = $body_id;
		}

		$body_painting_id = $o->getBodyPaintingId();
		
		if($body_painting_id != null) {
			$a["body_painting_id"] = $body_painting_id;
		}

		$brand_id = $o->getBrandId();
		
		if($brand_id != null) {
			$a["brand_id"] = $brand_id;
		}

		$category_id = $o->getCategoryId();
		
		if($category_id != null) {
			$a["category_id"] = $category_id;
		}

		$equipments = $o->getEquipments();
		
		if($equipments != null) {
			
			$a["equipments"] = self::associatizeVehicleEquipments($equipments);
		}

		$fuel_type_id = $o->getFuelTypeId();
		
		if($fuel_type_id != null) {
			$a["fuel_type_id"] = $fuel_type_id;
		}

		$gear_type_id = $o->getGearTypeId();
		
		if($gear_type_id != null) {
			$a["gear_type_id"] = $gear_type_id;
		}

		$general_inspection = $o->getGeneralInspection();
		
		if($general_inspection != null) {
			$a["general_inspection"] = $general_inspection;
		}

		$initial_registration = $o->getInitialRegistration();
		
		if($initial_registration != null) {
			$a["initial_registration"] = $initial_registration;
		}

		$kilowatt = $o->getKilowatt();
		
		if($kilowatt != null) {
			$a["kilowatt"] = $kilowatt;
		}

		$media = $o->getMedia();
		
		if($media != null) {
			
			$a["media"] = self::associatizeVehicleMedia($media);
		}

		$mileage = $o->getMileage();
		
		if($mileage != null) {
			$a["mileage"] = $mileage;
		}

		$model_id = $o->getModelId();
		
		if($model_id != null) {
			$a["model_id"] = $model_id;
		}

		$owners_offer_key = $o->getOwnersOfferKey();
		
		if($owners_offer_key != null) {
			$a["owners_offer_key"] = $owners_offer_key;
		}

		$prices = $o->getPrices();
		
		if($prices != null) {
			
			$a["prices"] = self::associatizeVehiclePrices($prices);
		}

		$seals = $o->getSeals();
		
		if($seals != null) {
			
			$a["seals"] = self::associatizeVehicleSeals($seals);
		}

		$title = $o->getTitle();
		
		if($title != null) {
			$a["title"] = $title;
		}

		$vehicle_id = $o->getVehicleId();
		
		if($vehicle_id != null) {
			$a["vehicle_id"] = $vehicle_id;
		}

		$version = $o->getVersion();
		
		if($version != null) {
			$a["version"] = $version;
		}

		$x_code = $o->getXCode();
		
		if($x_code != null) {
			
			$a["x_code"] = self::associatizeVehicleXCode($x_code);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpDataErrorsError.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpDataErrorsError.
	 */
	static function associatizeLookUpDataErrorsError($o) {		
		$a = array();
		
		
		$code = $o->getCode();
		
		if($code != null) {
			$a["code"] = $code;
		}

		$message = $o->getMessage();
		
		if($message != null) {
			$a["message"] = $message;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpDataErrors.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpDataErrors.
	 */
	static function associatizeLookUpDataErrors($o) {		
		$a = array();
		
		
		$error = $o->getError();
		
		if($error != null) {
			
			$errorArray = array();
			
			foreach($error as $value) {
				$errorArray[] = self::associatizeLookUpDataErrorsError($value);
			}
			
			$a["error"] = $errorArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpDataBuildTimeStamp.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpDataBuildTimeStamp.
	 */
	static function associatizeLookUpDataBuildTimeStamp($o) {		
		$a = array();
		
		
		$runtime = $o->getRuntime();
		
		if($runtime != null) {
			$a["runtime"] = $runtime;
		}

		$service = $o->getService();
		
		if($service != null) {
			$a["service"] = $service;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpDataBuild.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpDataBuild.
	 */
	static function associatizeLookUpDataBuild($o) {		
		$a = array();
		
		
		$number = $o->getNumber();
		
		if($number != null) {
			$a["number"] = $number;
		}

		$time_stamp = $o->getTimeStamp();
		
		if($time_stamp != null) {
			
			$a["time_stamp"] = self::associatizeLookUpDataBuildTimeStamp($time_stamp);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type Element.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of Element.
	 */
	static function associatizeElement($o) {		
		$a = array();
		
		
		$name = $o->getName();
		
		if($name != null) {
			$a["name"] = $name;
		}

		$id = $o->getId();
		
		if($id != null) {
			$a["id"] = $id;
		}

		$text = $o->getText();
		
		if($text != null) {
			$a["text"] = $text;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type STX3IDPoolElements.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of STX3IDPoolElements.
	 */
	static function associatizeSTX3IDPoolElements($o) {		
		$a = array();
		
		
		$element = $o->getElement();
		
		if($element != null) {
			
			$elementArray = array();
			
			foreach($element as $value) {
				$elementArray[] = self::associatizeElement($value);
			}
			
			$a["element"] = $elementArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type ArrayOfNodes.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of ArrayOfNodes.
	 */
	static function associatizeArrayOfNodes($o) {		
		$a = array();
		
		
		$node = $o->getNode();
		
		if($node != null) {
			
			$nodeArray = array();
			
			foreach($node as $value) {
				$nodeArray[] = self::associatizeNode($value);
			}
			
			$a["node"] = $nodeArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type Node.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of Node.
	 */
	static function associatizeNode($o) {		
		$a = array();
		
		
		$name = $o->getName();
		
		if($name != null) {
			$a["name"] = $name;
		}

		$id = $o->getId();
		
		if($id != null) {
			$a["id"] = $id;
		}

		$text = $o->getText();
		
		if($text != null) {
			$a["text"] = $text;
		}

		$nodes = $o->getNodes();
		
		if($nodes != null) {
			
			$a["nodes"] = self::associatizeArrayOfNodes($nodes);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type STX3IDPool.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of STX3IDPool.
	 */
	static function associatizeSTX3IDPool($o) {		
		$a = array();
		
		
		$elements = $o->getElements();
		
		if($elements != null) {
			
			$a["elements"] = self::associatizeSTX3IDPoolElements($elements);
		}

		$nodes = $o->getNodes();
		
		if($nodes != null) {
			
			$a["nodes"] = self::associatizeArrayOfNodes($nodes);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type LookUpData.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of LookUpData.
	 */
	static function associatizeLookUpData($o) {		
		$a = array();
		
		
		$request_id = $o->getRequestId();
		
		if($request_id != null) {
			$a["request_id"] = $request_id;
		}

		$errors = $o->getErrors();
		
		if($errors != null) {
			
			$a["errors"] = self::associatizeLookUpDataErrors($errors);
		}

		$build = $o->getBuild();
		
		if($build != null) {
			
			$a["build"] = self::associatizeLookUpDataBuild($build);
		}

		$stx3_idpool = $o->getStx3Idpool();
		
		if($stx3_idpool != null) {
			
			$a["stx3_idpool"] = self::associatizeSTX3IDPool($stx3_idpool);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelTreeErrorsError.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelTreeErrorsError.
	 */
	static function associatizeMakeModelTreeErrorsError($o) {		
		$a = array();
		
		
		$code = $o->getCode();
		
		if($code != null) {
			$a["code"] = $code;
		}

		$message = $o->getMessage();
		
		if($message != null) {
			$a["message"] = $message;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelTreeErrors.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelTreeErrors.
	 */
	static function associatizeMakeModelTreeErrors($o) {		
		$a = array();
		
		
		$error = $o->getError();
		
		if($error != null) {
			
			$errorArray = array();
			
			foreach($error as $value) {
				$errorArray[] = self::associatizeMakeModelTreeErrorsError($value);
			}
			
			$a["error"] = $errorArray; 
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelTreeBuildTimeStamp.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelTreeBuildTimeStamp.
	 */
	static function associatizeMakeModelTreeBuildTimeStamp($o) {		
		$a = array();
		
		
		$runtime = $o->getRuntime();
		
		if($runtime != null) {
			$a["runtime"] = $runtime;
		}

		$service = $o->getService();
		
		if($service != null) {
			$a["service"] = $service;
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelTreeBuild.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelTreeBuild.
	 */
	static function associatizeMakeModelTreeBuild($o) {		
		$a = array();
		
		
		$number = $o->getNumber();
		
		if($number != null) {
			$a["number"] = $number;
		}

		$time_stamp = $o->getTimeStamp();
		
		if($time_stamp != null) {
			
			$a["time_stamp"] = self::associatizeMakeModelTreeBuildTimeStamp($time_stamp);
		}

		
		return $a;
	}

	/**
	 * Creates an associative array of the type MakeModelTree.
	 * @param $o
	 * 	The object, which is to be converted to an associative array
	 * @return array
	 *  An associative array representing an instance of MakeModelTree.
	 */
	static function associatizeMakeModelTree($o) {		
		$a = array();
		
		
		$request_id = $o->getRequestId();
		
		if($request_id != null) {
			$a["request_id"] = $request_id;
		}

		$errors = $o->getErrors();
		
		if($errors != null) {
			
			$a["errors"] = self::associatizeMakeModelTreeErrors($errors);
		}

		$build = $o->getBuild();
		
		if($build != null) {
			
			$a["build"] = self::associatizeMakeModelTreeBuild($build);
		}

		$stx3_idpool = $o->getStx3Idpool();
		
		if($stx3_idpool != null) {
			
			$a["stx3_idpool"] = self::associatizeSTX3IDPool($stx3_idpool);
		}

		
		return $a;
	}


	/**
	 * Retrieves the description of a status constant in the specified language.
	 * @param string $statusConstant
	 *  The status constant
	 * @param string $language
	 *  The language
	 */
	static function getDescription($statusConstant, $language) {
		if($statusConstant == TelekomStatusConstants::SUCCESS ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::QUOTA_EXCEEDED ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::QUOTA_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::QUOTA_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::CULTUREID_WRONG_OR_MISSING ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::CULTUREID_WRONG_OR_MISSING_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::CULTUREID_WRONG_OR_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::BOOLEAN_PARSING_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::BOOLEAN_PARSING_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::BOOLEAN_PARSING_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::DECIMAL_PARSING_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::DECIMAL_PARSING_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::DECIMAL_PARSING_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::INT_PARSING_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::INT_PARSING_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::INT_PARSING_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::SORTING_KEY_INVALID ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::SORTING_KEY_INVALID_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::SORTING_KEY_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::DATETIME_PARSING_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::DATETIME_PARSING_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::DATETIME_PARSING_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::RESOURCE_NOT_AVAILABLE ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::RESOURCE_NOT_AVAILABLE_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::RESOURCE_NOT_AVAILABLE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::LOOKUPSERVICE_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::LOOKUPSERVICE_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::LOOKUPSERVICE_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::ARTICLESERVICE_ERROR ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::ARTICLESERVICE_ERROR_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::ARTICLESERVICE_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::PARAMETER_MISSING_OR_INVALID ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::PARAMETER_MISSING_OR_INVALID_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::PARAMETER_MISSING_OR_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::METHODCALL_FAILED ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::METHODCALL_FAILED_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::METHODCALL_FAILED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::USER_UNKNOWN ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::USER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::USER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::TOKEN_NONEXISTANT ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::TOKEN_NONEXISTANT_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::TOKEN_NONEXISTANT_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::NOTHING_FOUND ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::NOTHING_FOUND_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::NOTHING_FOUND_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == AutoScout24StatusConstants::SEARCHCRITERIA_WRONG ) {
			if($language == 'german') {
				return AutoScout24StatusDescriptions::SEARCHCRITERIA_WRONG_DESCRIPTION_GERMAN;
			} else {
				return AutoScout24StatusDescriptions::SEARCHCRITERIA_WRONG_DESCRIPTION_ENGLISH;
			}
		}
		
		return null;
	}
	
	/**
	 * Computes the status constant for the specified status code
	 * @param statusCode String
	 *  The status code for which the status constant is to be computed
	 * @return int
	 *  The status constant for the specified status code
	 */
	static function getStatusConstant($statusCode) {
		if($statusCode == null) {
			return -1;
		} else {
			$statusConstant = intval($statusCode);
			
			
			if($statusConstant == 13 ) {
				return TelekomStatusConstants::INTERNAL_ERROR;
			}
			if($statusConstant == 24 ) {
				return TelekomStatusConstants::ENVIRONMENT_INVALID;
			}
			
			if($statusConstant == TelekomStatusConstants::SUCCESS) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS) {
				return $statusConstant;
			}
			
			if($statusConstant == TelekomStatusConstants::TOKEN_INVALID) {
				return $statusConstant;
			}
			
			return AutoScout24Client::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
