<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="<?php echo base_url('User/loginExc');?>" method="post" >
			<label>Username</label>
			<input type="text" name="uname" class="form_login" placeholder="Username atau email">
 
			<label>Password</label>
			<input type="text" name="pass" class="form_login" placeholder="Password">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
            <div class="back">
			<center>
				BACK
			</center>
        </div>
		</form>
		
	</div>
 
 
</body>
</html>
