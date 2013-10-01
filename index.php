<?php
	$host = "http://".$_SERVER['HTTP_HOST']."/";
?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo $host;?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/button.css" />
</head>
<body>
	<div id="container">
		<div class="order-header">
			<h1>MAPS Project SMS</h1>
		</div>
		<div class="content">		
			<p class="introduction">
				Welcome to MAPS - Project SMS.<br>
				<span>Type in your email to get started.</span>
			</p>
			<form method="post" action="TimeSheet/" class="order-form" id="order">
				<p class="login-error"></p>
				
				<label for="mapsEmail">Email <sup>*</sup></label><br />
				<input type="text" name="email" class="order-input" id="email" value="" /><br />
				<br clear="all" />
							
				<input type='submit' name="submit" class='button' value="Submit">
			</form>
			<p class='login_message'>If you are an administrator, <a href="admin_login.php">login in here</a>.</p><br />
				
			<br clear="all" />
		</div>
	</div>
</body>
</html>