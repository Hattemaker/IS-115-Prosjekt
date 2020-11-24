<?php
# starter session for å huske medlemmet som er logget inn
session_start();
include "inc/connection.inc.php";
$tilkobling = connectToDB();

# sjekk for at brukernavn og passord blir hentet ut
if ( !isset($_POST['brukernavn'], $_POST['passord']) ) {

  #hvis data ikke blir hentet ut: exit
  exit('Fyll ut både brukernavn og passord!');
}
# lager SQL-spørringens struktur
$sql = 'SELECT id, passord FROM medlemmer WHERE brukernavn = ?';

# Prepare SQL statement for å prevente SQL injection.
if ($stmt = $tilkobling->prepare($sql)) {

  # binder parametere (s = string, i = int, b = blob, etc)
	$stmt->bind_param('s', $_POST['brukernavn']);
	$stmt->execute();

  #lagre resultatet så vi kan se om brukeren eksisterer i databasen.
	$stmt->store_result();

  if ($stmt->num_rows > 0) {
  	$stmt->bind_result($id, $passord);
  	$stmt->fetch();

    #sjekker at brukeren finnes, så verifiser passordet
  	if ($_POST['passord'] === $passord) {

  		# oppretter session
  		session_regenerate_id();
  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $_POST['brukernavn'];
  		$_SESSION['id'] = $id;
  		header('Location: home.php');
  	}
    else {
  		  echo 'Ukorrekt passord!';
  	}
  }
  else {
  	echo 'Ukorrekt brukernavn!';
  }
$stmt->close();
}
?>
