<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--OPPGAVE 1 -->
	<form action="?" method="post">
		<label for="fname">First Name: </label><br>
		<input type="text" id="fname" name="fname"> <br><br>
		<label for="age">Age: </label><br>
		<input type="text" id="age" name="age"><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
	</form>
	<?php 
	if (isset($_POST['submit'])) {		//sjekker om post-variabel har en verdi (submit)
		$firstname = $_POST['fname'];
		$age = $_POST['age'];
	 	
	 	//if-statement for å sjekke om alder er over eller under 18
	 	if ($age < 18) {
	 		echo "$firstname er $age og dermed ikke myndig.</br>";
	 	}
	 	else {
	 	 	echo "$firstname er $age og dermed myndig.</br>";
	 	}

	 	//switch-case for å printe ut info om personen i henhold til aldersgruppe
	 	switch ($age) {
	 		case $age >= 13 && $age <=19:
	 			echo "$firstname er en tenåring. </br>";
	 			break;
	 		case $age > 20:
	 			echo "$firstname kan lovlig handle høyere enn 20% på polet.</br>";
	 			break;
	 	}
	 } ?>


	 <br><br><br>
	 <!--OPPGAVE 2 -->
	 <?php 

	 	$sum = 0;	//oppretter en variabel $sum med verdi 0
	 	for ($i = 0; $i < 10; $i++){	//for-løkke som looper igjennom tallene fra 0-9
	 		echo "$i <br>";
	 		$sum = $sum + $i;	//legger til verdien av $i til $sum for hver gjennomkjøring av løkken
	 	}
	 	echo "<br> Juhuu, ferdig å telle! Summen av tallene ble: $sum";	//printer ut summen av løkken
	  ?>


	  <br><br><br>

</body>
</html>