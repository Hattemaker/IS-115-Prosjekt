<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- OPPGAVE 4 -->
	<form action="?" method="post">
		<label for="uname">Name: </label>
		<input type="text" name="uname"><br>
		<label for="add">Address: </label>
		<input type="text" name="add"><br>
		<label for="tlf">Phone Number: </label>
		<input type="text" name="tlf"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		$uname = $_POST['uname'];	//uname fra post blir lagret i $uname variabel
		$add = $_POST['add'];		//add fra post blir lagret i $add variabel
		$tlf = $_POST['tlf'];		//tlf fra post blir lagret i $tlf variabel


		if (isset($_POST['submit'])){	//sjekker om post-variabel har en verdi(submit)
			$var = false;		//oppretter en variabel som er satt til false
			if (empty($uname)){		//sjekker om $uname er tom. Hvis; setter $var til true og printer.
				echo "Name is missing<br>";
				$var = true;
			}
			if (empty($add)){		//sjekker om $add er tom. Hvis; setter $var til true og printer.
				echo "Address is missing<br>";
				$var = true;
			}
			if (empty($tlf)){		//sjekker om $tlf er tom. Hvis; setter $var til true og printer.
				echo "Phone is missing<br>";
				$var = true;
			}
			
			if ($var == false){		//sjekker om $var er false. Hvis; printer.
				echo "Everything is A-ok!!";
			}
		}
		 ?>
</body>
</html>