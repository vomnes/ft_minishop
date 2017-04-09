<?php
session_start();
if ($_SESSION['loggued_on_user'] == "")
{
  echo "<li><a href=\"./log.php\">Login</a></li>";
}
else
{
  echo "<li><a href=\"./profile.php\">Profile</a></li>";
  echo "<li><a href=\"../back_end/backend_logout.php\">Logout</a></li>";
}
?>
