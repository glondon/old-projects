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
 * Status descriptions for the Telekom service Conference Call
 * @package conferenceCall
 * @subpackage data
 */
 
 /**
  *
  */
require_once dirname(__FILE__).'/../../common/data/TelekomStatusDescriptions.php';
 
/**
 * Status descriptions for the Telekom service Conference Call
 * @package conferenceCall
 * @subpackage data
 */
interface ConferenceCallStatusDescriptions extends TelekomStatusDescriptions {
	/**
	 * German description of the status code 0003 of the service conferenceCall:
	 *
	 * "Die Telefonnummer des Konferenz-Initiators ist besetzt."
	 * @var string
	 */
	const INITIATOR_BUSY_DESCRIPTION_GERMAN = "Die Telefonnummer des Konferenz-Initiators ist besetzt.";
	
	/**
	 * English description of the status code 0003 of the service conferenceCall:
	 *
	 * "The initiator is busy."
	 * @var string
	 */
	const INITIATOR_BUSY_DESCRIPTION_ENGLISH = "The initiator is busy.";
	
	/**
	 * German description of the status code 0004 of the service conferenceCall:
	 *
	 * "Der Initiator hat nicht abgehoben."
	 * @var string
	 */
	const INITIATOR_UNAVAILABLE_DESCRIPTION_GERMAN = "Der Initiator hat nicht abgehoben.";
	
	/**
	 * English description of the status code 0004 of the service conferenceCall:
	 *
	 * "The initiator doesn't pick up the phone."
	 * @var string
	 */
	const INITIATOR_UNAVAILABLE_DESCRIPTION_ENGLISH = "The initiator doesn't pick up the phone.";
	
	/**
	 * German description of the status code 0005 of the service conferenceCall:
	 *
	 * "Unbekannter Fehler beim Aufbau der Konferenz."
	 * @var string
	 */
	const UNKNOWN_ERROR_DESCRIPTION_GERMAN = "Unbekannter Fehler beim Aufbau der Konferenz.";
	
	/**
	 * English description of the status code 0005 of the service conferenceCall:
	 *
	 * "Unknown error establishing the conference."
	 * @var string
	 */
	const UNKNOWN_ERROR_DESCRIPTION_ENGLISH = "Unknown error establishing the conference.";
	
	/**
	 * German description of the status code 0006 of the service conferenceCall:
	 *
	 * "Die Konferenz wurde geschlossen."
	 * @var string
	 */
	const CONFERENCE_ALREADY_CLOSED_DESCRIPTION_GERMAN = "Die Konferenz wurde geschlossen.";
	
	/**
	 * English description of the status code 0006 of the service conferenceCall:
	 *
	 * "The conference is closed."
	 * @var string
	 */
	const CONFERENCE_ALREADY_CLOSED_DESCRIPTION_ENGLISH = "The conference is closed.";
	
	/**
	 * German description of the status code 0007 of the service conferenceCall:
	 *
	 * "Die Konferenz hat geendet."
	 * @var string
	 */
	const CONFERENCE_ALREADY_FINISHED_DESCRIPTION_GERMAN = "Die Konferenz hat geendet.";
	
	/**
	 * English description of the status code 0007 of the service conferenceCall:
	 *
	 * "The conference is finished."
	 * @var string
	 */
	const CONFERENCE_ALREADY_FINISHED_DESCRIPTION_ENGLISH = "The conference is finished.";
	
	/**
	 * German description of the status code 0008 of the service conferenceCall:
	 *
	 * "Die Konferenz wurde gelöscht."
	 * @var string
	 */
	const CONFERENCE_ALREADY_DELETED_DESCRIPTION_GERMAN = "Die Konferenz wurde gelöscht.";
	
	/**
	 * English description of the status code 0008 of the service conferenceCall:
	 *
	 * "The conference is deleted."
	 * @var string
	 */
	const CONFERENCE_ALREADY_DELETED_DESCRIPTION_ENGLISH = "The conference is deleted.";
	
