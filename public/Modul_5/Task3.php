<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 3</title>
  </head>
  <body>
    <h1>Oppgave 3</h1>
    <form action="?" method="get">
      <input id="etternavn" name="etternavn" placeholder="Etternavn" type="text">
      <button name="submit" type="submit">Submit</button>
    </form>
      <?php
        //henter etternavn fra post og lagrer i en variabel
        $etternavn = $_GET['etternavn'];

        //legger noen html-tags til variabelen
        $nyttEtternavn = "<h1><b>" . $etternavn . "</h1></b>";

        //hvis submit blir trykket
        if (isset($_GET['submit'])) {
          echo "Innskrevet etternavn uten tags: <br>";

          //fjerner html-tags og printer etternavn
          echo strip_tags($nyttEtternavn);
        }
      ?>
    </form>
  </body>
</html>
