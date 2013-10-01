<?php
	$host = "http://".$_SERVER['HTTP_HOST']."/";
?>
<!DOCTYPE html>
<html>
<head>
	<base href=<?php echo $host;?>>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<link rel="stylesheet" type="text/css" href="css/button.css" />

	<title></title>
</head>
<body>
	<div class = "container">
		<div class="nav">
			<ul>
				<a href="Admin/" title=""><li>Home</li></a>
				<a href="Admin/" title=""><li>Current Time Sheets</li></a>
				<a href="Admin/" title=""><li>New Requests</li></a>
				<a href="Admin/" title=""><li>User Management</li></a>
				<a href="Admin/" title=""><li>Completed Jobs</li></a>
			</ul>
		</div>
		<div class="wrapper">
			<div class="header">
				<h1>MAPS Admin Page</h1>
			</div>
			<div class="content">		
				<p class="introduction">
					This is the admin page.<br>
					<span>Still Under Construction. Coming soon.</span>
				</p>
			</div>
		</div>
	</div>
</body>
</html>