<?php
function connectToDB(){
  # definerer konstanter for å koble til databasen
  define('MYSQL_VERT', 'db');
  define('MYSQL_BRUKER', 'dbuser');
  define('MYSQL_PASSORD', 'BACIT2020');
  define('MYSQL_DB', 'ergotests');

  # kobler til database med oppkoblingsdata
  $tilkobling = new mysqli(MYSQL_VERT, MYSQL_BRUKER, MYSQL_PASSORD, MYSQL_DB);
  if ( $tilkobling->connect_error ){
    die('Tilkoblingen til databasen feilet. Vennligst forsøk igjen senere.');
    exit();
  }
  return $tilkobling;
}
?>
