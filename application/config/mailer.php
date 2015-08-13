<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array(
		'accounts' => array(
			array(
				'transport'	=> 'smtp',
				'hostname'	=> 'smtp.gmail.com',
				'username'	=> 'jaspersnjders@gmail.com',
				'password'	=> '123456az',
				'port'		=> 465,
				'encryption'    => 'tls',
				'from'          => array('noreply@villagesandempires.com' => 'Villages And Empires'),
				'replyto' 	=> array('noreply@villagesandempires.com' => 'Villages And Empires'),
			),
		),
	),
);