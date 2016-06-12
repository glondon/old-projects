<?php
/**
 * Service client for the Telekom service Administration service (Quota and Accounts).
 * @package quota
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/QuotaDataFactory.php';

/**
 * Service client for the Telekom service Administration service (Quota and Accounts).
 * @package quota
 * @subpackage client
 */
class QuotaClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 6;
	
	/**
	 * Constructs a service client for the Telekom service Verwaltungsservice (Quota und Konten) using username and password or a security token getter.
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
	 * Quota abfragen
	 *
	 * @param String $moduleID Identifikation für Dienst und Umgebung:<ul>[<Para>"SmsProduction": Send SMS, Produktionsumgebung</Para>[<Para>"SmsSandbox": Send SMS, Sandbox-Umgebung</Para>[<Para>"MmsProduction": Send MMS, Produktionsumgebung</Para>[<Para>"MmsSandbox": Send MMS, Sandbox-Umgebung</Para>[<Para>"VoiceButlerProduction": Voice Call, Produktionsumgebung</Para>[<Para>"VoiceButlerSandbox": Voice Call, Sandbox-Umgebung</Para>[<Para>"CCSProduction": Conference Call, Produktionsumgebung</Para>[<Para>"CCSSandbox": Conference Call, Sandbox-Umgebung</Para>[<Para>"IPLocationProduction": IP Location, Produktionsumgebung</Para>[<Para>"IPLocationSandbox": IP Location, Sandbox-Umgebung</Para>]]]]]]]]]]</ul>
	 * @return GetQuotaInformationResponse The result of the operation Quota abfragen
	 */
	function getQuotaInformation($moduleID) {
		if($moduleID == null) {
			throw new InvalidArgumentException("moduleID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-admin/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/quotainfo';
		$url_string .= '/'.urlencode($moduleID);

		

		$curl_session = curl_init($url_string);
		
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
			return QuotaDataFactory::createGetQuotaInformationResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * Quota setzen
	 *
	 * @param String $moduleID Identifikation für Dienst und Umgebung:<ul>[<Para>"SmsProduction": Send SMS, Produktionsumgebung</Para>[<Para>"SmsSandbox": Send SMS, Sandbox-Umgebung</Para>[<Para>"MmsProduction": Send MMS, Produktionsumgebung</Para>[<Para>"MmsSandbox": Send MMS, Sandbox-Umgebung</Para>[<Para>"VoiceButlerProduction": Voice Call, Produktionsumgebung</Para>[<Para>"VoiceButlerSandbox": Voice Call, Sandbox-Umgebung</Para>[<Para>"CCSProduction": Conference Call, Produktionsumgebung</Para>[<Para>"CCSSandbox": Conference Call, Sandbox-Umgebung</Para>[<Para>"IPLocationProduction": IP Location, Produktionsumgebung</Para>[<Para>"IPLocationSandbox": IP Location, Sandbox-Umgebung</Para>]]]]]]]]]]</ul>
	 * @param string $value Die neue maximal verfügbare Quota pro Tag
	 * @return ChangeQuotaPoolResponse The result of the operation Quota setzen
	 */
	function changeQuotaPool($moduleID, $value) {
		if($moduleID == null) {
			throw new InvalidArgumentException("moduleID");
		}
		if($value == null) {
			throw new InvalidArgumentException("value");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-admin/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/userquota';
		$url_string .= '/'.urlencode($moduleID);

		
			
		$request_string = "";
			
			
		if($value != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'value='.urlencode($value);
		}
		

		$curl_session = curl_init($url_string.$request_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
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
			return QuotaDataFactory::createChangeQuotaPoolResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * Kontostandsabfrage durchführen
	 *
	 * @param string $accountID Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return GetAccountBalanceResponse The result of the operation Kontostandsabfrage durchführen
	 */
	function getAccountBalance($accountID = null) {
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-admin/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/account';
		$url_string .= '/balance';

		
			
		$request_array = array();
			
			
		if($accountID != null) {
			
				
			$request_array['accountID'] = $accountID;
		}
		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'Authorization: TAuth realm="https://odg.t-online.de",tauth_token="'.$this->token_getter->getToken()->getToken().'"',
				'User-Agent: Telekom PHP SDK/3.1.10',
				'Accept: application/json'
			),
			CURLOPT_POSTFIELDS => $request_array
		);
		
		if($this->additional_curl_options != null) {
			$curl_options = $curl_options + $this->additional_curl_options;
		}
		
		curl_setopt_array($curl_session, $curl_options);
		
		$curl_response = curl_exec($curl_session);
		
		if($curl_response !== false) {
			return QuotaDataFactory::createGetAccountBalanceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}