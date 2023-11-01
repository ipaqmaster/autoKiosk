<?php

class Login {
  protected bool $show_errors = TRUE;
  public Array $response = array();

  public function __construct() {
    $this->processLogin();

  }


  public function hasValidSession(): bool {
    if (isset($_SESSION)) {
      if (isset($_SESSION["valid"])) {
        if ($_SESSION["valid"] === true) {
          return true;
        }
      }
    }

    return false; // If we make it here, return false.
  }



  public function processLogin(): bool {

    if ($this->hasValidSession()) {
      return ($this->hasValidSession()); // Skip if already authenticated.
    }

    if (!empty($_POST)) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if (pam_auth($username, $password) ) {
        $_SESSION["valid"]    = true;      // Validate the session
        $_SESSION["username"] = $username; // Track the username
        return true;
      } else {
        echo "Login failure!";
        return false;
      }
    }
    return true; // Default return for no operation.
  }

  public function sendJsonResponseAndDie() {
    echo json_encode($this->response);
    die();
  }
}
?>
