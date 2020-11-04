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
      if(isset($_GET['submit'])){
        $pspass = $_GET['psudopass'];
        $big = chr(rand(65,90));
        $newPass = $big . rand(100,99999) . str_shuffle($pspass);
        $maxLen = 8;
        $minLen = 1;
        if(strlen($newPass) > $maxLen){
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
<!--
if(preg_match('/[A-Z]/', $newShuffPass){

}
