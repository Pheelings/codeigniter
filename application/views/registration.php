<h1>Register an account</h1>

<p> Youse this form to register an account!</p>

<?php
		
	// Open the form
	echo form_open('registration');

		// Prepare data for username input
		$usernameSettings  				= ['name'=>'username', 'id'=>'username', 'value'=>set_value('username'), 'placeholder'=>'Username'];
		$passwordSettings 				= ['name'=>'password', 'id'=>'password', 'placeholder'=>'Password'];
		$confirmPasswordSettings  = ['name'=>'password2', 'id'=>'password2', 'placeholder'=>'Confirm Password'];
		$emailSettings 						= ['name'=>'email', 'id'=>'email', 'value'=>set_value('email'), 'placeholder'=>'test@email.com'];

		echo '<div>';
			// Label. arg1 = visible text. arg2 = for ID
			echo form_label('Username: ', 'username');
			echo form_input($usernameSettings);
		echo '</div>';

		echo '<div>';
			echo form_label('Password: ', 'password');
			echo form_password($passwordSettings);
		echo '</div>';

		echo '<div>';
			echo form_label('Confirm Password: ', 'password2');
			echo form_password($confirmPasswordSettings);
		echo '</div>';

		echo '<div>';
			echo form_label('Email: ', 'email');
			echo form_input($emailSettings);
		echo '</div>';

		// Submit button. arg1 = name, arg2 = Value
		echo form_submit('submit', 'Register Account');

	// Close the form
	echo form_close();

	// Error messages are plaed here
	echo validation_errors();

?>