<?php

class Form_Contact extends Zend_Form
{
	public function init()
	{

		$this->setName('contact');
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
		$this->addElement($email);

		$text = $this->createElement('textarea', 'text');
		$text->setLabel('Questions:');
		$text->setRequired(true);
		$text->addFilter(new Zend_Filter_StripTags());
		$text->addValidator(new Zend_Validate_StringLength(1, 250));
		$text->setAttrib('cols', 30);
		$text->setAttrib('rows', 5);
		$this->addElement($text);

		$captcha = new Zend_Form_Element_Captcha('signup',
			array('captcha' => array(
				'captcha' => 'Dumb',
				'wordLen' => 4,
				'timeout' => 600))
			);
		$this->addElement($captcha);

		$this->addElement('submit', 'submit', array('label' => 'Send'));

		// don't forget to add a captcha in this form

		$this->setMethod('post');
		$this->setAction(Zend_Controller_Front::getInstance()->getBaseUrl() . '/contact');
	}
}

?>

