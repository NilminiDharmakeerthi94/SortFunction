<!DOCTYPE html>
<html>
<head>
	<title>asort array (ascending order,according to value)</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
asort($names);

$clength = count($names);
foreach ($names as $x => $x_value) {
echo "Key=" . $x . ", Values=" . $x_value;
echo "<br>";
	# code...
}
?>
</body>
</html>