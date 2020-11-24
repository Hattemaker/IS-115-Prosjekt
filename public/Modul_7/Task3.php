<!DOCTYPE html>
<html>
<head>
	<title>Oppgave 3 - Registrering av nytt medlem i database</title>
</head>
<body>
<h1>Registrering av nytt medlem i Sportsklubb</h1>
<table>
	<!--formzzzz-->
<form action="" method="post">
	<label for="fname">Fornavn: </label><br>
	<input type="text" name="fornavn" id="fornavn" required placeholder="Ola"><br><br>

	<label for="lname">Etternavn: </label><br>
	<input type="text" name="etternavn" id="etternavn" required placeholder="Normann"><br><br>

  <label for="lname">Brukernavn: </label><br>
	<input type="text" name="brukernavn" id="brukernavn" required placeholder="Juksemaker"><br><br>

  <label for="lname">Passord: </label><br>
	<input type="password" name="passord" id="passord" required placeholder="********"><br><br>

  <label for="mail">Epost: </label><br>
	<input type="email" name="epost" id="epost" required placeholder="ola@normann.no"><br><br>

  <label for="phone">Mobilnummer: </label><br>
	<input type="tel" name="mobilnr" id="mobilnr" required pattern="[0-9]{8}" placeholder="12345678"><br><br>

	<label for="add">Adresse: </label><br>
	<input type="text" name="adresse" id="adresse" required placeholder="Bjørnsgate 35"><br><br>

  <label for="add">Postnummer: </label><br>
	<input type="text" name="postnr" id="postnr" required placeholder="1414"><br><br>

  <label for="add">Poststed: </label><br>
	<input type="text" name="poststed" id="poststed" required placeholder="Trollåsen"><br><br>


  <input type="submit" name="submit" value="submit">
</form>
</tbody>
</table>
</body>
</html>
<?php
if (isset($_POST['submit'])) {

// Lager SQL-spørringens struktur
$sql = "INSERT INTO medlemmer (fornavn, etternavn, brukernavn, passord, epost, mobilnr, gateadresse, postnr, poststed, betalt)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

#Definerer konstanter for å koble til databasen
  define('MYSQL_VERT', 'db');
  define('MYSQL_BRUKER', 'dbuser');
  define('MYSQL_PASSORD', 'BACIT2020');
  define('MYSQL_DB', 'ergotests');

#Kobler til database med oppkoblingsdata
  $tilkobling = new mysqli( MYSQL_VERT, MYSQL_BRUKER, MYSQL_PASSORD, MYSQL_DB );
  if ( $tilkobling->connect_error )
  {
    die('Tilkoblingen til databasen feilet. Vennligst forsøk igjen senere.');
    exit();
  }

// forbereder spørringen
$stmt = $tilkobling->prepare( $sql );

//Steg 2: kobler parametrene våre med SQL-spørringens struktur
$stmt->bind_param( "sssssisisi", $fornavn, $etternavn, $brukernavn, $passord, $epost, $mobilnr, $adresse, $postnr, $poststed, $betalt );

// Steg 3: setter parametre og utfører spørringen og henter resultatet
$fornavn    = $_POST['fornavn'];
$etternavn  = $_POST['etternavn'];
$brukernavn = $_POST['brukernavn'];
$passord    = $_POST['passord'];
$epost      = $_POST['epost'];
$mobilnr    = $_POST['mobilnr'];
$adresse    = $_POST['adresse'];
$postnr     = $_POST['postnr'];
$poststed   = $_POST['poststed'];
$betalt = 1;

if ( $stmt->execute() )
{
    echo "{$fornavn} registrert i databasen.";
}
else
{
    echo 'Error: ' . $tilkobling->error;
}

//Lukk spørring
$stmt->close();

// Avslutt databasetilkobling
$tilkobling->close();
}
 ?>
