<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');?>">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="<?php echo base_url('Admin/loginExc');?>" method="post" >
			<label>Username</label>
			<input type="text" name="uname" class="form_login" placeholder="Input Username">
 
			<label>Password</label>
			<input type="text" name="pass" class="form_login" placeholder="Input Password">
 
			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
		
	</div>
 
 
</body>
</html>
