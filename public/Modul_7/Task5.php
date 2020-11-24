<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 5 - Sortering av interesser</title>
  </head>
  <body>
    <h1>Uthenting av aktiviteter fra database</h1>

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
# Lager SQL-spørringens struktur
$sql = "SELECT medlemmer.fornavn, medlemmer.etternavn, interesser.interessenavn
        FROM medlemmer, interesser, medlem_har_interesser
        WHERE medlemmer.ID = medlem_har_interesser.medlemsID
        AND interesser.ID = medlem_har_interesser.interesseID
        ORDER BY interesser.interessenavn";

# forbereder spørringen
$stmt = $tilkobling->prepare( $sql );
$stmt->execute();
$resultat = $stmt->get_result();

  ?>
  <!-- oppretter tableheaders-->
  <table>
  <tr>
      <th>Fornavn</th>
      <th>Etternavn</th>
      <th>Interesse</th>
  </tr>
  <?php
  #løkke som printer ut fornavn, etternavn og interessenavn for hvert medlem
  while( $row = $resultat->fetch_assoc() ) {
  ?>
  <tr>
      <td><?php echo $row['fornavn']; ?></td>
      <td><?php echo $row['etternavn']; ?></td>
      <td><?php echo $row['interessenavn']; ?></td>
  </tr>
<?php
  }

#Lukk spørring
$stmt->close();
?>
</table>
<?php
# Avslutt databasetilkobling
$tilkobling->close();
?>
</body>
</html>
