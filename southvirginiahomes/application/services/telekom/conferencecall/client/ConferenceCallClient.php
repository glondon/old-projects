<?php
/**
 * Service client for the Telekom service Conference Call.
 * @package conferenceCall
 * @subpackage client
 */
 
/**
 *
 */
require_once dirname(__FILE__).'/../../common/client/TelekomServiceClient.php';
require_once dirname(__FILE__).'/../data/ConferenceCallDataFactory.php';

/**
 * Service client for the Telekom service Conference Call.
 * @package conferenceCall
 * @subpackage client
 */
class ConferenceCallClient extends TelekomServiceClient {
	/**
	 * The internal service number. It is used for computing the status constant.
	 */
	const SERVICE_NUMBER = 2;
	
	/**
	 * Constructs a service client for the Telekom service Conference Call using username and password or a security token getter.
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
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @return CommitConferenceResponse The result of the operation 
	 */
	function commitConference($conferenceID) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);

		

		$curl_session = curl_init($url_string);
		
		$curl_options = array(
			CURLOPT_CUSTOMREQUEST => 'POST',
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
			return ConferenceCallDataFactory::createCommitConferenceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param string $ownerID Ein eindeutiger Identifikator des Eigentümers der Konferenz. (z.B. "max.mustermann")Die Länge des Identifikators muss zwischen 3 und 39 Zeichen liegen.
	 * @param string $name Kurze Bezeichnung der Konferenz.
	 * @param string $description Statusnachricht
	 * @param string $notify Parameter wird derzeit nicht verwendet.
	 * @param string $timestamp Bei Nichtangabe dieses Parameters wird die Konferenz als Ad-Hoc Konferenz behandelt und nach dem Speichern im Conference Call Server (commitConference) sofort initiiert.Wird der Parameter hingegen angegeben, handelt es sich um eine geplante Konferenz. Sie wird zum angegebenen Zeitpunkt initiiert.Das Format von timestamp folgt der ISO8601 - Spezifikation.
	 * @param string $duration Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $joinConfirm Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @param string $recurring Serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return CreateConferenceResponse The result of the operation 
	 */
	function createConference($ownerID, $name, $description, $notify = null, $timestamp = null, $duration = null, $joinConfirm = null, $recurring = null, $account = null) {
		if($ownerID == null) {
			throw new InvalidArgumentException("ownerID");
		}
		if($name == null) {
			throw new InvalidArgumentException("name");
		}
		if($description == null) {
			throw new InvalidArgumentException("description");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';

		
			
		$request_array = array();
			
			
		if($ownerID != null) {
			
				
			$request_array['ownerID'] = $ownerID;
		}

		if($name != null) {
			
				
			$request_array['name'] = $name;
		}

		if($description != null) {
			
				
			$request_array['description'] = $description;
		}

		if($notify != null) {
			
				
			$request_array['notify'] = $notify;
		}

		if($timestamp != null) {
			
				
			$request_array['timestamp'] = $timestamp;
		}

		if($duration != null) {
			
				
			$request_array['duration'] = $duration;
		}

		if($joinConfirm != null) {
			
				
			$request_array['joinConfirm'] = $joinConfirm;
		}

		if($recurring != null) {
			
				
			$request_array['recurring'] = $recurring;
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
			return ConferenceCallDataFactory::createCreateConferenceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param string $ownerID Liste auf den Besitzer mit dem angegebenen eindeutigen Bezeichner beschränken (z.B. "max.mustermann")
	 * @param string $what Einschränkung der abzurufenden Liste:[0 - alle Konferenzen abrufen[1 - Nur Ad-Hoc Konferenzen abrufen[2 - Nur geplante Konferenzen abrufen[3 - Nur fehlgeschlagene oder noch nicht gespeicherte (commit) Konferenzen abrufen[4 - Nur noch nicht gespeicherte (commit) Konferenzen abrufen]]]]]
	 * @return GetConferenceListResponse The result of the operation 
	 */
	function getConferenceList($ownerID, $what = null) {
		if($ownerID == null) {
			throw new InvalidArgumentException("ownerID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferences';

		
			
		$request_string = "";
			
			
		if($ownerID != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'ownerID='.urlencode($ownerID);
		}

		if($what != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'what='.urlencode($what);
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
			return ConferenceCallDataFactory::createGetConferenceListResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param string $what Einschränkung der abzurufenden Informationen:[0 - alle Informationen abrufen[1 - Nur detail, acc und startTime abrufen[2 - Nur participants abrufen[3 - Nur schedule abrufen]]]]
	 * @return GetConferenceStatusResponse The result of the operation 
	 */
	function getConferenceStatus($conferenceID, $what = null) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);

		
			
		$request_string = "";
			
			
		if($what != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'what='.urlencode($what);
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
			return ConferenceCallDataFactory::createGetConferenceStatusResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param String $participantID Die Kennung des Teilnehmers
	 * @return GetParticipantStatusResponse The result of the operation 
	 */
	function getParticipantStatus($conferenceID, $participantID) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		if($participantID == null) {
			throw new InvalidArgumentException("participantID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantID);

		

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
			return ConferenceCallDataFactory::createGetParticipantStatusResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $isInitiator Gibt an, ob der Teilnehmer der Initiator der Konferenz ist:[true - Teilnehmer ist der Initiator[false (od. anderer Wert) - Teilnehmer ist nicht der Initiator]]
	 * @return NewParticipantResponse The result of the operation 
	 */
	function newParticipant($conferenceID, $firstName, $lastName, $number, $email, $isInitiator = null) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		if($firstName == null) {
			throw new InvalidArgumentException("firstName");
		}
		if($lastName == null) {
			throw new InvalidArgumentException("lastName");
		}
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		if($email == null) {
			throw new InvalidArgumentException("email");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);
		$url_string .= '/participants';

		
			
		$request_array = array();
			
			
		if($firstName != null) {
			
				
			$request_array['firstName'] = $firstName;
		}

		if($lastName != null) {
			
				
			$request_array['lastName'] = $lastName;
		}

		if($number != null) {
			
				
			$request_array['number'] = $number;
		}

		if($email != null) {
			
				
			$request_array['email'] = $email;
		}

		if($isInitiator != null) {
			
				
			$request_array['isInitiator'] = $isInitiator;
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
			return ConferenceCallDataFactory::createNewParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @return RemoveConferenceResponse The result of the operation 
	 */
	function removeConference($conferenceID) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);

		

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
			return ConferenceCallDataFactory::createRemoveConferenceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param String $participantID Die Kennung des Teilnehmers
	 * @return RemoveParticipantResponse The result of the operation 
	 */
	function removeParticipant($conferenceID, $participantID) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		if($participantID == null) {
			throw new InvalidArgumentException("participantID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantID);

		

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
			return ConferenceCallDataFactory::createRemoveParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param string $name Kurze Bezeichnung der Konferenz.
	 * @param string $description Statusnachricht
	 * @param string $duration Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $joinConfirm Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @param string $timestamp Geplanter Startzeitpunkt der Konferenz, formatiert nach ISO8601.
	 * @param string $notify Parameter wird derzeit nicht verwendet.
	 * @param string $recurring Serientyp:[0 - keine Wiederholung[1 - Wiederholung stündlich[2 - Wiederholung täglich[3 - Wiederholung wöchentlich[4 - Wiederholung monatlich]]]]]
	 * @param string $initiatorId Aktualisierung: Initiator der KonferenzDer Initiator kann nur vor der Speicherung der Konferenz (über commitConference) geändert werden.
	 * @param string $account Konto-ID des Unterkontos, über welches die Service-Nutzung abgerechnet werden soll. Wird der Parameter nicht angegeben, erfolgt die Abrechnung über das Hauptkonto.Siehe: Kontobasierte Servicenutzung
	 * @return UpdateConferenceResponse The result of the operation 
	 */
	function updateConference($conferenceID, $name = null, $description = null, $duration = null, $joinConfirm = null, $timestamp = null, $notify = null, $recurring = null, $initiatorId = null, $account = null) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);

		
			
		$request_string = "";
			
			
		if($name != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'name='.urlencode($name);
		}

		if($description != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'description='.urlencode($description);
		}

		if($duration != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'duration='.urlencode($duration);
		}

		if($joinConfirm != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'joinConfirm='.urlencode($joinConfirm);
		}

		if($timestamp != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'timestamp='.urlencode($timestamp);
		}

		if($notify != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'notify='.urlencode($notify);
		}

		if($recurring != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'recurring='.urlencode($recurring);
		}

		if($initiatorId != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'initiatorId='.urlencode($initiatorId);
		}

		if($account != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'account='.urlencode($account);
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
			return ConferenceCallDataFactory::createUpdateConferenceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @param String $participantID Die Kennung des Teilnehmers
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $isInitiator Gibt an, ob der Teilnehmer der Initiator der Konferenz ist:[true - Teilnehmer ist der Initiator[false (od. anderer Wert) - Teilnehmer ist nicht der Initiator]]
	 * @param string $action Durchzuführende Aktion:[0 - Stummschaltung beenden[1 - Teilnehmer Stummschalten[2 - Teilnehmer neu anwählen]]]
	 * @return UpdateParticipantResponse The result of the operation 
	 */
	function updateParticipant($conferenceID, $participantID, $firstName = null, $lastName = null, $number = null, $email = null, $isInitiator = null, $action = null) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		if($participantID == null) {
			throw new InvalidArgumentException("participantID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantID);

		
			
		$request_string = "";
			
			
		if($firstName != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'firstName='.urlencode($firstName);
		}

		if($lastName != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'lastName='.urlencode($lastName);
		}

		if($number != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'number='.urlencode($number);
		}

		if($email != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'email='.urlencode($email);
		}

		if($isInitiator != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'isInitiator='.urlencode($isInitiator);
		}

		if($action != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'action='.urlencode($action);
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
			return ConferenceCallDataFactory::createUpdateParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $conferenceID Die Kennung der Konferenz
	 * @return GetRunningConferenceResponse The result of the operation 
	 */
	function getRunningConference($conferenceID) {
		if($conferenceID == null) {
			throw new InvalidArgumentException("conferenceID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conference';
		$url_string .= '/'.urlencode($conferenceID);
		$url_string .= '/runstatus';

		

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
			return ConferenceCallDataFactory::createGetRunningConferenceResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param string $ownerID Ein eindeutiger Identifikator des Eigentümers der Konferenz-Vorlage. (z.B. "max.mustermann")Die Länge des Identifikators muss zwischen 3 und 39 Zeichen liegen.
	 * @param string $name Kurze Bezeichnung der Konferenz.
	 * @param string $description Statusnachricht
	 * @param string $duration Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $joinConfirm Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @return CreateConferenceTemplateResponse The result of the operation 
	 */
	function createConferenceTemplate($ownerID, $name, $description, $duration = null, $joinConfirm = null, $firstName = null, $lastName = null, $email = null, $number = null) {
		if($ownerID == null) {
			throw new InvalidArgumentException("ownerID");
		}
		if($name == null) {
			throw new InvalidArgumentException("name");
		}
		if($description == null) {
			throw new InvalidArgumentException("description");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';

		
			
		$request_array = array();
			
			
		if($ownerID != null) {
			
				
			$request_array['ownerID'] = $ownerID;
		}

		if($name != null) {
			
				
			$request_array['name'] = $name;
		}

		if($description != null) {
			
				
			$request_array['description'] = $description;
		}

		if($duration != null) {
			
				
			$request_array['duration'] = $duration;
		}

		if($joinConfirm != null) {
			
				
			$request_array['joinConfirm'] = $joinConfirm;
		}

		if($firstName != null) {
			
				
			$request_array['firstName'] = $firstName;
		}

		if($lastName != null) {
			
				
			$request_array['lastName'] = $lastName;
		}

		if($email != null) {
			
				
			$request_array['email'] = $email;
		}

		if($number != null) {
			
				
			$request_array['number'] = $number;
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
			return ConferenceCallDataFactory::createCreateConferenceTemplateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateID Die ID einer Konferenz-Vorlage
	 * @return GetConferenceTemplateResponse The result of the operation 
	 */
	function getConferenceTemplate($templateID) {
		if($templateID == null) {
			throw new InvalidArgumentException("templateID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateID);

		

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
			return ConferenceCallDataFactory::createGetConferenceTemplateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @param string $initiatorId Der Initiator der Konferenz-Vorlage.
	 * @param string $name Kurze Bezeichnung der Konferenz.
	 * @param string $description Statusnachricht
	 * @param string $duration Maximaldauer der Konferenz in Sekunden. Eine Konferenz beginnt mit der Betätigung der #-Taste durch den Initiator.Da die Abrechnung einer Konferenz bereits beim Verbindungsaufbau beginnt, können die Kosten einer Konferenz nicht durch Nutzung dieses Parameters begrenzt werden. Die Kosten einer Konferenz können jedoch durch den zeitgesteuerten Aufruf der Methode removeConference und daher der manuellen Trennung der Verbindung begrenzt werden.
	 * @param string $joinConfirm Bestätigung des Teilnehmers zur Teilnahme an der Konferenz erforderlich:[true (Standardwert)[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.], Teilnehmer muss die Teilnahme an der Konferenz durch Betätigung der #-Taste bestätigen.[false, Teilnehmer betritt die Konferenz durch Annahme des Anrufs vom Conference Call - Server.]]
	 * @return UpdateConferenceTemplateResponse The result of the operation 
	 */
	function updateConferenceTemplate($templateId, $initiatorId = null, $name = null, $description = null, $duration = null, $joinConfirm = null) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);

		
			
		$request_string = "";
			
			
		if($initiatorId != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'initiatorId='.urlencode($initiatorId);
		}

		if($name != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'name='.urlencode($name);
		}

		if($description != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'description='.urlencode($description);
		}

		if($duration != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'duration='.urlencode($duration);
		}

		if($joinConfirm != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'joinConfirm='.urlencode($joinConfirm);
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
			return ConferenceCallDataFactory::createUpdateConferenceTemplateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * Konferenzvorlage entfernen
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @return DeleteConferenceTemplateResponse The result of the operation Konferenzvorlage entfernen
	 */
	function deleteConferenceTemplate($templateId) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);

		

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
			return ConferenceCallDataFactory::createDeleteConferenceTemplateResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $ownerID Ein eindeutiger Identifikator des Eigentümers der Konferenz. (z.B. "<code>max.mustermann</code>") Die Länge des Identifikators muss zwischen 3 und 39 Zeichen liegen.
	 * @return GetConferenceTemplateListResponse The result of the operation 
	 */
	function getConferenceTemplateList($ownerID) {
		if($ownerID == null) {
			throw new InvalidArgumentException("ownerID");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplates';
		$url_string .= '/'.urlencode($ownerID);

		

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
			return ConferenceCallDataFactory::createGetConferenceTemplateListResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @param String $participantId Die Kennung des Teilnehmers
	 * @return GetConferenceTemplateParticipantResponse The result of the operation 
	 */
	function getConferenceTemplateParticipant($templateId, $participantId) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		if($participantId == null) {
			throw new InvalidArgumentException("participantId");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantId);

		

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
			return ConferenceCallDataFactory::createGetConferenceTemplateParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @param String $participantId Die Kennung des Teilnehmers
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $isInitiator Dieser Teilnehmer ist Initiator der Konferenz
	 * @return UpdateConferenceTemplateParticipantResponse The result of the operation 
	 */
	function updateConferenceTemplateParticipant($templateId, $participantId, $firstName = null, $lastName = null, $email = null, $number = null, $isInitiator = null) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		if($participantId == null) {
			throw new InvalidArgumentException("participantId");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantId);

		
			
		$request_string = "";
			
			
		if($firstName != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'firstName='.urlencode($firstName);
		}

		if($lastName != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'lastName='.urlencode($lastName);
		}

		if($email != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'email='.urlencode($email);
		}

		if($number != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'number='.urlencode($number);
		}

		if($isInitiator != null) {
			
				
			if(strlen($request_string) == 0) {
				$request_string .= "?";
			} else {
				$request_string .= "&";
			}
			$request_string .= 'isInitiator='.urlencode($isInitiator);
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
			return ConferenceCallDataFactory::createUpdateConferenceTemplateParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @param String $participantId Die Kennung des Teilnehmers
	 * @return RemoveConferenceTemplateParticipantResponse The result of the operation 
	 */
	function removeConferenceTemplateParticipant($templateId, $participantId) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		if($participantId == null) {
			throw new InvalidArgumentException("participantId");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);
		$url_string .= '/participants';
		$url_string .= '/'.urlencode($participantId);

		

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
			return ConferenceCallDataFactory::createRemoveConferenceTemplateParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
	
	/**
	 * 
	 *
	 * @param String $templateId Die ID einer Konferenz-Vorlage
	 * @param string $firstName Vorname des Teilnehmers.
	 * @param string $lastName Nachname des Teilnehmers.
	 * @param string $number Telefonnummer des Teilnehmers (siehe unterstützte Rufnummernformate).Dem Initiator wird bei der Anwahl eine Servicenummer signalisiert. Allen anderen Teilnehmern wird die Rufnummer des Initiators signalisiert.
	 * @param string $email E-Mailadresse des Teilnehmers
	 * @param string $isInitiator Dieser Teilnehmer ist Initiator der Konferenz
	 * @return AddConferenceTemplateParticipantResponse The result of the operation 
	 */
	function addConferenceTemplateParticipant($templateId, $firstName = null, $lastName = null, $number, $email = null, $isInitiator) {
		if($templateId == null) {
			throw new InvalidArgumentException("templateId");
		}
		if($number == null) {
			throw new InvalidArgumentException("number");
		}
		if($isInitiator == null) {
			throw new InvalidArgumentException("isInitiator");
		}
		
		$url_string = 'https://gateway.developer.telekom.com/p3gw-mod-odg-ccs/rest';
		
		$url_string .= '/'.$this->environment;
		$url_string .= '/conferencetemplate';
		$url_string .= '/'.urlencode($templateId);
		$url_string .= '/participants';

		
			
		$request_array = array();
			
			
		if($firstName != null) {
			
				
			$request_array['firstName'] = $firstName;
		}

		if($lastName != null) {
			
				
			$request_array['lastName'] = $lastName;
		}

		if($number != null) {
			
				
			$request_array['number'] = $number;
		}

		if($email != null) {
			
				
			$request_array['email'] = $email;
		}

		if($isInitiator != null) {
			
				
			$request_array['isInitiator'] = $isInitiator;
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
			return ConferenceCallDataFactory::createAddConferenceTemplateParticipantResponse($curl_response);
		} else {
			throw new Exception(curl_error($curl_session));
		}
	}
}