<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Neo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="login">
      <h1>Login Neo Ungdomsklubb</h1>
      <form action="dbtest.php" method="post">
        <label for="brukernavn">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="brukernavn" placeholder="Brukernavn" id="brukernavn "required>
        <label for="passord">
        <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="passord" placeholder="Passord" id="passord" required>
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
