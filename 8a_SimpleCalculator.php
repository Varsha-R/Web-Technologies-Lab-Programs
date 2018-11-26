<!--Write the PHP programs to do the following:
a) Implement simple calculator operations.-->

<!DOCTYPE html>
<html>

	<head>
		<style>
			table, td, th 	{
				
				border: 1px solid black;
				border-collapse: collapse;
				background-color: DarkGray;
				text-align: center;
				width:33%;
			}
			table {
				
				margin: auto;
			}
			input {
				text-align:  right;	
			}
			
		</style>
	</head>
	
	<body>
	
		<form method="POST">
			<table>
				<caption><h2>Simple Calculator</h2></caption>
				<tr>
					<td>First number: </td>
					<td><input type="text" name="num1"/></td>
				</tr>
				<tr>
					<td>Second number: </td>
					<td><input type="text" name="num2" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Calculate" /></td>
				</tr>
			</table>
		</form>
		
		<br>
		
		<?php
			error_reporting(0); // To supress warnings
		
			if(isset($_POST['submit']))
			{
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				
				if(is_numeric($num1) and is_numeric($num2))
				{
					echo "<table>";
					echo "<tr><td>Addition: </td><td><p>".($num1+$num2)."</p></td></tr>";
					echo "<tr><td>Subtraction: </td><td><p>".($num1-$num2)."</p></td></tr>";
					echo "<tr><td>Multiplication: </td><td><p>".($num1*$num2)."</p></td></tr>";
					echo "<tr><td>Division: </td><td><p>".($num1/$num2)."</p></td></tr>";
					echo "</table>";
				}
				else
				{
					echo "<script type='text/javascript'> alert(' ENTER VALID NUMBER'); </script>";
				}
			}
		?>
	
	</body>