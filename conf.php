<?php

	$config = [

		'smtp' => [
				'USE'		=>  TRUE,				// Send using SMTP				
				'HOST'  	=> 'smtp.gmail.com',
				'Auth' 		=>  TRUE,				// SMTP AUTH
				'USERNAME'	=> 'example@gmail.com',	// SMTP username
				'PASSWORD'	=> 'secret',			// SMTP password
				'Encryption'=> 'TLS',				//can use 'SSL' also
				'PORT'		=>  587					//use 465 for 'SSL'
		],

		'debug' => FALSE 	// PHPMAILER debug
	];

?>