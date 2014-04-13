<?php 

// Set the numbers to call (priority1, priority2, priority3)

	$username = "root";

	$password = "mapscallcenter1919";
	$db = "calledge_db";

	$hostname = "localhost";
	$port = "3306;"
	echo "<html><body>before mysql"
	$link = mysql_connect("$hostname:$port", $username, $password);
	echo "<br>after mysql"
	$db_selected = mysql_select_db($db, $link);

	if(!$link)
	{
		exit('Error: could not establish database connection');  
	}
	

	echo "<br>between IFs"

	if(!db_selected)  
	{  
		exit('Error: could not select the database');  
	} 
	
	//Prepare Errors Array
	$errors = array();
	
	$select = "SELECT phone FROM Students";

	echo "<br>before query"

	$address_book = mysql_query($select);



echo "</body></html>";

$numbers = array("17143158255", "18187951383");
// $address_book = array(
// 	"+18187951383" => "Fahad Nathani",
//     "+13107486162" => "Sakib Shaikh",
//     "+17143158255" => "Matin Fouladi");

$number_index = isset($_REQUEST['number_index']) ? $_REQUEST['number_index'] : "0";
$DialCallStatus = isset($_REQUEST['DialCallStatus']) ? $_REQUEST['DialCallStatus'] : "";

$caller_num = $_REQUEST['From'];
$caller = $address_book[$caller_num];

if($caller == NULL)  
{
	$caller = "'a student'";
}



$caller = str_replace(' ', '%20', $caller);
header("content-type: text/xml"); 

// Check the status of the call and 
// that there is a valid number to call

//if call isnt completed yet and if there are numbers left to call

if(!in_array($_REQUEST['From'], $address_book)){
	echo "<Response><Say>Greetings! You are not a member of Calledge. To sign up please talk to a member organization in your school.</Say><Reject/></Response>";

}
else
{

	if($DialCallStatus!="completed" && $number_index<count($numbers)){ 
	?>
		<Response>
		<Dial action="attempt_call.php?number_index=<?php echo $number_index+1 ?>">
			<Number url="screen_for_machine.php?caller=<?php echo $caller?>">
			<?php echo $numbers[$number_index] ?>
			</Number>
		</Dial>
		</Response>
	<?php
	} else {
	?>
		<Response>		
			<Hangup/>
		</Response>
	<?php
	}
}
?>
