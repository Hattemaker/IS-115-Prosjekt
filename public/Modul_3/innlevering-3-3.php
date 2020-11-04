<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--OPPGAVE 3 -->
	 <form action="?" method="post">
	 	<label for="first">First Number: </label><br>
	 	<input type="number" name="first"><br><br>
	 	<label for="second">Second Number: </label><br>
	 	<input type="text" name="second"><br><br>
	 	<select name="operator" id="">
			<option>-- Velg Operator --</option>
			<option value="pluss">Pluss</option>
			<option value="minus">Minus</option>
			<option value="gjennomsnitt">Gjennomsnitt</option>
		</select>
	 	<input type="submit" name="submit" value="Submit"><br><br>
	 </form>
	 <?php 
	 	//$tall1 og $tall2 som er står i oppgaveteksten er endret til $result1 og $result2
	 	if (isset($_POST['submit'])){	//sjekker om post-variabel har en verdi(submit)
	 		$result1 = $_POST['first'];	//first fra post blir lagret i $result1 variabel
			$result2 = $_POST['second'];	//second fra post blir lagret i $result2 variabel
			$operator = $_POST['operator'];		//operator fra post blir lagret i $operator variabel

			switch ($operator) {	//kjører en switch-case med $operator
				case 'pluss':
					for ($i=0; $i < 11; $i++) { 	//for-løkke som looper igjennom tallene fra 0-10
						echo "Resultatet blir: ";
						echo $result1 + $result2;	//regner ut summen av $result1 og $result2
						echo "<br>";
						$result1++;		//legger til 1 på $result1
					}
					break;
				case 'minus':
					for ($i=0; $i < 11; $i++) { 	//for-løkke som looper igjennom tallene fra 0-10
						echo "Resultatet blir: ";
						echo $result1 - $result2;	//regner ut differansen mellom $result1 og $result2
						echo "<br>";
						$result1++;		//legger til 1 på $result1
					}
					break;
				case 'gjennomsnitt':
					for ($i=0; $i < 11; $i++) { 	//for-løkke som looper igjennom tallene fra 0-10
						echo "Resultatet blir: ";
						echo ($result1 + $result2)/2;	//regner ut gjennomsnittet til de to variablene
						echo "<br>";
						$result1++;		//legger til 1 på $result1
					}
					break;
				default:
					echo "You need to select an operator";		//default som kicker inn dersom ingen 												operator er valgt
			}
	 	}
	 	//Kan $tall2/$result2 være en annen datatype?
	 	//Ja, det kan den. String konverteres til tall om du gir den tall.
	  ?>
	 
</body>
</html>