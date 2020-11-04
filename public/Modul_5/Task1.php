<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 1</title>
  </head>
  <body>
    <h1>Oppgave 1</h1>
    <form action="?" method="get">
      <input id="fornavn" name="fornavn" placeholder="Fornavn" type="text"><br>
      <input id="etternavn" name="etternavn" placeholder="Etternavn" type="text"><br>
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
      //kjøres dersom submit er trykket
      if (isset($_GET['submit'])) {
        //henter fornavn fra get-request og lagrer det i en variabel
        $fname = $_GET['fornavn'];

        //henter etternavn fra get-request og lagrer det i en variabel
        $lname = $_GET['etternavn'];

        //gjør om første bokstav til uppercase og printer resultatet
        echo "Fornavn: " . ucfirst($fname) . "<br>";
        //gjør om første bokstav til uppercase og printer resultatet
        echo "Etternavn: " . ucfirst($lname);
      }
      ?>
  </body>
</html>
