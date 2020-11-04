<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="?" method="post">
	<label for="fname">First Name: </label><br>
	<input type="text" name="fname" id="fname" required value=
	<?php 
	$fname = $_POST['fname'];
	echo $fname;
	?>><br><br>
	
	<label for="lname">Last Name: </label><br>
	<input type="text" name="lname" id="lname" required value=
	<?php 
	$lname = $_POST['lname'];
	echo $lname;
	?>><br><br>

	<label for="add">Address: </label><br>
	<input type="text" name="add" id="add" required value=
	<?php 
	$add = $_POST['add'];
	echo $add;
	?>><br><br>

	<label for="phone"> Phone Number: </label><br>
	<input type="tel" name="phone" id="phone" required pattern="[0-9]{8}" value=
	<?php 
	$tlf = $_POST['phone'];
	echo $tlf;
	?>><br><br>

	<label for="mail">Email: </label><br>
	<input type="email" name="mail" id="mail" required value=
	<?php 
	$mail = $_POST['mail'];
	echo $mail;
	?>><br><br>

	<label for="dob">Birthdate: </label><br>
	<input type="date" name="dob" id="dob" min="1970-01-01" max="2005-12-31" required value=
	<?php 
	$dob = $_POST['dob'];
	echo $dob;
	?>><br><br>

	<label for="sx">Sex: </label><br>
	<select id="sx" name="sx" required>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		<option value="Other">Other</option>
	</select><br><br>

	<label for="inter">Interests: </label><br>
  		<input type="checkbox" name="inter" id="biking" value="Biking">
  		<label for="biking">Biking</label><br>
  		<input type="checkbox" name="biking" id="climbing" value="Climbing">
  		<label for="climbing">Climbing</label><br>
  		<input type="checkbox" name="climbing" id="skydive" value="Skydive">
  		<label for="skydive">Skydiving</label><br>
    	<input type="checkbox" name="wake" id="wake" value="Wakeboarding">
  		<label for="wake">Wakeboarding</label><br>
  		<input type="checkbox" name="surf" id="surf" value="Surfing">
  		<label for="surf">Surfing</label><br>
  		<input type="checkbox" name="skiing" id="skiing" value="Skiing">
  		<label for="skiing">Skiing</label><br><br>

  	<label for="act">Course Activities: </label><br>
  		<input type="checkbox" name="act" id="plc1" value="Placeholder1">
  		<label for="plc1">Placeholder 1</label><br>
 		<input type="checkbox" name="act" id="plc2" value="Placeholder2">
  		<label for="plc2">Placeholder 2</label><br>
  		<input type="checkbox" name="act" id="plc3" value="Placeholder3">
  		<label for="plc3">Placeholder 3</label><br>

  	<input type="submit" value="submit">
  	<?php 
  		if (isset($_POST['submit'])) {
  			echo "Your changes has been saved!";
  			echo "<br> Here is the new information: <br>";
  			foreach ($_POST as $key => $value) {
				echo "<br>";
				echo $value;
  		}
  	}
  	 ?>
</body>
</html>