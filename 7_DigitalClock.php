<!--Write a PHP program to display a digital clock which displays the current time of the server.-->


<!DOCTYPE HTML>
<html>

	<head>
	
		<meta http-equiv="refresh" content="1"/>
		
		<style>
		
			p {
				color: white;
				font-size: 90px;
				position: absolute;
				top: 30%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			body {
				background-color: black;
			}
		
		</style>
		
		<p> <?php date_default_timezone_set("Asia/Calcutta");
echo date("H:i:s A");?> </p>
	
	</head>