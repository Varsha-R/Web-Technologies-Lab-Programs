<!--Write a PHP program to keep track of the number of visitors visiting the web page and to display this count of visitors, 
with proper headings.-->

<?php
	
print "<h3> REFRESH PAGE </h3>";

$name = "6_counter.txt";
$file = fopen($name, "r");
$hits = fscanf($file, "%d");
fclose($file);

$file = fopen($name, "w");
$hits[0]++;
fprintf($file, "%d", $hits[0]);
fclose($file);

print "Total number of views: ".$hits[0];

?>
