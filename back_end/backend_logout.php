<?php
    session_start();
    if ($_SESSION['loggued_on_user'] != "")
    {
      $_SESSION['loggued_on_user'] = "";
      $_SESSION['is_admin'] = 0;
      header("Location: ../front_end/index.php");
    }
?>
