<?php
  session_start();

  function confirmed_logged_in() {
    if(!isset($_SESSION['user_id'])) {
      redirect_to("admin_login.php");
    }
  }
?>
