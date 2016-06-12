<?php

class Model_Signups extends Zend_Db_Table_Abstract
{
	protected $_name    = 'signups';	
	protected $_primary = 'id';

	public function signupUser($name, $phone, $email)
	{

		$date = new Zend_Db_Expr('NOW()');		
		$row = array(
		'name' => $name,
		'phone' => $phone,
		'email' => $email,
		'role' => 'active', 
		'date' => $date
		);
		$this->insert($row);

		$id = $this->_db->lastInsertId();

		$to = $row['email'];
		$name = $row['name'];
		$options = new Plugin_Email();
		$body = '

		<p>' . $name . ',<br><br>Thanks for taking the time to join South Virginia Homes.</p>
		 <p>You will now be kept up to date on new home listings in your area.</p>
		 <p>If you did not sign up and would like to be removed, simply click this link: 
		 <a href="http://sitefordave/remove?email=' . $row['email'] . '" target="_blank">
		 http://sitefordave/remove?email=' . $row['email'] .'</a></p>';

		$fromEmail = Plugin_Email::FROM_EMAIL;
		$fromName = Plugin_Email::FROM_NAME;
		$subject = 'Welcome to South Virginia Homes.';

		$mail = new Zend_Mail();
		$mail->setBodyHtml($body);
		$mail->setFrom($fromEmail, $fromName);
		$mail->addTo($to);
		$mail->setSubject($subject);
		$mail->send();

		$adbody = '
		<p>Dave, you got a new sign up at South Virginia Homes. Here are there details:</p>
		<p>Name: <b>' . $name . '</b></p><p>Phone: <b>' . $phone . '</b></p><p>Email: <b>' . $email . '</b></p>';
		$adsubject = 'You got a new sign up.';

		$admail = new Zend_Mail();
		$admail->setBodyHtml($adbody);
		$admail->setFrom($email, $fromName);
		$admail->addTo($fromEmail);
		$admail->setSubject($adsubject);
		$admail->send();

		/**

		require_once(APPLICATION_PATH . '/services/telekom/sendsms/client/SendSmsClient.php');
		require_once(APPLICATION_PATH . '/services/telekom/sendsms/data/SendSmsStatusConstants.php');

		$username = "******";
		$password = "******";



		// Constructs the Telekom client using the user name and password.
		$client = new SendSmsClient("production", $username, $password); 

		// Should the SMS be sent as flash SMS
		$flash = "false";

		// The recipients, comma separated
		$recipients = "+13604710874";

		// The Message of the SMS
		$message = 'Lead Name' . $name . ' 
					Phone ' . $phone . ' 
					Email ' . $email . '';
		
		// The originator of the message. It must be validated if this is a phone number. A string can be specified otherwise.
		$originator = "";

		// The result of sending an SMS
		$send_sms_response = null;

		try {
			// Sends the SMS
			$send_sms_response = $client->sendSms($recipients, $message, $originator, $flash, null);

			// Test, if the invocation of sendSms() was successful.
			if(!($send_sms_response->getStatus()->getStatusConstant() == SendSmsStatusConstants::SUCCESS)) {

				$errorMessage = "The invocation of sendSms() was not successful.\n";
				$errorMessage .= "The error code is: ".$send_sms_response->getStatus()->getStatusCode()."\n";
				$errorMessage .= "The error message is: ".$send_sms_response->getStatus()->getStatusMessage()."\n";
				$errorMessage .= "The error description is: ".$send_sms_response->getStatus()->getStatusDescriptionEnglish();

				throw new Exception($errorMessage);
			}
		} catch(Exception $e) {
			$logger = Zend_Registry::get('logger');
			$logger->notice($e->getMessage());
			exit(1);
		}
		**/
	}

	public function sendContact($name, $phone, $email, $text)
	{	

		//$options = new Plugin_Email();
		$fromName = $name; 
		$fromEmail = $email;
		$subject = 'New message to South Virginia Homes.';
		$to = Plugin_Email::FROM_EMAIL;
		$body = '<p>You have recieved a new message from <b>' . $name . '</b>.</p>
				 <p>Email is in the FROM box and here is their message:</p>
				 <p><b>' . $text . '</b></p><p>Phone number is: <b>' . $phone . '</b></p>';		

		$mail = new Zend_Mail();
		$mail->setBodyHtml($body);
		$mail->setFrom($fromEmail, $fromName);
		$mail->addTo($to);
		$mail->setSubject($subject);
		$mail->send();
	}

	public function deactivateEmail($emailRemove)
	{

			$data = array('role' => 'inactive');
			$where = $this->getAdapter()->quoteInto('email = ?', $emailRemove);
			$this->update($data, $where);

			// $options = new Plugin_Email();

			$body = '
			<p>Dave, a sign up has requested to no longer receive emails from South Virginia Homes or 
			anything else dealing with real estate and Keller Williams.</p>
			<p>Please remove the following email address from any of your autoresponders: <b>' . $emailRemove . '</b>.</p>';
			
			$fromEmail = Plugin_Email::FROM_EMAIL;
			$fromName = Plugin_Email::FROM_NAME;
			$subject = 'User requested to be removed from the mailing list.';

			$mail = new Zend_Mail();
			$mail->setBodyHtml($body);
			$mail->setFrom($fromEmail, $fromName);
			$mail->addTo($fromEmail);
			$mail->setSubject($subject);
			$mail->send();
	}
}
