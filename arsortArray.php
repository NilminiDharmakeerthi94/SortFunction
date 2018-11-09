<!DOCTYPE html>
<html>
<head>
	<title>sort associative arrays in descending order, according to the value</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
arsort($names);                                         //arsort function used ceate associative array  for descending order ,according to the value 

foreach ($names as $x => $x_value) {
	echo "Key=" . $x . ", Values=" . $x_value;          
    echo "<br>";

	# code...
}

?>
</body>
</html>
