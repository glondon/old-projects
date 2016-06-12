<?php

class Plugin_Canonical //extends Zend_Controller_Action
{

	public function url()
	{
		$request = Zend_Controller_Front::getInstance()->getRequest();
		$filter = new Zend_Filter_Alnum(true);
		$params = array();

		foreach ($request->getParams() as $key => $value) {

			if (in_array($key, array('controller', 'action', 'module'))) {
				continue;
			}

			array_push($params, $key . '/' . $filter($value));
		}
		return implode('/', $params);
	}
}