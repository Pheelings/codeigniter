<h1>Register an account</h1>

<p>Use this form to register an account</p>

<?php

	echo form_open('registration');

	// Prepare settings for username input
	$usernameSettings = ['name'=>'username', 'id'=>'username'];

	echo form_label('Username: ', 'username');
	echo form_input($usernameSettings);

	echo form_submit('register', 'Register Account');

	echo form_close();

	echo validation_errors();

?>