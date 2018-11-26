<!--Write a PHP program to sort the student records which are stored in the database using selection sort.
create database weblab;
use weblab;
create table student(usnvarchar(10),name varchar(20),address varchar(20));-->

<!DOCTYPE html>
<html>

	<body>
	
		<style>
			table, td, th
			{
				border: 1px solid black;
				border-collapse: collapse;
				background-color: lightgray;
				text-align: center;
				width: 33%;
			}
			table {
				margin: auto;
			}
		</style>
		
		<?php
		
		$a = array();
		
		$conn = mysqli_connect('localhost', 'root', '', 'weblab');
		if($conn->connect_error)
			die("connection failed: ".$conn->connect_error);
		
		$sql = "SELECT * FROM student";
		$result = $conn->query($sql);
		
		echo "<center>Before sorting: </center>";
		echo "<table>";
		echo "<tr>";
		echo "<th>USN</th><th>Name</th><th>Address</th>";
		echo "</tr>";
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row['usn']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "</tr>";
				array_push($a,$row["usn"]);
			}
		}
		else
			echo "Table is empty";
		echo "</table>";
		
		$n = count($a);
		$b = $a;
		
		for($i=0; $i<($n-1); $i++)
		{
			$pos = $i;
			for($j=$i+1; $j<$n; $j++)
				if($a[$pos] > $a[$j])
					$pos = $j;
			
			if($pos != $i)
			{
				$temp = $a[$i];
				$a[$i] = $a[$pos];
				$a[$pos] = $temp;
			}
		}
		
		$c = [];
		$d = [];
		
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				for($i=0; $i<$n; $i++)
					if($row['usn']==$a[$i])
					{
						$c[$i] = $row['name'];
						$d[$i] = $row['address'];
					}
			}
			
		}
		
		echo "<center>After sorting: </center>";
		echo "<table>";
		echo "<tr>";
		echo "<th>USN</th><th>Name</th><th>Address</th>";
		echo "</tr>";
		for($i=0; $i<$n; $i++)
		{
			echo "<tr>";
			echo "<td>".$a[$i]."</td>";
			echo "<td>".$c[$i]."</td>";
			echo "<td>".$d[$i]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		$conn->close();
		
		?>
	
	</body>

</html>
