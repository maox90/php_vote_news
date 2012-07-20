<body>
	<h1>Login</h1>
	<fieldset>
		<legend>Login</legend>
		<?php
		echo form_open('login/validate');
		echo form_input('username', 'Username');
		echo form_password('password', 'Password');
		echo form_submit('submit', 'Login');
		echo anchor('login/signup','Create Account');
		echo form_close();
		?>
	</fieldset>

