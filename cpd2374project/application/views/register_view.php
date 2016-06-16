<html>
<head>
<title>New User</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
   <link href = "<?php echo base_url().'register.css'; ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<?php echo form_open('register_ctrl'); ?>
<h1>New User</h1>
<?php echo form_label('First Name :'); ?> <?php echo form_error('fname'); ?>
<?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?>
<?php echo form_label('Last Name :'); ?> <?php echo form_error('lname'); ?>
<?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?>
<?php echo form_label('User Name :'); ?> <?php echo form_error('username'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username','placeholder'=>'example@domain.com','required')); ?>
<?php echo form_label('Password :'); ?> <?php echo form_error('password'); ?>
<?php echo form_input(array('id' => 'password', 'name' => 'password','placeholder'=>'Password should be 5 digits')); ?>
<?php echo form_label('Confirm Password :'); ?> <?php echo form_error('confPassword'); ?>
<?php echo form_input(array('id' => 'confPassword', 'name' => 'confPassword')); ?>

<?php echo form_label('Hints :'); ?> <?php echo form_error('hints'); ?>
<?php echo form_input(array('id' => 'hints', 'name' => 'hints','placeholder'=>'minimum length 3 charactres')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit'));?>
<?php echo form_close(); ?>
</div>
</body>
</html>