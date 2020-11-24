<?php
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
#Lager SQL-spørringens struktur
$sql = "SELECT * FROM medlemmer";

#forbereder spørringen
$stmt = $tilkobling->prepare( $sql );
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
    #Henter en rad om gangen fra databasen
    #Det legges til ett <tr>-element for hvert nytt medlem
    while( $row = $resultat->fetch_assoc() ) {
    ?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['fornavn']; ?></td>
        <td><?php echo $row['etternavn']; ?></td>
    </tr>
    <?php
    }
    # Lukk spørring
    $stmt->close();
    ?>
    </table>
    <?php
    # Avslutt databasetilkobling
    $tilkobling->close();
    ?>
