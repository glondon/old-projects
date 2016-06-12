<?php
/**
 * Service client for the Telekom service Voice Call.
 * @package voiceCall
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/VoiceCallDataFactory.php';

/**
 * Service client for the Telekom service Voice Call.
 * @package voiceCall
 * @subpackage client
 */
class VoiceCallClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 1;
	
	/**
	 * Constructs a service client for the Telekom service Voice Call using username and password or a security token getter.
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
	 * Aufbau einer sequenziellen Sprachverbindung
	 *
	 * @param string $anumber Rufnummer des ersten Teilnehmers (Siehe Einschränkungen und unterstützte Rufnummernformate)
	 * @param string $bnumber Rufnummer des zweiten Teilnehmers (Siehe Einschränkungen und unterstützte Rufnummernformate)
	 * @param string $expiration Zeitdauer in Sekunden nachdem der Voice Call - Service ein Gespräch ohne Erhalt einer callStatus Anfrage trennt.Ein Wert von 0 bedeutet, dass keine callStatus Anfrage erfolgen muss, um die Verbindung aufrecht zu erhalten. (Siehe Funktionsweise)
	 * @param string $maxduration Maximale Zeitdauer der Verbindung in Sekunden. Zusätzlich gilt das Systemlimit.
	 * @param string $maxwait Die Zeit in Sekunden, nach welcher die nächste Rufnummer in der Liste der B-Rufnummern angerufen wird.
	 * @param string $aprivacy Rufnummernunterdrückung beim ersten Teilnehmer.Deaktiviert die Signalisierung der Open Development System-Rufnummer am Endgerät des ersten Teilnehmers.
	 * @param string $bprivacy Rufnummernunterdrückung beim zweiten Teilnehmer.Deaktiviert die Signalisierung der Rufnummer des ersten Teilnehmers am Gerät des zweiten Teilnehmers.
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return NewCallResponse The result of the operation Aufbau einer sequenziellen Sprachverbindung
	 */
	function newCall($anumber, $bnumber, $expiration = null, $maxduration = null, $maxwait = null, $aprivacy = null, $bprivacy = null, $account = null) {
		if($anumber == null) {
			throw new InvalidArgumentException("anumber");
		}
		if($bnumber == null) {
			throw new InvalidArgumentException("bnumber");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-voicebutler/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/call';

		
			
		$request_array = array();
			
			
		if($anumber != null) {
			
				
			$request_array['anumber'] = $anumber;
		}

		if($bnumber != null) {
			
				
			$request_array['bnumber'] = $bnumber;
		}

		if($expiration != null) {
			
				
			$request_array['expiration'] = $expiration;
		}

		if($maxduration != null) {
			
				
			$request_array['maxduration'] = $maxduration;
		}

		if($maxwait != null) {
			
				
			$request_array['maxwait'] = $maxwait;
		}

		if($aprivacy != null) {
			
				
			$request_array['aprivacy'] = $aprivacy;
		}

		if($bprivacy != null) {
			
				
			$request_array['bprivacy'] = $bprivacy;
		}

		if($account != null) {
			
				
			$request_array['account'] = $account;
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
			return VoiceCallDataFactory::createNewCallResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $sessionID Die Kennung des Voice Calls
	 * @param string $keepAlive Festlegung des Keepalive-Mechanismus (Siehe Funktionsweise)[true = Mechanismus wird verwendet, Verbindung um expiration verlängern[false = Mechanismus wird nicht verwendet]]
	 * @return CallStatusResponse The result of the operation 
	 */
	function callStatus($sessionID, $keepAlive = null) {
		if($sessionID == null) {
			throw new InvalidArgumentException("sessionID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-voicebutler/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/call';
		$url_string .= '/'.urlencode($sessionID);

		
			
		$request_string = "";
			
			
		if($keepAlive != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'keepAlive='.urlencode($keepAlive);
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
			return VoiceCallDataFactory::createCallStatusResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * Beendigung eines Anrufs
	 *
	 * @param String $sessionID Die Kennung des Voice Calls
	 * @return TearDownResponse The result of the operation Beendigung eines Anrufs
	 */
	function tearDown($sessionID) {
		if($sessionID == null) {
			throw new InvalidArgumentException("sessionID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-voicebutler/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/call';
		$url_string .= '/'.urlencode($sessionID);

		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'DELETE',
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
			return VoiceCallDataFactory::createTearDownResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}