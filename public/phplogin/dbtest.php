<?php
#starter session for å huske medlemmet som er logget inn
session_start();

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

  if ( !isset($_POST['brukernavn'], $_POST['passord']) ) {
	#hvis data ikke blir hentet ut: exit
	exit('Fyll ut både brukernavn og passord!');
}
# Prepare SQL statement for å prevente SQL injection.
if ($stmt = $tilkobling->prepare('SELECT id, passord FROM Medlemmer WHERE brukernavn = ?')) {

# bind parametere (s = string, i = int, b = blob, etc)
	$stmt->bind_param('s', $_POST['brukernavn']);
	$stmt->execute();
# lagre resultatet så vi kan se om brukeren eksisterer i databasen.
	$stmt->store_result();

  if ($stmt->num_rows > 0) {
  	$stmt->bind_result($id, $passord);
  	$stmt->fetch();
#Sjekker at brukeren finnes, så verifiser passordet
  	# Note to self: bruk password_hash i registration filen to for å lagre hashed passord.
  	if ($_POST['passord'] === $passord) {
  		# Verification
  		#Create sessions
  		session_regenerate_id();
  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $_POST['brukernavn'];
  		$_SESSION['id'] = $id;
  		header('Location: home.php');
  	} else {
  		# Incorrect password
  		echo 'Ukorrekt passord!';
  	}
  } else {
  	# Incorrect username
  	echo 'Ukorrekt brukernavn!';
  }

	$stmt->close();
}
/*
#lager sql-spørringens struktur
  $sql = "SELECT * FROM Medlemmer WHERE betalt = ? ORDER BY ? DESC LIMIT ?";

#Steg 1: forbereder spørringen
  $stmt = $tilkobling->prepare($sql);

#Steg 2: kobler parameterene våre med SQL-spørringens struktur
  $stmt->bind_param( "isi", $betalt, $sortering, $begrensning );

#Steg 3: setter parametere, utfør spørringen og  henter resultat
  $betalt = 1;
  $sortering = "etternavn";
  $begrensning = 1;
  $stmt->execute();
  $resultat = $stmt->get_result();
 ?>
 <html>
     <head>
         <title>Medlemmer</title>
     </head>

     <body>
     <!-- Lager en tabell som viser medlemmene i databasen -->
     <table>
     <tr>
         <th>ID</th>
         <th>Fornavn</th>
         <th>Etternavn</th>
     </tr>
     <?php
     /* Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
        Det legges til ett <tr>-element for hvert nytt medlem

     while( $row = $resultat->fetch_assoc() ) {
     ?>
     <tr>
         <td><?php echo $row['ID']; ?></td>
         <td><?php echo $row['fornavn']; ?></td>
         <td><?php echo $row['etternavn']; ?></td>
     </tr>
     <?php
     }
     #Lukk spørring
     $stmt->close();
     ?>
     </table>
     <?php
     #Avslutt databasetilkobling
     $tilkobling->close();
     */?>
