<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

#Definerer konstanter for å koble til databasen
  define('MYSQL_VERT', 'db');
  define('MYSQL_BRUKER', 'dbuser');
  define('MYSQL_PASSORD', 'BACIT2020');
  define('MYSQL_DB', 'ergotests');

#Kobler til database med oppkoblingsdata
  $tilkobling = new mysqli(MYSQL_VERT, MYSQL_BRUKER, MYSQL_PASSORD, MYSQL_DB);
  if ($tilkobling->connect_error)
  {
    die('Tilkoblingen til databasen feilet. Vennligst forsøk igjen senere.');
    exit();
  }

//Lager SQL-spørringens struktur
$stmt = 'SELECT * FROM Medlemmer WHERE id = ?';

//forbereder spørringen
$stmt = $tilkobling->prepare( $sql );
// In this case we can use the account ID to get the account info.
//$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
//$stmt->bind_result($passord, $epost, $mobilnr, $gate, $postnr, $poststed, $betalt);
$stmt->fetch();
$stmt->close();
$tilkobling->close();


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Neo Ungdomsklubb</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$passord?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$epost?></td>
					</tr>
          <tr>
						<td>Mobilnummer:</td>
						<td><?=$mobilnr?></td>
					</tr>
          <tr>
						<td>Gateadresse:</td>
						<td><?=$gate?></td>
					</tr>
          <tr>
						<td>Postnummer:</td>
						<td><?=$postnr?></td>
					</tr>
          <tr>
						<td>Poststed:</td>
						<td><?=$poststed?></td>
					</tr>
          <tr>
						<td>Kontingentstatus:</td>
						<td><?=$betalt?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
