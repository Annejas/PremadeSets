<?php
return array(
    'username' => array(
        'not_empty' => '(Min. 4 characters)',
        'min_length' => '(Min. 4 characters)',
        'max_length' => '(Max. 30 characters)',
		'Model_User::userNotExists' => '(Username is already taken)',
    ),
    'password' => array(
        'not_empty' => '(Min. 6 characters)',
        'min_length' => '(Min. 6 characters)',
        'max_length' => '(Max. 30 characters)',
    ),
	'confirm_password' => array(
		'not_empty' => '(Passwords do not match)',
		'matches' => '(Passwords do not match)',
	),
    'mail' => array(
        'not_empty' => '(Invalid e-mail address)',
        'email' => '(Invalid e-mail address)',
    ),
);
