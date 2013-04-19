<?php header("content-type: text/xml");
$caller = $_GET['caller'];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
	<Gather action="complete_call.xml">
		<?php echo "<Say>Incoming call from ". $caller . "</Say>"?>
		
		<Say>Press any key to accept this call</Say>
	</Gather>
	<Hangup/>
</Response>
