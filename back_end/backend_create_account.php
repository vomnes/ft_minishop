<?php
    include("backend_insert.php");
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    function check_login_exit($cn, $login)
    {
      $query = "SELECT login FROM users";
      $query_result = mysqli_query($cn, $query);
      while ($row = mysqli_fetch_assoc($query_result))
      {
        if ($row['login'] === $login)
            return TRUE;
      }
      return FALSE;
    }
    session_start();
    if ($_POST['login'] === "" || $_POST['password'] === "" || $_POST['family_name'] === "" || $_POST['first_name'] === "" || $_POST['email'] === "")
    {
      header("Location: ../front_end/log.php?action=Error_input");
    }
    else if ($_POST['password'] !== $_POST['password_conf'])
    {
      header("Location: ../front_end/log.php?action=Wrong_password_confirmation");
    }
    else if (check_login_exit($cn, $_POST['login']) == FALSE)
    {
      add_user(protect_input($cn, $_POST['login']),
      protect_input($cn, $_POST['password']),
      protect_input($cn, $_POST['family_name']),
      protect_input($cn, $_POST['first_name']),
      protect_input($cn, $_POST['email']), 0, $cn);
      header("Location: ../front_end/log.php?action=User_created");
    }
    else
    {
      header("Location: ../front_end/log.php?action=User_name_already_used");
    }
?>
