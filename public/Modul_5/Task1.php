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
      if (isset($_GET['submit'])) {
        $fname = $_GET['fornavn'];
        $lname = $_GET['etternavn'];
        echo "Fornavn: " . ucfirst($fname) . "<br>";
        echo "Etternavn: " . ucfirst($lname);
      }
      ?>
  </body>
</html>
