<?php

class IndexController extends Zend_Controller_Action
{
	protected $user;

    public function init()
    {

       $this->_user = new Model_Signups();   

    }

	public function preDispatch()
	{

	}

    public function indexAction()
    {
		$request = $this->getRequest();
    	$form = new Form_Signup();

		if ($request->isPost()) {

			if ($form->isValid($this->_request->getPost())) {

				$name = $form->getValue('name');
				$phone = $form->getValue('phone');	
				$email = $form->getValue('email');

				$this->_user->signupUser($name, $phone, $email);
				$action = 'submitted';
				$this->view->submitted = $action;	
			}
		}
		$this->view->form = $form;
    }

	public function contactAction()
	{
		$request = $this->getRequest();
    	$form = new Form_Contact();

		if ($request->isPost()) {

			if ($form->isValid($this->_request->getPost())) {

				$name = $form->getValue('name');
				$phone = $form->getValue('phone');	
				$email = $form->getValue('email');
				$text = $form->getValue('text');

				$this->_user->sendContact($name, $phone, $email, $text);
				$action = 'submitted';
				$this->view->submitted = $action;	
			}
		}
		$this->view->form = $form;
	}

	public function aboutAction()
	{

	}
	
	public function removeAction()
	{
		if (!$this->_request->getQuery('email')) {

			// do nothing
			$action = 'noemail';
			$this->view->noemail = $action;	

		} else {

		$emailRemove = $this->_request->getQuery('email');
		$select = $this->_user->select();
		$select->where('email = ?', $emailRemove);
		$result = $this->_user->fetchRow($select);
		$this->view->email = $emailRemove;

		if ($emailRemove == '' || !$result) {

			$action = 'noemail';
			$this->view->noemail = $action;

		} elseif ($result->role == 'inactive') {		

			$action = 'inactive';
			$this->view->inactive = $action;

		} else {

			$this->_user->deactivateEmail($emailRemove);

			}
		}
	}
}



