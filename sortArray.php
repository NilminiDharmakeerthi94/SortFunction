<!DOCTYPE html>
<html>
<head>
	<title>sort array (ascending order)</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
sort($names);

$clength = count($names);
for($x = 0; $x < $clength; $x++){
	echo $names[$x];
	echo "<br>";
}
?>
</body>
</html>