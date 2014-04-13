<?php
	//Get Database Info
	//$services_json = json_decode(getenv("VCAP_SERVICES"),true);
	//$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
	//$username = $mysql_config["username"];
	//$password = $mysql_config["password"];
	//$hostname = $mysql_config["hostname"];
	//$port = $mysql_config["port"];
	//$db = $mysql_config["name"];
?>

<?php
	//Connect to database
	$username = "root";
	$password = "mapscallcenter1919";
	$db = "calledge_db";
	$hostname = "localhost";
	$port = "3306";

	$link = mysql_connect("$hostname:$port", $username, $password);
	$db_selected = mysql_select_db($db, $link);
	if(!$link)
	{
		exit('Error: could not establish database connection');  
	}
	if(!db_selected)  
	{  
		exit('Error: could not select the database');  
	} 
	//Prepare Errors Array
	$errors = array();
	
	//Get Email and Password
	if(!isset($_POST['phone']))  
	{  
		$errors[] = 'The username field must not be empty.';  
	}  
	  
	if(!isset($_POST['password']))  
	{  
		$errors[] = 'The password field must not be empty.';  
	} 
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	// . mysql_real_escape_string($_POST['email']) . 
	//" . mysql_real_escape_string($_POST['password']) . "
	//Query table for user

	$sql = "SELECT first_name, last_name FROM users 
             WHERE email = '" . mysql_real_escape_string($phone) . "'  
             AND password = '" . hash ( "sha256" , $password ) . "'";  
	$result = mysql_query($sql);
	
	//Check Query for Result
	if(!$result)  
	{  
		//something went wrong, display the error  
		echo 'Something went wrong while signing in. Please try again later.'; 
		//echo mysql_error(); //debugging purposes, uncomment when needed 
	} 
	else 
	{ 
		//the query was successfully executed, there are 2 possibilities 
		//1. the query returned data, the user can be signed in 
		//2. the query returned an empty result set, the credentials were wrong 
		if(mysql_num_rows($result) == 0) 
		{ 
			echo 'You have supplied a wrong user/password combination. Please try again.'; 
		}
		else 
			{ 
				//set the $_SESSION['signed_in'] variable to TRUE 
				$_SESSION['signed_in'] = true; 
				 
				 
				echo 'Welcome, <a href="">Proceed to the forum overview</a>.'; 
			} 
		} 
?>