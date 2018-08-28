<!DOCTYPE html>
<html>
<head>
	<title>sort associative arrays in ascending order, according to the key</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
ksort($names);

foreach ($names as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
	# code...
}
?>
</body>
</html>