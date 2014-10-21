<?php

class NewdealsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function createAction()
    {
		$form = new Application_Form_Newdeals();
        $form->submit->setLabel('Create');
        $this->view->title = 'Create User';
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->getPost())) {
				// print_r($form->getValues());
				// $post=new Application_Model_DbTable_Newdeals();
				$post = new Application_Model_DbTable_Newdeals($form->getValues());
                // print_r($post);
				// exit;
                $post->save($form->getValues());
                $this->_helper->flashMessenger->addMessage('User saved.');
                $this->view->messages = $this->_helper->flashMessenger->getMessages();
                // reset the form
                $form->reset();
            }
        }
        $this->view->form = $form;
    }

    public function saveAction()
    {
	
	}


}





