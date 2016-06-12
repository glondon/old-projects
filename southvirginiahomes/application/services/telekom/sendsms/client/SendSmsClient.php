<?php
/**
 * Service client for the Telekom service Send SMS.
 * @package sendSms
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/SendSmsDataFactory.php';

/**
 * Service client for the Telekom service Send SMS.
 * @package sendSms
 * @subpackage client
 */
class SendSmsClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 3;
	
	/**
	 * Constructs a service client for the Telekom service Send SMS using username and password or a security token getter.
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
	 * Versand einer SMS / Versand einer Flash-SMS
	 *
	 * @param string $number Die Empfängerrufnummern, durch Kommas (",") getrennt. (Siehe unterstützte Rufnummernformate)
	 * @param string $message Die an die Empfängerrufnummern zu sendende Mitteilung.
	 * @param string $originator Der Absender, so wie er beim Empfänger angezeigt wird.Die Angabe einer Rufnummer als Absender ist nur dann erlaubt, wenn diese vorher validiert wurde. (Siehe: Send SMS - Rufnummernvalidierung)
	 * @param string $flash Legt fest, ob die SMS als Flash-SMS gesendet werden soll:[true - SMS wird als Flash-SMS gesendet[anderer Wert - SMS wird als normale SMS gesendet]]
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return SendSmsResponse The result of the operation Versand einer SMS / Versand einer Flash-SMS
	 */
	function sendSms($number, $message, $originator = null, $flash = null, $account = null) {
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		if($message == null) {
			throw new InvalidArgumentException("message");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-sms/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/sms';

		
			
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

		if($flash != null) {
			
				
			$request_array['flash'] = $flash;
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
			return SendSmsDataFactory::createSendSmsResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}