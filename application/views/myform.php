<html>
<head>
<title>My Form</title>
</head>

<body>
	<?php echo form_open('form'); ?>
		<h5>Username</h5>
		<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" /> <?php echo form_error('username') ?>
		
		<h5>Password</h5>
		<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" /> <?php echo form_error('password') ?>
		
		<h5>Password Confirm</h5>
		<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" /> <?php echo form_error('passconf') ?>
		
		<h5>Email</h5>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" /> <?php echo form_error('email') ?>
		
		<h5>Hobbies</h5>
		<p><input type="checkbox" name="option[]" value="red" <?php echo set_checkbox('option[]', 'red'); ?> /> Red</p>
		<p><input type="checkbox" name="option[]" value="blue" <?php echo set_checkbox('option[]', 'blue'); ?> /> Blue</p>
		<p><input type="checkbox" name="option[]" value="green" <?php echo set_checkbox('option[]', 'green'); ?> /> Green</p> <?php echo form_error('option[]') ?>
		
		<p>
			<input type="radio" name="myradio" value="1" <?php echo set_radio('myradio', '1', TRUE); ?> />
			<input type="radio" name="myradio" value="2" <?php echo set_radio('myradio', '2'); ?> />
		</p>
		<div><input type="submit" value="Submit" /></div>
	
	</form>
</body>

</html>