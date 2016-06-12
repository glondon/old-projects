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
 * Factory, which creates Telekom data objects of the service Conference Call from JSON response messages.
 * @package conferenceCall
 * @subpackage data
 */

/**
 *
 */
require_once(dirname(__FILE__).'/../../common/data/TelekomServiceStatusResponse.php');
require_once(dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php');
require_once(dirname(__FILE__).'/../../conferencecall/data/ConferenceCallStatusDescriptions.php');

/**
 * Factory, which creates Telekom data objects of the service Conference Call from JSON response messages.
 * @package conferenceCall
 * @subpackage data
 */
class ConferenceCallDataFactory {
	/**
	 * Creates a Telekom data object of the type CommitConferenceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return CommitConferenceResponse
	 * 	A Telekom data object
	 */
	static function createCommitConferenceResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/CommitConferenceResponse.php');
		return new CommitConferenceResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type CreateConferenceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return CreateConferenceResponse
	 * 	A Telekom data object
	 */
	static function createCreateConferenceResponse($o) {
		$json = json_decode($o, true);
		
		$conferenceId = null;
	
		if(array_key_exists('conferenceId', $json)) {
			$conferenceId = $json['conferenceId'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/CreateConferenceResponse.php');
		return new CreateConferenceResponse($responseStatus, $conferenceId);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceListResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetConferenceListResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceListResponse($o) {
		$json = json_decode($o, true);
		
		$conferences = array();
		$conferences_array = null;
		
		if(array_key_exists('conferences', $json)) {
			$conferences_array = $json['conferences'];
			
			foreach($conferences_array as $conferences_single) {
				array_push($conferences, self::createGetConferenceListConferencesResponse($conferences_single));
			}
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetConferenceListResponse.php');
		return new GetConferenceListResponse($responseStatus, $conferences);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetConferenceStatusResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusResponse($o) {
		$json = json_decode($o, true);
		
		$conference = null;
	
		if(array_key_exists('conference', $json)) {
			$conference = self::createGetConferenceStatusConferenceResponse($json['conference']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetConferenceStatusResponse.php');
		return new GetConferenceStatusResponse($responseStatus, $conference);
	}

	/**
	 * Creates a Telekom data object of the type GetParticipantStatusResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetParticipantStatusResponse
	 * 	A Telekom data object
	 */
	static function createGetParticipantStatusResponse($o) {
		$json = json_decode($o, true);
		
		$participantStatus = null;
	
		if(array_key_exists('participantStatus', $json)) {
			$participantStatus = self::createGetParticipantStatusParticipantStatusResponse($json['participantStatus']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetParticipantStatusResponse.php');
		return new GetParticipantStatusResponse($responseStatus, $participantStatus);
	}

	/**
	 * Creates a Telekom data object of the type NewParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return NewParticipantResponse
	 * 	A Telekom data object
	 */
	static function createNewParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$participantID = null;
	
		if(array_key_exists('participantID', $json)) {
			$participantID = $json['participantID'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/NewParticipantResponse.php');
		return new NewParticipantResponse($responseStatus, $participantID);
	}

	/**
	 * Creates a Telekom data object of the type RemoveConferenceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return RemoveConferenceResponse
	 * 	A Telekom data object
	 */
	static function createRemoveConferenceResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/RemoveConferenceResponse.php');
		return new RemoveConferenceResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type RemoveParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return RemoveParticipantResponse
	 * 	A Telekom data object
	 */
	static function createRemoveParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/RemoveParticipantResponse.php');
		return new RemoveParticipantResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type UpdateConferenceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return UpdateConferenceResponse
	 * 	A Telekom data object
	 */
	static function createUpdateConferenceResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/UpdateConferenceResponse.php');
		return new UpdateConferenceResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type UpdateParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return UpdateParticipantResponse
	 * 	A Telekom data object
	 */
	static function createUpdateParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/UpdateParticipantResponse.php');
		return new UpdateParticipantResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type GetRunningConferenceResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetRunningConferenceResponse
	 * 	A Telekom data object
	 */
	static function createGetRunningConferenceResponse($o) {
		$json = json_decode($o, true);
		
		$conferenceId = null;
	
		if(array_key_exists('conferenceId', $json)) {
			$conferenceId = $json['conferenceId'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetRunningConferenceResponse.php');
		return new GetRunningConferenceResponse($responseStatus, $conferenceId);
	}

	/**
	 * Creates a Telekom data object of the type CreateConferenceTemplateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return CreateConferenceTemplateResponse
	 * 	A Telekom data object
	 */
	static function createCreateConferenceTemplateResponse($o) {
		$json = json_decode($o, true);
		
		$templateId = null;
	
		if(array_key_exists('templateId', $json)) {
			$templateId = $json['templateId'];
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/CreateConferenceTemplateResponse.php');
		return new CreateConferenceTemplateResponse($responseStatus, $templateId);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetConferenceTemplateResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateResponse($o) {
		$json = json_decode($o, true);
		
		$conference = null;
	
		if(array_key_exists('conference', $json)) {
			$conference = self::createGetConferenceTemplateConferenceResponse($json['conference']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateResponse.php');
		return new GetConferenceTemplateResponse($responseStatus, $conference);
	}

	/**
	 * Creates a Telekom data object of the type UpdateConferenceTemplateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return UpdateConferenceTemplateResponse
	 * 	A Telekom data object
	 */
	static function createUpdateConferenceTemplateResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/UpdateConferenceTemplateResponse.php');
		return new UpdateConferenceTemplateResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type DeleteConferenceTemplateResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return DeleteConferenceTemplateResponse
	 * 	A Telekom data object
	 */
	static function createDeleteConferenceTemplateResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/DeleteConferenceTemplateResponse.php');
		return new DeleteConferenceTemplateResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateListResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetConferenceTemplateListResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateListResponse($o) {
		$json = json_decode($o, true);
		
		$conferenceTemplateIds = array();
		$conferenceTemplateIds_array = null;
		
		if(array_key_exists('conferenceTemplateIds', $json)) {
			$conferenceTemplateIds_array = $json['conferenceTemplateIds'];
			
			foreach($conferenceTemplateIds_array as $conferenceTemplateIds_single) {
				array_push($conferenceTemplateIds, self::createGetConferenceTemplateListConferenceTemplateIdsResponse($conferenceTemplateIds_single));
			}
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateListResponse.php');
		return new GetConferenceTemplateListResponse($responseStatus, $conferenceTemplateIds);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return GetConferenceTemplateParticipantResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$participant = null;
	
		if(array_key_exists('participant', $json)) {
			$participant = self::createGetConferenceTemplateParticipantParticipantResponse($json['participant']);
		}
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateParticipantResponse.php');
		return new GetConferenceTemplateParticipantResponse($responseStatus, $participant);
	}

	/**
	 * Creates a Telekom data object of the type UpdateConferenceTemplateParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return UpdateConferenceTemplateParticipantResponse
	 * 	A Telekom data object
	 */
	static function createUpdateConferenceTemplateParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/UpdateConferenceTemplateParticipantResponse.php');
		return new UpdateConferenceTemplateParticipantResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type RemoveConferenceTemplateParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return RemoveConferenceTemplateParticipantResponse
	 * 	A Telekom data object
	 */
	static function createRemoveConferenceTemplateParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/RemoveConferenceTemplateParticipantResponse.php');
		return new RemoveConferenceTemplateParticipantResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type AddConferenceTemplateParticipantResponse from the JSON response message.
	 * @param String $o
	 * 	The JSON response message
	 * @return AddConferenceTemplateParticipantResponse
	 * 	A Telekom data object
	 */
	static function createAddConferenceTemplateParticipantResponse($o) {
		$json = json_decode($o, true);
		
		$responseStatus = new TelekomServiceStatusResponse($json['status']['statusCode'], self::getStatusConstant($json['status']['statusCode']), $json['status']['statusMessage'], self::getDescription(self::getStatusConstant($json['status']['statusCode']), "german"), self::getDescription(self::getStatusConstant($json['status']['statusCode']), "english"));
		
		require_once(dirname(__FILE__).'/AddConferenceTemplateParticipantResponse.php');
		return new AddConferenceTemplateParticipantResponse($responseStatus);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceListConferencesResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceListConferencesResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceListConferencesResponse($json) {
		$conferenceID = null;
	
		if(array_key_exists('conferenceID', $json)) {
			$conferenceID = $json['conferenceID'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceListConferencesResponse.php');
		return new GetConferenceListConferencesResponse($conferenceID);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusConferenceResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceStatusConferenceResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusConferenceResponse($json) {
		$starttime = null;
	
		if(array_key_exists('starttime', $json)) {
			$starttime = $json['starttime'];
		}
		
		$detail = null;
	
		if(array_key_exists('detail', $json)) {
			$detail = self::createGetConferenceStatusConferenceDetailResponse($json['detail']);
		}
		
		$schedule = null;
	
		if(array_key_exists('schedule', $json)) {
			$schedule = self::createGetConferenceStatusConferenceScheduleResponse($json['schedule']);
		}
		
		$account = null;
	
		if(array_key_exists('account', $json)) {
			$account = $json['account'];
		}
		
		$participants = array();
		$participants_array = null;
		
		if(array_key_exists('participants', $json)) {
			$participants_array = $json['participants'];
			
			foreach($participants_array as $participants_single) {
				array_push($participants, self::createGetConferenceStatusConferenceParticipantsResponse($participants_single));
			}
		}
		
		require_once(dirname(__FILE__).'/GetConferenceStatusConferenceResponse.php');
		return new GetConferenceStatusConferenceResponse($starttime, $detail, $schedule, $account, $participants);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusConferenceDetailResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceStatusConferenceDetailResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusConferenceDetailResponse($json) {
		$name = null;
	
		if(array_key_exists('name', $json)) {
			$name = $json['name'];
		}
		
		$description = null;
	
		if(array_key_exists('description', $json)) {
			$description = $json['description'];
		}
		
		$duration = null;
	
		if(array_key_exists('duration', $json)) {
			$duration = $json['duration'];
		}
		
		$joinConfirm = null;
	
		if(array_key_exists('joinConfirm', $json)) {
			$joinConfirm = $json['joinConfirm'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceStatusConferenceDetailResponse.php');
		return new GetConferenceStatusConferenceDetailResponse($name, $description, $duration, $joinConfirm);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusConferenceScheduleResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceStatusConferenceScheduleResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusConferenceScheduleResponse($json) {
		$recurring = null;
	
		if(array_key_exists('recurring', $json)) {
			$recurring = $json['recurring'];
		}
		
		$notify = null;
	
		if(array_key_exists('notify', $json)) {
			$notify = $json['notify'];
		}
		
		$timestamp = null;
	
		if(array_key_exists('timestamp', $json)) {
			$timestamp = $json['timestamp'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceStatusConferenceScheduleResponse.php');
		return new GetConferenceStatusConferenceScheduleResponse($recurring, $notify, $timestamp);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusConferenceParticipantsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceStatusConferenceParticipantsResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusConferenceParticipantsResponse($json) {
		$participantId = null;
	
		if(array_key_exists('participantId', $json)) {
			$participantId = $json['participantId'];
		}
		
		$firstName = null;
	
		if(array_key_exists('firstName', $json)) {
			$firstName = $json['firstName'];
		}
		
		$lastName = null;
	
		if(array_key_exists('lastName', $json)) {
			$lastName = $json['lastName'];
		}
		
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$email = null;
	
		if(array_key_exists('email', $json)) {
			$email = $json['email'];
		}
		
		$isInitiator = null;
	
		if(array_key_exists('isInitiator', $json)) {
			$isInitiator = $json['isInitiator'];
		}
		
		$status = null;
	
		if(array_key_exists('status', $json)) {
			$status = self::createGetConferenceStatusConferenceParticipantsStatusResponse($json['status']);
		}
		
		require_once(dirname(__FILE__).'/GetConferenceStatusConferenceParticipantsResponse.php');
		return new GetConferenceStatusConferenceParticipantsResponse($participantId, $firstName, $lastName, $number, $email, $isInitiator, $status);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceStatusConferenceParticipantsStatusResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceStatusConferenceParticipantsStatusResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceStatusConferenceParticipantsStatusResponse($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$last_reason = null;
	
		if(array_key_exists('last_reason', $json)) {
			$last_reason = $json['last_reason'];
		}
		
		$status = null;
	
		if(array_key_exists('status', $json)) {
			$status = $json['status'];
		}
		
		$muted = null;
	
		if(array_key_exists('muted', $json)) {
			$muted = $json['muted'];
		}
		
		$last_access_time = null;
	
		if(array_key_exists('last_access_time', $json)) {
			$last_access_time = $json['last_access_time'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceStatusConferenceParticipantsStatusResponse.php');
		return new GetConferenceStatusConferenceParticipantsStatusResponse($number, $last_reason, $status, $muted, $last_access_time);
	}

	/**
	 * Creates a Telekom data object of the type GetParticipantStatusParticipantStatusResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetParticipantStatusParticipantStatusResponse
	 * 	A Telekom data object
	 */
	static function createGetParticipantStatusParticipantStatusResponse($json) {
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$last_reason = null;
	
		if(array_key_exists('last_reason', $json)) {
			$last_reason = $json['last_reason'];
		}
		
		$status = null;
	
		if(array_key_exists('status', $json)) {
			$status = $json['status'];
		}
		
		$muted = null;
	
		if(array_key_exists('muted', $json)) {
			$muted = $json['muted'];
		}
		
		$last_access_time = null;
	
		if(array_key_exists('last_access_time', $json)) {
			$last_access_time = $json['last_access_time'];
		}
		
		require_once(dirname(__FILE__).'/GetParticipantStatusParticipantStatusResponse.php');
		return new GetParticipantStatusParticipantStatusResponse($number, $last_reason, $status, $muted, $last_access_time);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateConferenceResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceTemplateConferenceResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateConferenceResponse($json) {
		$name = null;
	
		if(array_key_exists('name', $json)) {
			$name = $json['name'];
		}
		
		$description = null;
	
		if(array_key_exists('description', $json)) {
			$description = $json['description'];
		}
		
		$duration = null;
	
		if(array_key_exists('duration', $json)) {
			$duration = $json['duration'];
		}
		
		$joinConfirm = null;
	
		if(array_key_exists('joinConfirm', $json)) {
			$joinConfirm = $json['joinConfirm'];
		}
		
		$participants = null;
	
		if(array_key_exists('participants', $json)) {
			$participants = self::createGetConferenceTemplateConferenceParticipantsResponse($json['participants']);
		}
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateConferenceResponse.php');
		return new GetConferenceTemplateConferenceResponse($name, $description, $duration, $joinConfirm, $participants);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateConferenceParticipantsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceTemplateConferenceParticipantsResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateConferenceParticipantsResponse($json) {
		$participantId = null;
	
		if(array_key_exists('participantId', $json)) {
			$participantId = $json['participantId'];
		}
		
		$firstName = null;
	
		if(array_key_exists('firstName', $json)) {
			$firstName = $json['firstName'];
		}
		
		$lastName = null;
	
		if(array_key_exists('lastName', $json)) {
			$lastName = $json['lastName'];
		}
		
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$email = null;
	
		if(array_key_exists('email', $json)) {
			$email = $json['email'];
		}
		
		$isInitiator = null;
	
		if(array_key_exists('isInitiator', $json)) {
			$isInitiator = $json['isInitiator'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateConferenceParticipantsResponse.php');
		return new GetConferenceTemplateConferenceParticipantsResponse($participantId, $firstName, $lastName, $number, $email, $isInitiator);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateListConferenceTemplateIdsResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceTemplateListConferenceTemplateIdsResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateListConferenceTemplateIdsResponse($json) {
		$conferenceTemplateId = null;
	
		if(array_key_exists('conferenceTemplateId', $json)) {
			$conferenceTemplateId = $json['conferenceTemplateId'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateListConferenceTemplateIdsResponse.php');
		return new GetConferenceTemplateListConferenceTemplateIdsResponse($conferenceTemplateId);
	}

	/**
	 * Creates a Telekom data object of the type GetConferenceTemplateParticipantParticipantResponse from the JSON response message.
	 * @param array $json
	 * 	The JSON response array
	 * @return GetConferenceTemplateParticipantParticipantResponse
	 * 	A Telekom data object
	 */
	static function createGetConferenceTemplateParticipantParticipantResponse($json) {
		$firstName = null;
	
		if(array_key_exists('firstName', $json)) {
			$firstName = $json['firstName'];
		}
		
		$lastName = null;
	
		if(array_key_exists('lastName', $json)) {
			$lastName = $json['lastName'];
		}
		
		$number = null;
	
		if(array_key_exists('number', $json)) {
			$number = $json['number'];
		}
		
		$email = null;
	
		if(array_key_exists('email', $json)) {
			$email = $json['email'];
		}
		
		$isInitiator = null;
	
		if(array_key_exists('isInitiator', $json)) {
			$isInitiator = $json['isInitiator'];
		}
		
		require_once(dirname(__FILE__).'/GetConferenceTemplateParticipantParticipantResponse.php');
		return new GetConferenceTemplateParticipantParticipantResponse($firstName, $lastName, $number, $email, $isInitiator);
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
				return ConferenceCallStatusDescriptions::SUCCESS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::SUCCESS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INTERNAL_ERROR ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INTERNAL_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ENVIRONMENT_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::ENVIRONMENT_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::PERMISSIONS_MISSING ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::PERMISSIONS_MISSING_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCEPT_HEADER_UNKNOWN ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::ACCEPT_HEADER_UNKNOWN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::QUOTAS_EXCEEDED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::QUOTAS_EXCEEDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_EXPIRED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::TOKEN_EXPIRED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::ACCOUNT_MISMATCH ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::ACCOUNT_MISMATCH_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::INSUFFICIENT_CREDITS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INSUFFICIENT_CREDITS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == TelekomStatusConstants::TOKEN_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::TOKEN_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::TOKEN_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::INITIATOR_BUSY ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INITIATOR_BUSY_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INITIATOR_BUSY_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::INITIATOR_UNAVAILABLE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INITIATOR_UNAVAILABLE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INITIATOR_UNAVAILABLE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::UNKNOWN_ERROR ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::UNKNOWN_ERROR_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::UNKNOWN_ERROR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_ALREADY_CLOSED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_CLOSED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_CLOSED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_ALREADY_FINISHED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_FINISHED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_FINISHED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_ALREADY_DELETED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_DELETED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_DELETED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::WRONG_PARTICIPANT_FLAGS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::WRONG_PARTICIPANT_FLAGS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::WRONG_PARTICIPANT_FLAGS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_PARTICIPANT_GIVEN ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANT_GIVEN_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANT_GIVEN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_CONFERENCE_GIVEN ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_CONFERENCE_GIVEN_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_CONFERENCE_GIVEN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_TEMPLATE_GIVEN ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_TEMPLATE_GIVEN_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_TEMPLATE_GIVEN_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::WRONG_WHAT_VALUE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::WRONG_WHAT_VALUE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::WRONG_WHAT_VALUE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::WRONG_ACTION_VALUE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::WRONG_ACTION_VALUE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::WRONG_ACTION_VALUE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::DURATION_TOO_BIG ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::DURATION_TOO_BIG_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::DURATION_TOO_BIG_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_PARTICIPANTS_IN_CONFERENCE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANTS_IN_CONFERENCE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANTS_IN_CONFERENCE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_PARTICIPANTS_IN_TEMPLATE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANTS_IN_TEMPLATE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_PARTICIPANTS_IN_TEMPLATE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_INITIATOR_IN_CONFERENCE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_INITIATOR_IN_CONFERENCE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_INITIATOR_IN_CONFERENCE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::TOO_MANY_PARTICIPANTS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::TOO_MANY_PARTICIPANTS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::TOO_MANY_PARTICIPANTS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NUMBER_NOT_ALLOWED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CANNOT_CHANGE_NUMBER ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CANNOT_CHANGE_NUMBER_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CANNOT_CHANGE_NUMBER_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::INITIATOR_ALREADY_EXISTS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INITIATOR_ALREADY_EXISTS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INITIATOR_ALREADY_EXISTS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::INVALID_NUMBER_FORMAT ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INVALID_NUMBER_FORMAT_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INVALID_NUMBER_FORMAT_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CANNOT_APPLY_ACTIONS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CANNOT_APPLY_ACTIONS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CANNOT_APPLY_ACTIONS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NUMBER_BLOCKED_BY_PROVIDER ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NUMBER_BLOCKED_BY_PROVIDER_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NUMBER_BLOCKED_BY_PROVIDER_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NUMBER_BLOCKED_BY_USER ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NUMBER_BLOCKED_BY_USER_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NUMBER_BLOCKED_BY_USER_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::SCHEDULE_DATE_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::SCHEDULE_DATE_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::SCHEDULE_DATE_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::SCHEDULE_TIME_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::SCHEDULE_TIME_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::SCHEDULE_TIME_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_STARTTIME_IN_THE_PAST ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_STARTTIME_IN_THE_PAST_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_STARTTIME_IN_THE_PAST_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::DURATION_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::DURATION_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::DURATION_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::RECURRING_OR_NOTIFICATION_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::RECURRING_OR_NOTIFICATION_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::RECURRING_OR_NOTIFICATION_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_START_TOO_MUCH_AHEAD ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_START_TOO_MUCH_AHEAD_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_START_TOO_MUCH_AHEAD_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::NO_STATUS_FOR_UNCOMMITTED_CONFERENCE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::NO_STATUS_FOR_UNCOMMITTED_CONFERENCE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::NO_STATUS_FOR_UNCOMMITTED_CONFERENCE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::PARTICIPANT_STILL_IN_REDIAL_LATER ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::PARTICIPANT_STILL_IN_REDIAL_LATER_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::PARTICIPANT_STILL_IN_REDIAL_LATER_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CANNOT_CHANGE_INITIATOR ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CANNOT_CHANGE_INITIATOR_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CANNOT_CHANGE_INITIATOR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CANNOT_DELETE_INITIATOR ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CANNOT_DELETE_INITIATOR_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CANNOT_DELETE_INITIATOR_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::COULD_NOT_CONVERT_SCHEDULED_CONFERENCE ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::COULD_NOT_CONVERT_SCHEDULED_CONFERENCE_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::COULD_NOT_CONVERT_SCHEDULED_CONFERENCE_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::COULD_NOT_GET_PARTICIPANT_STATUS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::COULD_NOT_GET_PARTICIPANT_STATUS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::COULD_NOT_GET_PARTICIPANT_STATUS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_ALREADY_EXISTS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_EXISTS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_ALREADY_EXISTS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::CONFERENCE_DOES_NOT_EXISTS ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::CONFERENCE_DOES_NOT_EXISTS_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::CONFERENCE_DOES_NOT_EXISTS_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::PARTICIPANT_DOES_NOT_EXIST ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::PARTICIPANT_DOES_NOT_EXIST_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::PARTICIPANT_DOES_NOT_EXIST_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::INITIATOR_NUMBER_INVALID ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::INITIATOR_NUMBER_INVALID_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::INITIATOR_NUMBER_INVALID_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::PARTICIPANT_ALREADY_ADDED ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::PARTICIPANT_ALREADY_ADDED_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::PARTICIPANT_ALREADY_ADDED_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::TEMPLATE_DOES_NOT_EXIST ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::TEMPLATE_DOES_NOT_EXIST_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::TEMPLATE_DOES_NOT_EXIST_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::OWNER_ID_TOO_SHORT ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::OWNER_ID_TOO_SHORT_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::OWNER_ID_TOO_SHORT_DESCRIPTION_ENGLISH;
			}
		}
		
		if($statusConstant == ConferenceCallStatusConstants::OWNER_ID_TOO_LONG ) {
			if($language == 'german') {
				return ConferenceCallStatusDescriptions::OWNER_ID_TOO_LONG_DESCRIPTION_GERMAN;
			} else {
				return ConferenceCallStatusDescriptions::OWNER_ID_TOO_LONG_DESCRIPTION_ENGLISH;
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
			
			
			if($statusConstant == 93 ) {
				return TelekomStatusConstants::PERMISSIONS_MISSING;
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
			
			return ConferenceCallClient::SERVICE_NUMBER * 10000 + $statusConstant;
		}
	}
}
