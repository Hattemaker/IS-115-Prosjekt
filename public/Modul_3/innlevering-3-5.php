<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- OPPGAVE 4 -->
		<?php
		$name = "Magnus";
		$time = date("H");
		date_default_timezone_set ("Europe/Oslo" );
		//Testet med en annen tidssone "Indian/Reunion", glemte å endre tilbake til "Europe/Oslo" før innlevering

		if (($time > 4) && ($time < 10)) {//sjekker om variabel $time er mellom 4 og 10. Hvis; printer
			echo "Good Morning, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo $time;
		}
		if (($time > 10) && ($time < 14)) {		//sjekker om variabel $time er mellom 10 og 14. Hvis; 											printer
			echo "Good Day, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo $time;
		}
		if (($time > 14) && ($time < 18)) {		//sjekker om variabel $time er mellom 14 og 18. Hvis; 											printer
			echo "Good Afternoon, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo $time;
		}
		if (($time > 18) && ($time < 20)) {		//sjekker om variabel $time er mellom 18 og 20. Hvis; 											printer
			echo "Good Evening, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo $time;
		}
		if (($time > 20) && ($time < 04)) {		//sjekker om variabel $time er mellom 20 og 04. Hvis; 											printer
			echo "Good Afternoon, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo $time;
		}
	//kunne vel egentlig ha brukt switch case her, men jeg gikk for flere if-statements
	//kalte variabelen $name istedenfor $fornavn
	//tok bare noen vilkårlige tidsperioder og satt det som morgen, ettermiddag, kveld osv.
		 ?>
</body>
</html>