	/**
	 * German description of the status code 0055 of the service conferenceCall:
	 *
	 * "Ein Startzeitpunkt der Konferenz ist in der Sandbox nicht erlaubt."
	 * @var string
	 */
	const CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED_DESCRIPTION_GERMAN = "Ein Startzeitpunkt der Konferenz ist in der Sandbox nicht erlaubt.";
	
	/**
	 * English description of the status code 0055 of the service conferenceCall:
	 *
	 * "Conference starttime for sandbox not allowed."
	 * @var string
	 */
	const CONFERENCE_STARTTIME_FOR_SANDBOX_NOT_ALLOWED_DESCRIPTION_ENGLISH = "Conference starttime for sandbox not allowed.";
	
	/**
	 * German description of the status code 0101 of the service conferenceCall:
	 *
	 * "Ungültige Flags für participant."
	 * @var string
	 */
	const WRONG_PARTICIPANT_FLAGS_DESCRIPTION_GERMAN = "Ungültige Flags für participant.";
	
	/**
	 * English description of the status code 0101 of the service conferenceCall:
	 *
	 * "Invalid flags for participant."
	 * @var string
	 */
	const WRONG_PARTICIPANT_FLAGS_DESCRIPTION_ENGLISH = "Invalid flags for participant.";
	
	/**
	 * German description of the status code 0102 of the service conferenceCall:
	 *
	 * "Kein participant angegeben."
	 * @var string
	 */
	const NO_PARTICIPANT_GIVEN_DESCRIPTION_GERMAN = "Kein participant angegeben.";
	
	/**
	 * English description of the status code 0102 of the service conferenceCall:
	 *
	 * "No participant specified."
	 * @var string
	 */
	const NO_PARTICIPANT_GIVEN_DESCRIPTION_ENGLISH = "No participant specified.";
	
	/**
	 * German description of the status code 0103 of the service conferenceCall:
	 *
	 * "Keine conference angegeben."
	 * @var string
	 */
	const NO_CONFERENCE_GIVEN_DESCRIPTION_GERMAN = "Keine conference angegeben.";
	
	/**
	 * English description of the status code 0103 of the service conferenceCall:
	 *
	 * "No conference specified."
	 * @var string
	 */
	const NO_CONFERENCE_GIVEN_DESCRIPTION_ENGLISH = "No conference specified.";
	
	/**
	 * German description of the status code 0104 of the service conferenceCall:
	 *
	 * "Kein template angegeben."
	 * @var string
	 */
	const NO_TEMPLATE_GIVEN_DESCRIPTION_GERMAN = "Kein template angegeben.";
	
	/**
	 * English description of the status code 0104 of the service conferenceCall:
	 *
	 * "No template specified."
	 * @var string
	 */
	const NO_TEMPLATE_GIVEN_DESCRIPTION_ENGLISH = "No template specified.";
	
	/**
	 * German description of the status code 0105 of the service conferenceCall:
	 *
	 * "Fehlerhafter Wert im Feld what."
	 * @var string
	 */
	const WRONG_WHAT_VALUE_DESCRIPTION_GERMAN = "Fehlerhafter Wert im Feld what.";
	
	/**
	 * English description of the status code 0105 of the service conferenceCall:
	 *
	 * "Incorrect value in field what."
	 * @var string
	 */
	const WRONG_WHAT_VALUE_DESCRIPTION_ENGLISH = "Incorrect value in field what.";
	
	/**
	 * German description of the status code 0106 of the service conferenceCall:
	 *
	 * "Fehlerhafter Wert im Feld action."
	 * @var string
	 */
	const WRONG_ACTION_VALUE_DESCRIPTION_GERMAN = "Fehlerhafter Wert im Feld action.";
	
	/**
	 * English description of the status code 0106 of the service conferenceCall:
	 *
	 * "Incorrect value in field action."
	 * @var string
	 */
	const WRONG_ACTION_VALUE_DESCRIPTION_ENGLISH = "Incorrect value in field action.";
	
