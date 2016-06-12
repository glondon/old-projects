<?php
/**
 * Service client for the Telekom service Auto Scout 24.
 * @package autoScout24
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/AutoScout24DataFactory.php';

/**
 * Service client for the Telekom service Auto Scout 24.
 * @package autoScout24
 * @subpackage client
 */
class AutoScout24Client extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 8;
	
	/**
	 * Constructs a service client for the Telekom service Auto Scout 24 using username and password or a security token getter.
	 *
	 * @param String $environment
	 * 		The environment which should be used to access the service. Possible values are:
	 * 		<ul>
	 * 			<li>production</li>
	 * 			<li>sandbox</li>
	 * 			<li>mock</li>
	 * 		</ul>
	 * @param String|SecurityTokenGetter $username_or_token_getter
	 * 		Either the Telekom username or a security token getter. If a security token getter is specified, the password must be null.
	 * @param String $password
	 * 		The Telekom password. It must be null if a security token getter is specified.
	 */
	function __construct($environment, $username_or_token_getter, $password = null) {
		parent::__construct($environment, $username_or_token_getter, $password);
	}
	
	/**
	 * Query the article database
	 *
	 * @param SearchParameters $searchParameters The vehicle search parameters
	 * @return FindArticlesResponse The result of the operation Query the article database
	 */
	function findArticles($searchParameters) {
		if($searchParameters == null) {
			throw new InvalidArgumentException("searchParameters");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/plone/autoscout24/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/articles';

		
			
		$request_array = array();
			
			
		if($searchParameters != null) {
			$request_array = AutoScout24DataFactory::jsonizeSearchParameters($searchParameters);
		}
		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'Authorization: TAuth realm="https://odg.t-online.de",tauth_token="'.$this->token_getter->getToken()->getToken().'"',
				'User-Agent: Telekom PHP SDK/3.1.10',
				'Accept: application/json',
				'Content-Type: application/json'
			),
			CURLOPT_POSTFIELDS => $request_array
		);
		
		if($this->additional_curl_options != null) {
			$curl_options = $curl_options + $this->additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			return AutoScout24DataFactory::createFindArticlesResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * List all enumeration values
	 *
	 * @param LookUpDataRequest $lookUpDataRequest The container for GetLookUpData request.
	 * @return GetLookUpDataResponse The result of the operation List all enumeration values
	 */
	function getLookUpData($lookUpDataRequest) {
		if($lookUpDataRequest == null) {
			throw new InvalidArgumentException("lookUpDataRequest");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/plone/autoscout24/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/lookUpData';

		
			
		$request_array = array();
			
			
		if($lookUpDataRequest != null) {
			$request_array = AutoScout24DataFactory::jsonizeLookUpDataRequest($lookUpDataRequest);
		}
		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'Authorization: TAuth realm="https://odg.t-online.de",tauth_token="'.$this->token_getter->getToken()->getToken().'"',
				'User-Agent: Telekom PHP SDK/3.1.10',
				'Accept: application/json',
				'Content-Type: application/json'
			),
			CURLOPT_POSTFIELDS => $request_array
		);
		
		if($this->additional_curl_options != null) {
			$curl_options = $curl_options + $this->additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			return AutoScout24DataFactory::createGetLookUpDataResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * Retrieve the model tree structure
	 *
	 * @param MakeModelRequest $makeModelRequest The container for GetMakeModelTree request.
	 * @return GetMakeModelTreeResponse The result of the operation Retrieve the model tree structure
	 */
	function getMakeModelTree($makeModelRequest) {
		if($makeModelRequest == null) {
			throw new InvalidArgumentException("makeModelRequest");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/plone/autoscout24/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/makeModelTree';

		
			
		$request_array = array();
			
			
		if($makeModelRequest != null) {
			$request_array = AutoScout24DataFactory::jsonizeMakeModelRequest($makeModelRequest);
		}
		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'Authorization: TAuth realm="https://odg.t-online.de",tauth_token="'.$this->token_getter->getToken()->getToken().'"',
				'User-Agent: Telekom PHP SDK/3.1.10',
				'Accept: application/json',
				'Content-Type: application/json'
			),
			CURLOPT_POSTFIELDS => $request_array
		);
		
		if($this->additional_curl_options != null) {
			$curl_options = $curl_options + $this->additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			return AutoScout24DataFactory::createGetMakeModelTreeResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}