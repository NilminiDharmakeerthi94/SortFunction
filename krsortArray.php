<!DOCTYPE html>
<html>
<head>
	<title>sort associative arrays in descending order,according to the key</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
krsort($names);

foreach ($names as $x => $x_value) {
	echo "Key=" . $x  .", Values" . $x_value;
	echo "<br>";
	# code...
}
?>
</body>
</html>