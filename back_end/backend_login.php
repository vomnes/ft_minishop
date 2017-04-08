<?php
    include("backend_insert.php");
    function auth($login, $passwd, $cn)
    {
      $query = "SELECT * FROM users";
      $query_result = mysqli_query($cn, $query);
      if ($login != '' && $passwd != '')
      {
        while ($row = mysqli_fetch_assoc($query_result))
        {
          if ($row['login'] === $login && $row['password'] === hash('whirlpool', $passwd))
              return TRUE;
        }
      }
      return FALSE;
    }
    session_start();
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    if (auth(protect_input($cn, $_POST['login_a']), protect_input($cn, $_POST['passwd_a']), $cn) == TRUE)
    {
      $_SESSION['loggued_on_user'] = protect_input($cn, $_POST['login_a']);
      header("Location: ../front_end/log.php?login_action=Success");
    }
    else
    {
      header("Location: ../front_end/log.php?login_action=Wrong_login_or_password");
    }
?>