	/**
	 * German description of the status code 0200 of the service conferenceCall:
	 *
	 * "Die Obergrenze für duration wurde erreicht."
	 * @var string
	 */
	const DURATION_TOO_BIG_DESCRIPTION_GERMAN = "Die Obergrenze für duration wurde erreicht.";
	
	/**
	 * English description of the status code 0200 of the service conferenceCall:
	 *
	 * "The upper limit for duration has been reached."
	 * @var string
	 */
	const DURATION_TOO_BIG_DESCRIPTION_ENGLISH = "The upper limit for duration has been reached.";
	
	/**
	 * German description of the status code 0201 of the service conferenceCall:
	 *
	 * "Kein participant für conference angegeben."
	 * @var string
	 */
	const NO_PARTICIPANTS_IN_CONFERENCE_DESCRIPTION_GERMAN = "Kein participant für conference angegeben.";
	
	/**
	 * English description of the status code 0201 of the service conferenceCall:
	 *
	 * "No participant for conference specified."
	 * @var string
	 */
	const NO_PARTICIPANTS_IN_CONFERENCE_DESCRIPTION_ENGLISH = "No participant for conference specified.";
	
	/**
	 * German description of the status code 0202 of the service conferenceCall:
	 *
	 * "Kein participant in template gefunden."
	 * @var string
	 */
	const NO_PARTICIPANTS_IN_TEMPLATE_DESCRIPTION_GERMAN = "Kein participant in template gefunden.";
	
	/**
	 * English description of the status code 0202 of the service conferenceCall:
	 *
	 * "No participant found in template."
	 * @var string
	 */
	const NO_PARTICIPANTS_IN_TEMPLATE_DESCRIPTION_ENGLISH = "No participant found in template.";
	
	/**
	 * German description of the status code 0203 of the service conferenceCall:
	 *
	 * "Konferenz enthält keinen Initiator."
	 * @var string
	 */
	const NO_INITIATOR_IN_CONFERENCE_DESCRIPTION_GERMAN = "Konferenz enthält keinen Initiator.";
	
	/**
	 * English description of the status code 0203 of the service conferenceCall:
	 *
	 * "Conference does not contain an initiator."
	 * @var string
	 */
	const NO_INITIATOR_IN_CONFERENCE_DESCRIPTION_ENGLISH = "Conference does not contain an initiator.";
	
	/**
	 * German description of the status code 0204 of the service conferenceCall:
	 *
	 * "Maximalanzahl an Teilnehmern erreicht."
	 * @var string
	 */
	const TOO_MANY_PARTICIPANTS_DESCRIPTION_GERMAN = "Maximalanzahl an Teilnehmern erreicht.";
	
	/**
	 * English description of the status code 0204 of the service conferenceCall:
	 *
	 * "Maximum number of participants reached."
	 * @var string
	 */
	const TOO_MANY_PARTICIPANTS_DESCRIPTION_ENGLISH = "Maximum number of participants reached.";
	
	/**
	 * German description of the status code 0205 of the service conferenceCall:
	 *
	 * "Telefonnummer nicht erlaubt."
	 * @var string
	 */
	const NUMBER_NOT_ALLOWED_DESCRIPTION_GERMAN = "Telefonnummer nicht erlaubt.";
	
	/**
	 * English description of the status code 0205 of the service conferenceCall:
	 *
	 * "Phone number not allowed."
	 * @var string
	 */
	const NUMBER_NOT_ALLOWED_DESCRIPTION_ENGLISH = "Phone number not allowed.";
	
	/**
	 * German description of the status code 0206 of the service conferenceCall:
	 *
	 * "Diese Nummer kann nicht verändert werden."
	 * @var string
	 */
	const CANNOT_CHANGE_NUMBER_DESCRIPTION_GERMAN = "Diese Nummer kann nicht verändert werden.";
	
	/**
	 * English description of the status code 0206 of the service conferenceCall:
	 *
	 * "This number cannot be modified."
	 * @var string
	 */
	const CANNOT_CHANGE_NUMBER_DESCRIPTION_ENGLISH = "This number cannot be modified.";
	
