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
      $dato = $_GET['dato'];

      //konverterer stringen som er lagret i $dato til en $tidsmarkering
      $$tidsmarkering = strtotime($dato);

      //dagens dato
      $idag = date("d.m.Y");

      function dagerMellomDatoer($$tidsmarkering, $idag){
        $differanse = strtotime($idag) - $$tidsmarkering;
        return abs(round($differanse /86400));
      }

      //finner differansen mellom de to datoene
      $datoDiff = dagerMellomDatoer($$tidsmarkering, $idag);

      //finner rest når delt på år
      $dager = $datoDiff % 365;

      //finner år
      $år = round($datoDiff/365);

      //hvis 'submit' er klikket, gjør følgende:
      if(isset($_GET['submit'])){
        echo  "År: " . $år . " og " . $dager . " dag(er).";
      }
     ?>
  </body>
</html>
