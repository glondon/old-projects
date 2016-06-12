<?php
/**
 * Service client for the Telekom service Send SMS - Phone number validation.
 * @package smsValidation
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/SmsValidationDataFactory.php';

/**
 * Service client for the Telekom service Send SMS - Phone number validation.
 * @package smsValidation
 * @subpackage client
 */
class SmsValidationClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 4;
	
	/**
	 * Constructs a service client for the Telekom service Send SMS - Rufnummernvalidierung using username and password or a security token getter.
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
	 * Versand einer Validierungs-SMS
	 *
	 * @param string $number Die zu validierende Rufnummer.
	 * @param string $message Die begleitende Nachricht, die mit dem Validierungs-Code gesendet werden soll.Diese Nachricht muss zwei Platzhalter enthalten:[#key#[#validUntil#]]Eine Beispielmitteilung ist: "Das Keyword zur Validierung Ihrer Rufnummer bei example.com lautet #key# und ist #validUntil# gültig."Falls die Platzhalter nicht vorhanden sind, wird folgende Standardnachricht gesendet: "Ihr Validierungsschluessel ist #key#. Er ist gueltig bis #validUntil#."
	 * @param string $originator Der Absender, so wie er beim Empfänger angezeigt wird.Der Absender kann aus maximal 11 Zeichen bestehen. Erlaubte Zeichen sind Buchstaben und Ziffern. Die alleinige Verwendung von Ziffern ist nicht erlaubt.
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return SendValidationKeywordResponse The result of the operation Versand einer Validierungs-SMS
	 */
	function sendValidationKeyword($number, $message = null, $originator = null, $account = null) {
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-sms-validation/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/send';

		
			
		$request_array = array();
			
			
		if($number != null) {
			
				
			$request_array['number'] = $number;
		}

		if($message != null) {
			
				
			$request_array['message'] = $message;
		}

		if($originator != null) {
			
				
			$request_array['originator'] = $originator;
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
			return SmsValidationDataFactory::createSendValidationKeywordResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $number The phone number to be validated.
	 * @param string $key Der Validierungs-Code, der an die zu validierende Rufnummer geschickt wurde.Das Format des Codes ist alphanumerisch und sechsstellig, beispielsweise: A3B5DGDer Code wird nach der dritten Fehleingabe ungültig und die Rufnummer 10 Minuten lang für eine erneute Validierung gesperrt.Die Sperrung kann aufgehoben werden, wenn der Validierungsvorgang über die Methode invalidate abgebrochen und über sendValidationKeyword erneut gestartet wird.
	 * @return ValidateResponse The result of the operation 
	 */
	function validate($number, $key) {
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		if($key == null) {
			throw new InvalidArgumentException("key");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-sms-validation/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/validatednumbers';
		$url_string .= '/'.urlencode($number);

		
			
		$request_array = array();
			
			
		if($key != null) {
			
				
			$request_array['key'] = $key;
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
			return SmsValidationDataFactory::createValidateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $number The phone number whose validation should be withdrawn or for which a validation process should be terminated.
	 * @return InvalidateResponse The result of the operation 
	 */
	function invalidate($number) {
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-sms-validation/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/validatednumbers';
		$url_string .= '/'.urlencode($number);

		

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
			return SmsValidationDataFactory::createInvalidateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @return GetValidatedNumbersResponse The result of the operation 
	 */
	function getValidatedNumbers() {
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-sms-validation/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/validatednumbers';

		

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
			return SmsValidationDataFactory::createGetValidatedNumbersResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}