	/**
	 * German description of the status code 0207 of the service conferenceCall:
	 *
	 * "Es existiert bereits ein Initiator für diese Konferenz."
	 * @var string
	 */
	const INITIATOR_ALREADY_EXISTS_DESCRIPTION_GERMAN = "Es existiert bereits ein Initiator für diese Konferenz.";
	
	/**
	 * English description of the status code 0207 of the service conferenceCall:
	 *
	 * "An initiator already exists for this conference."
	 * @var string
	 */
	const INITIATOR_ALREADY_EXISTS_DESCRIPTION_ENGLISH = "An initiator already exists for this conference.";
	
	/**
	 * German description of the status code 0208 of the service conferenceCall:
	 *
	 * "Fehlerhaftes Nummernformat."
	 * @var string
	 */
	const INVALID_NUMBER_FORMAT_DESCRIPTION_GERMAN = "Fehlerhaftes Nummernformat.";
	
	/**
	 * English description of the status code 0208 of the service conferenceCall:
	 *
	 * "Incorrect number format."
	 * @var string
	 */
	const INVALID_NUMBER_FORMAT_DESCRIPTION_ENGLISH = "Incorrect number format.";
	
	/**
	 * German description of the status code 0209 of the service conferenceCall:
	 *
	 * "Neu Anwählen und stumm schalten können nur während einer aktiven Konferenz ausgeführt werden."
	 * @var string
	 */
	const CANNOT_APPLY_ACTIONS_DESCRIPTION_GERMAN = "Neu Anwählen und stumm schalten können nur während einer aktiven Konferenz ausgeführt werden.";
	
	/**
	 * English description of the status code 0209 of the service conferenceCall:
	 *
	 * "Redial and mute are only possible between an active conference."
	 * @var string
	 */
	const CANNOT_APPLY_ACTIONS_DESCRIPTION_ENGLISH = "Redial and mute are only possible between an active conference.";
	
	/**
	 * German description of the status code 0210 of the service conferenceCall:
	 *
	 * "Telefonnummer wurde vom Anbieter geblockt."
	 * @var string
	 */
	const NUMBER_BLOCKED_BY_PROVIDER_DESCRIPTION_GERMAN = "Telefonnummer wurde vom Anbieter geblockt.";
	
	/**
	 * English description of the status code 0210 of the service conferenceCall:
	 *
	 * "Phone number was blocked by the provider."
	 * @var string
	 */
	const NUMBER_BLOCKED_BY_PROVIDER_DESCRIPTION_ENGLISH = "Phone number was blocked by the provider.";
	
	/**
	 * German description of the status code 0211 of the service conferenceCall:
	 *
	 * "Die Nummer wurde vom Benutzer abgewiesen."
	 * @var string
	 */
	const NUMBER_BLOCKED_BY_USER_DESCRIPTION_GERMAN = "Die Nummer wurde vom Benutzer abgewiesen.";
	
	/**
	 * English description of the status code 0211 of the service conferenceCall:
	 *
	 * "Number blocked by user."
	 * @var string
	 */
	const NUMBER_BLOCKED_BY_USER_DESCRIPTION_ENGLISH = "Number blocked by user.";
	
	/**
	 * German description of the status code 0213 of the service conferenceCall:
	 *
	 * "Geplantes Datum ungültig."
	 * @var string
	 */
	const SCHEDULE_DATE_INVALID_DESCRIPTION_GERMAN = "Geplantes Datum ungültig.";
	
	/**
	 * English description of the status code 0213 of the service conferenceCall:
	 *
	 * "Planned date is invalid."
	 * @var string
	 */
	const SCHEDULE_DATE_INVALID_DESCRIPTION_ENGLISH = "Planned date is invalid.";
	
	/**
	 * German description of the status code 0214 of the service conferenceCall:
	 *
	 * "Geplante Zeit ungültig."
	 * @var string
	 */
	const SCHEDULE_TIME_INVALID_DESCRIPTION_GERMAN = "Geplante Zeit ungültig.";
	
	/**
	 * English description of the status code 0214 of the service conferenceCall:
	 *
	 * "Planned time is invalid."
	 * @var string
	 */
	const SCHEDULE_TIME_INVALID_DESCRIPTION_ENGLISH = "Planned time is invalid.";
	
