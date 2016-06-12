<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initAutoload()
	{
		$modelLoader = new Zend_Application_Module_Autoloader(array(
					'namespace' => '',
					'basePath'  => APPLICATION_PATH));

		return $modelLoader;
	}

	public function _initView()
	{
		$view = new Zend_View();
		$view->doctype('XHTML1_TRANSITIONAL');
		$view->headTitle('South Virginia Homes')->setSeparator(' - ');
		$view->headMeta();	
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$viewRenderer->setView($view);

		return $view;
	}

	protected function _initLog()
	{
		$logger = new Zend_Log(new Zend_Log_Writer_Stream('../data/logs/debug.log'));
		Zend_Registry::set('logger', $logger);
	}

	protected function _initRouter()
	{
		$fc = Zend_Controller_Front::getInstance();
		$router = $fc->getRouter();
		$router->addRoute(
			'contact',
			new Zend_Controller_Router_Route('contact', array('controller' => 'index',
																'action' => 'contact'))
		);

		$router->addRoute(
			'remove',
			new Zend_Controller_Router_Route('remove', array('controller' => 'index',
																'action' => 'remove'))
		);

		$router->addRoute(
			'about',
			new Zend_Controller_Router_Route('about', array('controller' => 'index',
																'action' => 'about'))
		);
	}
}
