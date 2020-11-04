<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 5</title>
  </head>
  <body>
    <h1>Oppgave 5</h1>
    <form action="?" method="post">
      <label for="tittel">Tittel</label><br>
      <input id="tittel" name="tittel" placeholder="Tittel..." type="text"><br>
      <label for="innhold">Meldingsinnhold</label><br>
      <input id="innhold" name="innhold" placeholder="Skriv her..." type="text">
      <button name="submit" type="submit">Submit</button>
    </form>
    <?php
      //henter mailtittel fra post-request
      $tittel = $_POST['tittel'];

      //henter Meldingsinnhold fra post-request
      $innhold = $_POST['innhold'];

      //statisk variabel for avsender
      $header = "From: mailtest@php.no";

      //statisk variabel for mottager
      $mottager = "mb.neergaard@gmail.com";

      //sender mail om submit er trykket
      if(isset($_POST['submit'])){
        mail($mottager, $tittel, $innhold, $header);
        echo "Mail sendt.";
      }
     ?>
  </body>
</html>