	/**
	 * German description of the status code 0215 of the service conferenceCall:
	 *
	 * "Geplanter Zeitpunkt liegt in der Vergangenheit."
	 * @var string
	 */
	const CONFERENCE_STARTTIME_IN_THE_PAST_DESCRIPTION_GERMAN = "Geplanter Zeitpunkt liegt in der Vergangenheit.";
	
	/**
	 * English description of the status code 0215 of the service conferenceCall:
	 *
	 * "Planned time lies in the past."
	 * @var string
	 */
	const CONFERENCE_STARTTIME_IN_THE_PAST_DESCRIPTION_ENGLISH = "Planned time lies in the past.";
	
	/**
	 * German description of the status code 0216 of the service conferenceCall:
	 *
	 * "Ungültiger Wert für duration."
	 * @var string
	 */
	const DURATION_INVALID_DESCRIPTION_GERMAN = "Ungültiger Wert für duration.";
	
	/**
	 * English description of the status code 0216 of the service conferenceCall:
	 *
	 * "Invalid value for duration."
	 * @var string
	 */
	const DURATION_INVALID_DESCRIPTION_ENGLISH = "Invalid value for duration.";
	
	/**
	 * German description of the status code 0217 of the service conferenceCall:
	 *
	 * "Ungültiger Wert für recurring."
	 * @var string
	 */
	const RECURRING_OR_NOTIFICATION_INVALID_DESCRIPTION_GERMAN = "Ungültiger Wert für recurring.";
	
	/**
	 * English description of the status code 0217 of the service conferenceCall:
	 *
	 * "Invalid value for recurring."
	 * @var string
	 */
	const RECURRING_OR_NOTIFICATION_INVALID_DESCRIPTION_ENGLISH = "Invalid value for recurring.";
	
	/**
	 * German description of the status code 0218 of the service conferenceCall:
	 *
	 * "Das Planungsdatum der Konferenz liegt zu weit in der Zukunft."
	 * @var string
	 */
	const CONFERENCE_START_TOO_MUCH_AHEAD_DESCRIPTION_GERMAN = "Das Planungsdatum der Konferenz liegt zu weit in der Zukunft.";
	
	/**
	 * English description of the status code 0218 of the service conferenceCall:
	 *
	 * "The scheduling date for the conference is too far in the future."
	 * @var string
	 */
	const CONFERENCE_START_TOO_MUCH_AHEAD_DESCRIPTION_ENGLISH = "The scheduling date for the conference is too far in the future.";
	
	/**
	 * German description of the status code 0219 of the service conferenceCall:
	 *
	 * "conference ist nicht gespeichert. Teilnehmerstatus kann nicht abgefragt werden."
	 * @var string
	 */
	const NO_STATUS_FOR_UNCOMMITTED_CONFERENCE_DESCRIPTION_GERMAN = "conference ist nicht gespeichert. Teilnehmerstatus kann nicht abgefragt werden.";
	
	/**
	 * English description of the status code 0219 of the service conferenceCall:
	 *
	 * "conference was not saved. Participant status can not be requested."
	 * @var string
	 */
	const NO_STATUS_FOR_UNCOMMITTED_CONFERENCE_DESCRIPTION_ENGLISH = "conference was not saved. Participant status can not be requested.";
	
	/**
	 * German description of the status code 0220 of the service conferenceCall:
	 *
	 * "Der Teilnehmer ist in der Konferenz. Ein erneutes Anwählen ist nicht möglich."
	 * @var string
	 */
	const PARTICIPANT_STILL_IN_REDIAL_LATER_DESCRIPTION_GERMAN = "Der Teilnehmer ist in der Konferenz. Ein erneutes Anwählen ist nicht möglich.";
	
	/**
	 * English description of the status code 0220 of the service conferenceCall:
	 *
	 * "Participant is currently in the conference. A redial is not possible."
	 * @var string
	 */
	const PARTICIPANT_STILL_IN_REDIAL_LATER_DESCRIPTION_ENGLISH = "Participant is currently in the conference. A redial is not possible.";
	
