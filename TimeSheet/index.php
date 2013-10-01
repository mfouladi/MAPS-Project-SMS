<?php
	$host = "http://".$_SERVER['HTTP_HOST']."/";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<base href=<?php echo $host;?>>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/admin.css"/>
		<link rel="stylesheet" type="text/css" href="css/button.css" />
        <title></title>
    </head>
    <body>
        <div class="wrapper">
			<div class="header">
				<h1>Call Center Time Sheet</h1>
			</div>
			<div class="content">
				<div class="table_wrapper">
				
					<form action="" method="post">
						<div class="section" id="admin_table">
							<table>
								<tr>
									<td id="empty_cell"></td>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
								</tr>
								<tr>
									<th>3:00pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>3:30pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>4:00pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>4:30pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>5:00pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>5:30pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>6:00pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
								<tr>
									<th>6:30pm</th>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
									<td><input type='checkbox'></td>
								</tr>
							</table>
						</div>
						
						<div class="submit">
							<input type='submit' name="submit" class='button' value="Submit">
						</div>
						
						<div class="back">
							<input type='button' name="back" class='button' value="Back" onclick="location.href = ''">
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
    </body>
</html>


