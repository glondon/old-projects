<?php 

class Form_Signup extends Zend_Form
{
	public function init()
	{
		// add path to custom validators
		$this->addElementPrefixPath('Validate', APPLICATION_PATH . '/plugins/validate/', 'validate');
		$this->setName('signup');

		$name = $this->createElement('text', 'name');
		$name->setLabel('Name:');
		$name->setRequired(true);
		$name->addFilter(new Zend_Filter_StringTrim());
		$name->addFilter(new Zend_Filter_Alpha(array('allowwhitespace' => true)));
		$name->addValidator(new Zend_Validate_StringLength(array('max' => 128)));
		$this->addElement($name);

		$phone = $this->createElement('text', 'phone');
		$phone->setLabel('Phone:');
		$phone->setRequired(true);
		$phone->addFilters(array('StringTrim', 'StringToLower'));
		$phone->addValidators(array(
         array(
             'validator'   => 'Regex',
             'breakChainOnFailure' => true,
             'options'     => array( 
             'pattern' => '/^[+]?[-\d() .]*$/i',
                 'messages' => array(
                     Zend_Validate_Regex::NOT_MATCH =>'Please provide a valid Phone Number.'
                 )
             )
         ),
         array(
             'validator' => 'StringLength',
             'breakChainOnFailure' => true,
             'options' => array(
                 'min' => 10
             )
         )
     ));
		$this->addElement($phone);

		$email = $this->createElement('text', 'email');
		$email->setLabel('Email:');
		$email->setRequired(true);
		$email->addFilters(array('StringTrim', 'StringToLower'));
		$email->addValidators(array(
			array('StringLength', true, array(3, 128),
			//array('EmailAddress'),
		)));
		$email->addValidator(new Zend_Validate_EmailAddress());
		$email->addValidator(new Zend_Validate_Db_NoRecordExists(array(
			'table' => 'signups',
			'field' => 'email')));
		$this->addElement($email);

		$captcha = new Zend_Form_Element_Captcha('signup',
			array('captcha' => array(
				'captcha' => 'Dumb',
				'wordLen' => 4,
				'timeout' => 600))
			);
		$this->addElement($captcha);

		$this->addElement('submit', 'submit', array(
			'label' => 'Signup'
		));

		$this->setMethod('post');
		$this->setAction(Zend_Controller_Front::getInstance()->getBaseUrl() . '');
	}
}

?>