	/**
	 * German description of the status code 0221 of the service conferenceCall:
	 *
	 * "In einer gespeicherten Konferenz kann der Initiator nicht geändert werden. Der Initiator darf auch nicht gelöscht werden."
	 * @var string
	 */
	const CANNOT_CHANGE_INITIATOR_DESCRIPTION_GERMAN = "In einer gespeicherten Konferenz kann der Initiator nicht geändert werden. Der Initiator darf auch nicht gelöscht werden.";
	
	/**
	 * English description of the status code 0221 of the service conferenceCall:
	 *
	 * "In a saved conference the initiator can not be changed. It cannot be deleted also."
	 * @var string
	 */
	const CANNOT_CHANGE_INITIATOR_DESCRIPTION_ENGLISH = "In a saved conference the initiator can not be changed. It cannot be deleted also.";
	
	/**
	 * German description of the status code 0221 of the service conferenceCall:
	 *
	 * "In einer gespeicherten Konferenz kann der Initiator nicht geändert werden. Der Initiator darf auch nicht gelöscht werden."
	 * @var string
	 */
	const CANNOT_DELETE_INITIATOR_DESCRIPTION_GERMAN = "In einer gespeicherten Konferenz kann der Initiator nicht geändert werden. Der Initiator darf auch nicht gelöscht werden.";
	
	/**
	 * English description of the status code 0221 of the service conferenceCall:
	 *
	 * "In a saved conference the initiator can not be changed. It cannot be deleted also."
	 * @var string
	 */
	const CANNOT_DELETE_INITIATOR_DESCRIPTION_ENGLISH = "In a saved conference the initiator can not be changed. It cannot be deleted also.";
	
	/**
	 * German description of the status code 0222 of the service conferenceCall:
	 *
	 * "Der Typ einer Konferenz (ad-hoc oder geplant) kann nicht geändert werden."
	 * @var string
	 */
	const COULD_NOT_CONVERT_SCHEDULED_CONFERENCE_DESCRIPTION_GERMAN = "Der Typ einer Konferenz (ad-hoc oder geplant) kann nicht geändert werden.";
	
	/**
	 * English description of the status code 0222 of the service conferenceCall:
	 *
	 * "The conference type (ad-hoc or scheduled) can not be changed."
	 * @var string
	 */
	const COULD_NOT_CONVERT_SCHEDULED_CONFERENCE_DESCRIPTION_ENGLISH = "The conference type (ad-hoc or scheduled) can not be changed.";
	
	/**
	 * German description of the status code 0223 of the service conferenceCall:
	 *
	 * "conference ist nicht aktiv. Teilnehmerstatus kann nicht abgefragt werden."
	 * @var string
	 */
	const COULD_NOT_GET_PARTICIPANT_STATUS_DESCRIPTION_GERMAN = "conference ist nicht aktiv. Teilnehmerstatus kann nicht abgefragt werden.";
	
	/**
	 * English description of the status code 0223 of the service conferenceCall:
	 *
	 * "No active conference. Participant status can not be requested."
	 * @var string
	 */
	const COULD_NOT_GET_PARTICIPANT_STATUS_DESCRIPTION_ENGLISH = "No active conference. Participant status can not be requested.";
	
	/**
	 * German description of the status code 0405 of the service conferenceCall:
	 *
	 * "Konferenzraum existiert bereits."
	 * @var string
	 */
	const CONFERENCE_ALREADY_EXISTS_DESCRIPTION_GERMAN = "Konferenzraum existiert bereits.";
	
	/**
	 * English description of the status code 0405 of the service conferenceCall:
	 *
	 * "Conference room already exists."
	 * @var string
	 */
	const CONFERENCE_ALREADY_EXISTS_DESCRIPTION_ENGLISH = "Conference room already exists.";
	
	/**
	 * German description of the status code 0407 of the service conferenceCall:
	 *
	 * "Konferenzraum existiert noch nicht."
	 * @var string
	 */
	const CONFERENCE_DOES_NOT_EXISTS_DESCRIPTION_GERMAN = "Konferenzraum existiert noch nicht.";
	
