<?php

class Plugin_AccessCheck extends Zend_Controller_Plugin_Abstract
{

	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{

		$acl = new Zend_Acl();
		$acl->addRole(new Zend_Acl_Role('inactive'));
		$acl->addRole(new Zend_Acl_Role('member'), 'inactive');
		$acl->addRole(new Zend_Acl_Role('admin'), 'member');

		$acl->add(new Zend_Acl_Resource('index'));
		$acl->add(new Zend_Acl_Resource('error'));
		$acl->add(new Zend_Acl_Resource('builder'));
		$acl->add(new Zend_Acl_Resource('admin'));

		$acl->allow(null, array('index', 'error'));
		$acl->allow('inactive', 'builder', array(
			'login', 'logout', 'register', 'activate', 'forgotpasswd', 'forgotusername'));
		$acl->allow('member', 'builder', array(
			'index', 'contact', 'edit', 'passwdupdate', 'preview', 'profile', 'referrals'));
		$acl->allow('admin', null);

		$auth = Zend_Auth::getInstance();

		if ($auth->hasIdentity()) {
			$identity = $auth->getIdentity();
			$role = strtolower($identity->role);
		} else {
			$role = 'inactive';
		}

		$controller = $request->controller;
		$action = $request->action;

		if (!$acl->isAllowed($role, $controller, $action)) {
			if ($role == 'inactive') {
				$request->setControllerName('builder');
				$request->setActionName('login');
			} else {
				$request->setControllerName('error');
				$request->setActionName('noauth');
			}
		}
	}
}