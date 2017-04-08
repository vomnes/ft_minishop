<?php
    include("../back_end/backend_insert.php");
    function protect_input($cn, $input)
    {
      $protected = mysqli_real_escape_string($cn, $input);
      return $protected;
    }
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
    if ($_POST['login'] === "" || $_POST['password'] === "" || $_POST['family_name'] === "" || $_POST['first_name'] === "" || $_POST['email'] === "")
    {
      echo "Error input\n";
      return ;
    }
    if ($_POST['password'] !== $_POST['password_conf'])
    {
      echo "Wrong password confirmation\n";
      return ;
    }
    if (check_login_exit($cn, $_POST['login']) == FALSE)
    {
      print_r($_POST);
      add_user(protect_input($cn, $_POST['login']),
      protect_input($cn, $_POST['password']),
      protect_input($cn, $_POST['family_name']),
      protect_input($cn, $_POST['first_name']),
      protect_input($cn, $_POST['email']), 0, $cn);
      echo "User created<br />";
    }
    else
    {
      echo "Login already used<br />\n";
    }
?>
