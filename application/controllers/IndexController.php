<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $states = new Application_Model_DbTable_States();
		$this->view->states = $states->fetchAll();
    }

    function addAction()
	{
	$form = new Application_Form_Newdeals();
	$form->submit->setLabel('Add');
	$this->view->form = $form;
	if ($this->getRequest()->isPost()) {
	$formData = $this->getRequest()->getPost();
	if ($form->isValid($formData)) {
	$name = $form->getValue('name');
	$abbrev = $form->getValue('abbrev');
	$states = new Application_Model_DbTable_States();
	$states->addAlbum($name, $abbrev);
	$this->_helper->redirector('index');
	} else {
	$form->populate($formData);
	}
	}
   }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }


}







