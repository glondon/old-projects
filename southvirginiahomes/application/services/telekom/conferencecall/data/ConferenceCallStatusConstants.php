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
 * Status constants for the Telekom service Conference Call
 * @package conferenceCall
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusConstants.php';
 
/**
 * Status constants for the Telekom service Conference Call
 * @package conferenceCall
 * @subpackage data
 */
interface ConferenceCallStatusConstants extends TelekomStatusConstants {
	/**
	 * The initiator is busy.
	 */
	const INITIATOR_BUSY = 20003;
	
	/**
	 * The initiator doesn't pick up the phone.
	 */
	const INITIATOR_UNAVAILABLE = 20004;
	
	/**
	 * Unknown error establishing the conference.
	 */
	const UNKNOWN_ERROR = 20005;
	
	/**
	 * The conference is closed.
	 */
	const CONFERENCE_ALREADY_CLOSED = 20006;
	
	/**
	 * The conference is finished.
	 */
	const CONFERENCE_ALREADY_FINISHED = 20007;
	
	/**
	 * The conference is deleted.
	 */
	const CONFERENCE_ALREADY_DELETED = 20008;
	
	/**
	 * Conference starttime for sandbox not allowed.
	 */
	const CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED = 20055;
	
	/**
	 * Invalid flags for participant.
	 */
	const WRONG_PARTICIPANT_FLAGS = 20101;
	
	/**
	 * No participant specified.
	 */
	const NO_PARTICIPANT_GIVEN = 20102;
	
	/**
	 * No conference specified.
	 */
	const NO_CONFERENCE_GIVEN = 20103;
	
	/**
	 * No template specified.
	 */
	const NO_TEMPLATE_GIVEN = 20104;
	
	/**
	 * Incorrect value in field what.
	 */
	const WRONG_WHAT_VALUE = 20105;
	
	/**
	 * Incorrect value in field action.
	 */
	const WRONG_ACTION_VALUE = 20106;
	
	/**
	 * The upper limit for duration has been
            reached.
	 */
	const DURATION_TOO_BIG = 20200;
	
	/**
	 * No participant for
            conference specified.
	 */
	const NO_PARTICIPANTS_IN_CONFERENCE = 20201;
	
	/**
	 * No participant found in
            template.
	 */
	const NO_PARTICIPANTS_IN_TEMPLATE = 20202;
	
	/**
	 * Conference does not contain an initiator.
	 */
	const NO_INITIATOR_IN_CONFERENCE = 20203;
	
	/**
	 * Maximum number of participants reached.
	 */
	const TOO_MANY_PARTICIPANTS = 20204;
	
	/**
	 * Phone number not allowed.
	 */
	const NUMBER_NOT_ALLOWED = 20205;
	
	/**
	 * This number cannot be modified.
	 */
	const CANNOT_CHANGE_NUMBER = 20206;
	
	/**
	 * An initiator already exists for this conference.
	 */
	const INITIATOR_ALREADY_EXISTS = 20207;
	
	/**
	 * Incorrect number format.
	 */
	const INVALID_NUMBER_FORMAT = 20208;
	
	/**
	 * Redial and mute are only possible between an active
            conference.
	 */
	const CANNOT_APPLY_ACTIONS = 20209;
	
	/**
	 * Phone number was blocked by the provider.
	 */
	const NUMBER_BLOCKED_BY_PROVIDER = 20210;
	
	/**
	 * Number blocked by user.
	 */
	const NUMBER_BLOCKED_BY_USER = 20211;
	
	/**
	 * Planned date is invalid.
	 */
	const SCHEDULE_DATE_INVALID = 20213;
	
	/**
	 * Planned time is invalid.
	 */
	const SCHEDULE_TIME_INVALID = 20214;
	
	/**
	 * Planned time lies in the past.
	 */
	const CONFERENCE_STARTTIME_IN_THE_PAST = 20215;
	
	/**
	 * Invalid value for duration.
	 */
	const DURATION_INVALID = 20216;
	
	/**
	 * Invalid value for recurring.
	 */
	const RECURRING_OR_NOTIFICATION_INVALID = 20217;
	
	/**
	 * The scheduling date for the conference is too far in the
            future.
	 */
	const CONFERENCE_START_TOO_MUCH_AHEAD = 20218;
	
	/**
	 * Conference was not saved. Participant
            status can not be requested.
	 */
	const NO_STATUS_FOR_UNCOMMITTED_CONFERENCE = 20219;
	
	/**
	 * Participant is currently in the conference. A redial is not
            possible.
	 */
	const PARTICIPANT_STILL_IN_REDIAL_LATER = 20220;
	
	/**
	 * In a saved conference the initiator can not be changed. It
            cannot be deleted also.
	 */
	const CANNOT_CHANGE_INITIATOR = 20221;
	
	/**
	 * In a saved conference the initiator can not be changed. It
            cannot be deleted also.
	 */
	const CANNOT_DELETE_INITIATOR = 20221;
	
	/**
	 * The conference type (ad-hoc or scheduled) can not be
            changed.
	 */
	const COULD_NOT_CONVERT_SCHEDULED_CONFERENCE = 20222;
	
	/**
	 * No active conference. Participant status can not be
            requested.
	 */
	const COULD_NOT_GET_PARTICIPANT_STATUS = 20223;
	
	/**
	 * Conference room already exists.
	 */
	const CONFERENCE_ALREADY_EXISTS = 20405;
	
	/**
	 * Conference room does not yet exist.
	 */
	const CONFERENCE_DOES_NOT_EXISTS = 20407;
	
	/**
	 * Participant does not exist.
	 */
	const PARTICIPANT_DOES_NOT_EXIST = 20408;
	
	/**
	 * Invalid name for initiator.
	 */
	const INITIATOR_NUMBER_INVALID = 20409;
	
	/**
	 * Participant already exists.
	 */
	const PARTICIPANT_ALREADY_ADDED = 20410;
	
	/**
	 * Template does not exist.
	 */
	const TEMPLATE_DOES_NOT_EXIST = 20411;
	
	/**
	 * OwnerId is too short (minimmum length is
            3 characters).
	 */
	const OWNER_ID_TOO_SHORT = 20412;
	
	/**
	 * OwnerId is too long (maximum length is
            39 characters).
	 */
	const OWNER_ID_TOO_LONG = 20413;
	
}