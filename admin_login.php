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
				Welcome to MAPS Project SMS Administrative Portal<br>
				<span>Type in the administrative email and the corresponding password to get started.</span>
			</p>
			<form method="post" action="Admin/" class="order-form" id="order">
				<p class="login-error"></p>
				
				<label for="mapsEmail">Email <sup>*</sup></label><br />
				<input type="text" name="email" class="order-input" id="email" value="" /><br />
				<br clear="all" />
				
				<label for="password">Password<sup>*</sup></label><br />
				<input type="password" name="password" class="order-input" id="password" /><br />
				<br clear="all" />
				
				<input type='submit' name="submit" class='button' value="Submit">
			</form>
		</div>
	</div>
</body>
</html>