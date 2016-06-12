<?php

class AdminController extends Zend_Controller_Action
{
	public function init()
	{
		// Initialize action controller here
	}

	public function preDispatch()
	{
		$auth = Zend_Auth::getInstance();

		if ($auth->hasIdentity()) {

			$this->view->identity = $auth->getIdentity();

		}
	}

	public function indexAction()
	{
		// $this->headTitle()->append('Home');

		$userTBL = new Model_Users();
		$this->view->users = $userTBL->fetchAll();

	}
}