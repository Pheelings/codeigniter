<h1>Register an account</h1>

<p> Youse this form to register an account!</p>

<?php
	
	echo form_open('registration/doRegistration');

		// Prepare data for username input
		$usernameSettings = ['name'=>'username', 'id'=>'username', 'placeholder'=>'Username'];

		echo form_label('Username: ', 'username');
		echo form_input($usernameSettings);

		echo form_submit('submit', 'Register Account');

	echo form_close();

	echo validation_errors();

?>