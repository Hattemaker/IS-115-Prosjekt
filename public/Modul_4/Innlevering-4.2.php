<!DOCTYPE html>
<html>
<head>
	<title>Oppgave 2, Overskriving av matriser</title>
</head>
<body>
	<h1>Oppgave 2, Overskriving av matriser</h1>
	<?php 
		//oppretter et array (0-9) og fyller dette med jibberish
		$array = [	"ost", 
					"kjeks",
					"vin",
					"elefant",
					"kube",
					"flosshatt",
					"triangel",
					"nesehorn",
					"guacamole",
					"nesehårtrimmer"];

		//oppretter et array for erstatning av partallindexer
		$replaceEven = [0 => "kjegle",
						2 => "kremmer", 
						4 => "kålrot", 
						6 => "kvalitetstid", 
						8 => "kesamkor"];

		//oppretter et array for erstatning av oddetallindexer
		$replaceOdd = [	1 => "prest",
						3 => "protese", 
						5 => "pyjamas", 
						7 => "pyongyang",
						9 => "paraglider"];

	 ?>
	 <!-- Bruker <pre> for å formattere det til preformatted text for å gjøre det mer leselig-->
	 <pre> <?php print_r($array); ?></pre>

<br><br><br>
	<!-- Erstatter verdier i gammelt array med verdier fra to nye arrays -->
	<?php $newArray = array_replace($array, $replaceEven, $replaceOdd); ?>

	<pre><?php print_r($newArray); ?></pre>

	<?php 
		
		$newKeys = array_keys($newArray);
		foreach ($newKeys as $key => $value) {
			$newKeys[$key] = $value + 10;
		}
		$newSet = array_combine($newKeys, $newArray);
		foreach ($newSet as $set => $value) {
			echo "Nøkkel: $set har verdi: $value <br>";
		}
	 ?>
</body>
</html>