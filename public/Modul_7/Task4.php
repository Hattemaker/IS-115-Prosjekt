<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 4 - Uthenting fra database</title>
  </head>
  <body>
    <h1>Uthenting av aktiviteter fra database</h1>
    <h3>Velg ønsket start- og sluttdato:</h3>
      <form action="" method="post">
        <label for="startdato">Startdato:</label>
          <input type="date" id="startdato" name="startdato" />
          <?php $startdato = $_POST['startdato']; ?>

          <label for="sluttdato">Sluttdato:</label>
          <input type="date" id="sluttdato" name="sluttdato" />
          <?php $sluttdato = $_POST['sluttdato']; ?>

          <input type="submit" name="submit" value="submit">
      </form>
<?php
if (isset($_POST['submit'])) {

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
  $dagensDato = date('Y-m-d');
# Lager SQL-spørringens struktur
$sql = "SELECT * FROM aktiviteter WHERE (DATE(dato_start) BETWEEN '$dagensDato' AND '$sluttdato') ORDER BY dato_start ASC";

// forbereder spørringen
$stmt = $tilkobling->prepare( $sql );
$stmt->execute();
$resultat = $stmt->get_result();

# Sjekker om valgt dato er før dagens dato
if ($startdato < $dagensDato) {
  echo "Vennligst velg en dato tilsvarende eller etter dagens dato.";
}
else{
  ?>
  <!-- oppretter tableheaders-->
  <table>
  <tr>
      <th>ID</th>
      <th>Aktivitetsnavn</th>
      <th>Ansvarlig</th>
      <th>Dato</th>
      <th>Starttidspunkt</th>
  </tr>
  <?php
  while( $row = $resultat->fetch_assoc() ) {
  ?>
  <tr>
      <td><?php echo $row['ID']; ?></td>
      <td><?php echo $row['aktivitetsnavn']; ?></td>
      <td><?php echo $row['ansvarlig']; ?></td>
      <td><?php echo $row['dato_start']; ?></td>
      <td><?php echo $row['tidspunkt_start']; ?></td>
  </tr>
<?php
  }
}
#Lukk spørring
$stmt->close();
?>
</table>
<?php
# Avslutt databasetilkobling
$tilkobling->close();
}
?>
</body>
</html>
