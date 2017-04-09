<?php
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    session_start();
    $session_login = $_SESSION['loggued_on_user'];
    // echo $session_login;
    $login = mysqli_real_escape_string($cn, $_POST['login']);
    if ($login == $session_login)
    {
      $del_user = "DELETE FROM users WHERE login='$session_login'";
      mysqli_query($cn, $del_user);
      include ('../back_end/backend_logout.php');
    }
    else
    {
      header('Location: ../front_end/profile.php?action=Wrong_login');
    }
?>