	/**
	 * English description of the status code 0407 of the service conferenceCall:
	 *
	 * "Conference room does not yet exist."
	 * @var string
	 */
	const CONFERENCE_DOES_NOT_EXISTS_DESCRIPTION_ENGLISH = "Conference room does not yet exist.";
	
	/**
	 * German description of the status code 0408 of the service conferenceCall:
	 *
	 * "participant existiert nicht."
	 * @var string
	 */
	const PARTICIPANT_DOES_NOT_EXIST_DESCRIPTION_GERMAN = "participant existiert nicht.";
	
	/**
	 * English description of the status code 0408 of the service conferenceCall:
	 *
	 * "participant does not exist."
	 * @var string
	 */
	const PARTICIPANT_DOES_NOT_EXIST_DESCRIPTION_ENGLISH = "participant does not exist.";
	
	/**
	 * German description of the status code 0409 of the service conferenceCall:
	 *
	 * "Ungültige Nummer für Initiator."
	 * @var string
	 */
	const INITIATOR_NUMBER_INVALID_DESCRIPTION_GERMAN = "Ungültige Nummer für Initiator.";
	
	/**
	 * English description of the status code 0409 of the service conferenceCall:
	 *
	 * "Invalid name for initiator."
	 * @var string
	 */
	const INITIATOR_NUMBER_INVALID_DESCRIPTION_ENGLISH = "Invalid name for initiator.";
	
	/**
	 * German description of the status code 0410 of the service conferenceCall:
	 *
	 * "Der Teilnehmer existiert bereits."
	 * @var string
	 */
	const PARTICIPANT_ALREADY_ADDED_DESCRIPTION_GERMAN = "Der Teilnehmer existiert bereits.";
	
	/**
	 * English description of the status code 0410 of the service conferenceCall:
	 *
	 * "Participant already exists."
	 * @var string
	 */
	const PARTICIPANT_ALREADY_ADDED_DESCRIPTION_ENGLISH = "Participant already exists.";
	
	/**
	 * German description of the status code 0411 of the service conferenceCall:
	 *
	 * "Vorlage existiert nicht."
	 * @var string
	 */
	const TEMPLATE_DOES_NOT_EXIST_DESCRIPTION_GERMAN = "Vorlage existiert nicht.";
	
	/**
	 * English description of the status code 0411 of the service conferenceCall:
	 *
	 * "Template does not exist."
	 * @var string
	 */
	const TEMPLATE_DOES_NOT_EXIST_DESCRIPTION_ENGLISH = "Template does not exist.";
	
	/**
	 * German description of the status code 0412 of the service conferenceCall:
	 *
	 * "ownerId ist zu kurz (Mindestlänge sind 3 Zeichen)."
	 * @var string
	 */
	const OWNER_ID_TOO_SHORT_DESCRIPTION_GERMAN = "ownerId ist zu kurz (Mindestlänge sind 3 Zeichen).";
	
	/**
	 * English description of the status code 0412 of the service conferenceCall:
	 *
	 * "ownerId is too short (minimmum length is 3 characters)."
	 * @var string
	 */
	const OWNER_ID_TOO_SHORT_DESCRIPTION_ENGLISH = "ownerId is too short (minimmum length is 3 characters).";
	
	/**
	 * German description of the status code 0413 of the service conferenceCall:
	 *
	 * "ownerId ist zu lang (Maximallänge sind 39 Zeichen)."
	 * @var string
	 */
	const OWNER_ID_TOO_LONG_DESCRIPTION_GERMAN = "ownerId ist zu lang (Maximallänge sind 39 Zeichen).";
	
	/**
	 * English description of the status code 0413 of the service conferenceCall:
	 *
	 * "ownerId is too long (maximum length is 39 characters)."
	 * @var string
	 */
	const OWNER_ID_TOO_LONG_DESCRIPTION_ENGLISH = "ownerId is too long (maximum length is 39 characters).";
}