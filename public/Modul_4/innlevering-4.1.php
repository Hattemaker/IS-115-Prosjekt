<!DOCTYPE html>
<html>
<head>
	<title>Oppgave 1, Arrays</title>
</head>
<body>
	<h1>Oppgave 1, Arrays</h1>
<?php 
	$array = [0 => "cat", 3 => "doge", 5 => "markise", 7 => "ost", 8 => 730, 15 => "kakespade"];
 ?>
 <pre>
 	<?php print_r($array); ?>
 </pre>

 <?php 

 	foreach ($array as $var) {
 		echo "Var in array: {$var}<br>";
 	}

  ?>
</body>
</html>