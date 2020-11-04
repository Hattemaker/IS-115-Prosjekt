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
        $etternavn = $_GET['etternavn'];
        $nyttEtternavn = "<h1><b>" . $etternavn . "</h1></b>";
        if (isset($_GET['submit'])) {
          echo "Innskrevet etternavn uten tags: <br>";
          echo strip_tags($nyttEtternavn);
        }
      ?>
    </form>
  </body>
</html>
