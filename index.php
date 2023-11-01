<?php
  session_start();
  require_once "App/Login.php";
  $login = new Login();
?>

<!DOCTYPE html>
<html id="html" lang="en" class="main">
  <head>
  </head>

  <body>
    <form name="input" action="index.php" method="post" <?php if($login->hasValidSession()) { echo 'hidden=""';}?>>
      Username: <input type="text" name="username" />
      <br/>
      Password: <input type="password" name="password" />
      <input type="submit" value="Submit" />
    </form>
    <div>
    You're logged in as: <?php echo $_SESSION["username"]; ?>
    </div>
  </body>
</html>
