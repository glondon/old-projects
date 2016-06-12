<?php
/**
 * Service client for the Telekom service Send MMS.
 * @package sendMms
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/SendMmsDataFactory.php';

/**
 * Service client for the Telekom service Send MMS.
 * @package sendMms
 * @subpackage client
 */
class SendMmsClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 7;
	
	/**
	 * Constructs a service client for the Telekom service Send MMS using username and password or a security token getter.
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
	 * Versand einer MMS
	 *
	 * @param string $number Die Empfängerrufnummern, durch Kommas (",") getrennt. (Siehe unterstützte Rufnummernformate)
	 * @param string $subject Die Betreffzeile.
	 * @param string $message Eine Textmeldung.Mindestens eines der Felder message und attachment muss vorhanden sein.
	 * @param string $attachment Zu sendender Anhang.Der Versand beliebiger Anhänge (Bild, Ton, Video, Text) wird unterstützt. Der Datentyp des Anhangs muss über contentType angegeben werden. Darüber hinaus muss der Dateiname über filename angegeben werden.Mindestens eines der Felder message und attachment muss vorhanden sein.
	 * @param string $filename Dateiname des Anhangs, falls ein Anhang gesendet werden soll.
	 * @param string $contentType Dateityp des Anhangs, falls ein Anhang gesendet werden soll.Folgende Typen werden unterstützt:[text/plain[audio/x-wav[audio/x-midi[audio/x-mpeg[audio/x-pn-realaudio[image/gif[image/jpeg[image/png[image/tiff[image/vnd.wap.wbmp[video/3gpp]]]]]]]]]]]
	 * @param string $originator Der Absender, so wie er beim Empfänger angezeigt wird.Erlaubt sind derzeit keine nur validierte Rufnummer oder keine AngabeDie Angabe einer Rufnummer als Absender ist nur dann erlaubt, wenn diese vorher validiert wurde. (Siehe: Send SMS - Rufnummernvalidierung)
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return SendMmsResponse The result of the operation Versand einer MMS
	 */
	function sendMms($number, $subject, $message = null, $attachment = null, $filename = null, $contentType = null, $originator = null, $account = null) {
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		if($subject == null) {
			throw new InvalidArgumentException("subject");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-mms/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/sendMMS';

		
			
		$request_array = array();
			
			
		if($number != null) {
			
				
			$request_array['number'] = $number;
		}

		if($subject != null) {
			
				
			$request_array['subject'] = $subject;
		}

		if($message != null) {
			
				
			$request_array['message'] = $message;
		}

		if($attachment != null) {
				
			if(substr($attachment, 0, 1) == "@") {
				$request_array['attachment'] = base64_encode(file_get_contents(substr($attachment,1)));
			} else {
				$request_array['attachment'] = base64_encode($attachment);
			}
		}

		if($filename != null) {
			
				
			$request_array['filename'] = $filename;
		}

		if($contentType != null) {
			
				
			$request_array['contentType'] = $contentType;
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
			return SendMmsDataFactory::createSendMmsResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}