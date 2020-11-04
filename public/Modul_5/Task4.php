<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 4</title>
  </head>
  <body>
    <h1>Oppgave 4</h1>
    <form action="?" method="get">
      <label for="dato">Velg din fødselsdag</label><br>
      <input type="date" name="dato" value="dd.mm.yyyy" required><br>
      <button name="submit" type="submit">Submit</button>
    </form>
    <?php
      //henter ut innført dato via GET og lagrer det i en variabel
      $fdato = $_GET['dato'];

      //konverterer stringen som er lagret i $fdato til et timestamp
      $timestamp = strtotime($fdato);

      //dagens dato
      $idag = date("d.m.Y");

      function dagerMellomDatoer($timestamp, $idag){
        $differanse = strtotime($idag) - $timestamp;
        return abs(round($differanse /86400));
      }

      //finner differansen mellom de to datoene
      $datoDiff = dagerMellomDatoer($timestamp, $idag);

      //finner rest når delt på år
      $dager = $datoDiff % 365;

      //finner år
      $year = round($datoDiff/365);

      //hvis 'submit' er klikket, gjør følgende:
      if(isset($_GET['submit'])){
        echo  "År: " . $year . " og " . $dager . " dag(er).";
      }
     ?>
  </body>
</html>
