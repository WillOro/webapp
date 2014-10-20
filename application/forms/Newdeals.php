<?php

class Application_Form_Newdeals extends Zend_Form
{

public function init()
{
$this->setName('states');
$id = new Zend_Form_Element_Hidden('id');
$id->addFilter('Int');
$name = new Zend_Form_Element_Text('name');
$name->setLabel('Name')
->setRequired(true)
->addFilter('StripTags')
->addFilter('StringTrim')
->addValidator('NotEmpty');
$abbrev = new Zend_Form_Element_Text('abbrev');
$abbrev->setLabel('Abbrev')
->setRequired(true)
->addFilter('StripTags')
->addFilter('StringTrim')
->addValidator('NotEmpty');
$submit = new Zend_Form_Element_Submit('submit');
$submit->setAttrib('id', 'submitbutton');
$this->addElements(array($id, $name, $abbrev, $submit));
}


}

