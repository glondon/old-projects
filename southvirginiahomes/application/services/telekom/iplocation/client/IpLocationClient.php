<?php
/**
 * Service client for the Telekom service IP Location.
 * @package ipLocation
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/IpLocationDataFactory.php';

/**
 * Service client for the Telekom service IP Location.
 * @package ipLocation
 * @subpackage client
 */
class IpLocationClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 5;
	
	/**
	 * Constructs a service client for the Telekom service IP Location using username and password or a security token getter.
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
	 * Ortsinformationen einer IP-Adresse ermitteln
	 *
	 * @param string $ipaddress Kommaseparierte Liste von IP-Adressen, die lokalisiert werden sollen.
	 * @return LocateIpResponse The result of the operation Ortsinformationen einer IP-Adresse ermitteln
	 */
	function locateIp($ipaddress) {
		if($ipaddress == null) {
			throw new InvalidArgumentException("ipaddress");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-iplocation/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/location';

		
			
		$request_string = "";
			
			
		if($ipaddress != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'ipaddress='.urlencode($ipaddress);
		}
		

		$curl_session = curl_init($url_string.$request_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'Authorization: TAuth realm="https://odg.t-online.de",tauth_token="'.$this->token_getter->getToken()->getToken().'"',
				'User-Agent: Telekom PHP SDK/3.1.10',
				'Accept: application/json'
			)
		);
		
		if($this->additional_curl_options != null) {
			$curl_options = $curl_options + $this->additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			return IpLocationDataFactory::createLocateIpResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}