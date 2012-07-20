<body>
	 <h1>Add new</h1>
	 <fieldset>
	 <legend>Add</legend>
	<?php 
		echo form_open('site/add_new');
		echo form_input('title','Title');
		echo form_input('link','Link');
		echo form_submit('submit', 'Submit');
		echo form_close(); 
	?>
	</fieldset>
