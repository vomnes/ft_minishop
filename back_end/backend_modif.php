<?php
include("backend_insert.php");
session_start();
function change_pw($login, $oldpw, $newpw, $cn)
{
  $query = "SELECT * FROM users";
  $query_result = mysqli_query($cn, $query);
  if ($oldpw !== '' && $passwd !== '')
  {
    while ($row = mysqli_fetch_assoc($query_result))
    {
      if ($row['login'] === $login && $row['password'] === hash('whirlpool', $oldpw))
      {
          $newpw = hash('whirlpool', $newpw);
          $update_password = "UPDATE users SET password='$newpw' WHERE login='$login'";
          $query_result = mysqli_query($cn, $update_password);
          header("Location: ../front_end/profile.php?action=Password_updated");
          return ;
      }
    }
  }
  header("Location: ../front_end/profile.php?action=Wrong_input");
}
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
if ($_SESSION['loggued_on_user'] != '' && protect_input($cn, $_POST['old_pass']) != ''
&& protect_input($cn, $_POST['new_pass'] != ''))
    change_pw($_SESSION['loggued_on_user'], protect_input($cn, $_POST['old_pass']),
    protect_input($cn, $_POST['new_pass']), $cn);
else
    header("Location: ../front_end/profile.php?action=Error_input");
?>
