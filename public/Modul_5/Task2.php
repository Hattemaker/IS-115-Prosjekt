<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppgave 2</title>
  </head>
  <body>
    <h1>Oppgave 2</h1>
    <form action="?" method="get">
      <h3>Passordgenerator</h3>
      Få et psudorandom passord basert på ditt etternavn!<br>
      Alt du trenger å gjøre er å fylle ut ditt etternavn, så vil et passordforslag bli vist under. <br><br>
      <input id="psudopass" name="psudopass" placeholder="Etternavn" type="text" required>
      <button name="submit" type="submit">Submit</button>
    </form>
    <?php
      //kjøres hvis submit er trykket
      if(isset($_GET['submit'])){
        //henter psudopass fra get og lagres i en variabel
        $pspass = $_GET['psudopass'];

        //oppretter en stor bokstav og lagres i en variabel
        $big = chr(rand(65,90));

        //lager nytt passord bestående av $big, et random tall mellom 100-99999,
          //og en omsortert versjon av $pspass
        $newPass = $big . rand(100,99999) . str_shuffle($pspass);

        //setter max-lengde
        $maxLen = 8;

        //sjekker om det nye passordet er større enn max-lengde
        if(strlen($newPass) > $maxLen){
          //fjerner det som er over max-lengde om if=true
          $eightLen = substr($newPass, 0, 8);
            echo "<br><br>Passordforslag: " . $eightLen;
          }
        else{
            echo "<br><br>Passordforslag: " . $newPass;
          }
        }
     ?>
  </body>
</html>
