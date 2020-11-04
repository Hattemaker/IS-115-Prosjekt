<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Oppgave 3 - Konkurranse</h1>
	<?php 
		//Array med deltagere
		$deltagere = [	"<b>Deltager 1</b>" => 0,
						"<b>Deltager 2</b>" => 0,
						"<b>Deltager 3</b>" => 0,
						"<b>Deltager 4</b>" => 0,
						"<b>Deltager 5</b>" => 0,
						"<b>Deltager 6</b>" => 0,
						"<b>Deltager 7</b>" => 0,
						"<b>Deltager 8</b>" => 0,
						"<b>Deltager 9</b>" => 0,
						"<b>Deltager 10</b>" => 0];
		echo "Følgende deltagere er med i konkurransen: <br><br>";

		foreach (array_keys($deltagere) as $keys) {
			echo $keys . "<br>";
		}

		$poeng = 0;
		echo "<br> Alle deltagere starter med " . $poeng . " poeng før trekning. <br><br>";

		//foreach som delegerer en random int mellom 1 og 50 til hver av deltagerne
		foreach ($deltagere as $key => $value) {
			$deltagere[$key] = random_int(1, 50);
		}

		//while loop som holder styr på hvem som har den laveste poengsummen
		while (sizeof($deltagere) > 1) {
			$laveste = 50;
			foreach ($deltagere as $key => $value) {
			if ($deltagere[$key] < $laveste) {
				$laveste = $deltagere[$key];
				}
			}

		//søker opp hvilken deltager som har den laveste summen
		$fjern = array_search($laveste, $deltagere);

		//fjerner deltageren fra arrayet
		unset($deltagere[$fjern]);

		//printer resultatet
		echo $fjern . " fikk " . $laveste . " poeng, og er derfor ute av konkurrsansen. <br><br>";
		}
		
		//overkomplisert måte å hente ut vinneren fra arrayet
		$høyeste = 0;
		foreach ($deltagere as $key => $value) {
			if ($deltagere[$key] > $høyeste) {
				$høyeste = $deltagere[$key];
			}
		}
		//printer vinnerteksten
		$vinner = array_search($høyeste, $deltagere);
		echo "<b>Gratulerer " . $vinner . ". Du fikk " . $høyeste . " poeng og vant konkurransen.</b>";
		
		?>
</body>
</html>
<!--

	TODO
	Lag en sjekk for like tall, eliminer begge dersom lik


