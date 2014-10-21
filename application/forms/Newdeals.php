<?php

class Application_Form_Newdeals extends Zend_Form
{

	public function init()
	{
		$this->setName('newdeals');
		$id = new Zend_Form_Element_Hidden('deal_id');
		$id->addFilter('Int');
		
		$social_security_number = new Zend_Form_Element_Text('social_security_number');
		$social_security_number->setLabel('Social Security Number')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$policy = new Zend_Form_Element_Text('policy');
		$policy->setLabel('Policy')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$date_of_birth = new Zend_Form_Element_Text('date_of_birth');
		$date_of_birth->setLabel('Date of Birth')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$phone_number = new Zend_Form_Element_Text('phone_number');
		$phone_number->setLabel('Phone Number')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$state = new Zend_Form_Element_Text('state');
		$state->setLabel('State')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('deal_id', 'submitbutton');
		$this->addElements(array($social_security_number, $policy, $date_of_birth, $phone_number, $state, $submit));
	}


}

