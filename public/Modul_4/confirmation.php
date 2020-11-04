<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//oppretter unik brukerID. Når jeg lager en database på dette, kommer jeg nok til å bruke en mer systematisk måte å holde styr på brukerID.
	
		$uniqid = uniqid();
		echo "Bruker opprettet! <br>";
		echo "BrukerID: " . $uniqid . "<br><br>";
		echo "Din brukerinformasjon: <br>";

		foreach ($_POST as $key => $value) {
			echo "<br>";
			echo $value;
		}
		//kommer til å gjøre dette annerledes når jeg implimenterer med database
		//kommer da til å se og fungere mye bedre.
	 ?>
</body>
</html>