<!DOCTYPE html>
<html>
<head>
	<title>rsort array(descending order)</title>
</head>
<body>
<?php
$names = array('Amal','Bimal','Nim');
rsort($names);

$clength = count($names);
for($x=0; $x<$clength ;$x++){
	echo $names[$x];
	echo "<br>";
}
?>
</body>
</html>