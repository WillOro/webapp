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
		->setAttrib('maxLength', 10)
		->setAttrib('placeholder', 'yyyy/mm/dd')
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');
		
		$phone_number = new Zend_Form_Element_Text('phone_number');
		$phone_number->setLabel('Phone Number')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('NotEmpty');

		$arr;
		$connParams = array("host" => "mysql6.000webhost.com",
		"username" => "a6886501_zf",
		"password" => "MoOwebapp1",
		"dbname" => "a6886501_zf");
		$db = new Zend_Db_Adapter_Pdo_Mysql($connParams);
		$stmt = $db->query('SELECT id,name FROM states');
		$rows = $stmt->fetchAll();
		foreach($rows as $row=>$v){$arr[$v['id']]=$v['name'];}
		
		$state = new Zend_Form_Element_Select('state');
		$state->setLabel('State')
		->setAttrib('placeholder', 'Select State')
		->setMultiOptions($arr)
		->setRequired(true)
		->addValidator('NotEmpty');

		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('deal_id', 'submitbutton');
		$this->addElements(array($social_security_number, $policy, $date_of_birth, $phone_number, $state, $submit));


		
	}


}

