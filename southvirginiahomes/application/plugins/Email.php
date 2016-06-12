<?php

class Plugin_Email 
{
	const FROM_NAME  = 'South Virginia Homes';
	const FROM_EMAIL = '********@********.com';

	public function setup()
	{
		$config = array('ssl'      => 'tls',
			            'port'     => 587,
                        'auth'     => 'login',
                        'username' => '**************@gmail.com',
                        'password' => '*************'
		);

        $transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $config);

        return $transport;
	}
}