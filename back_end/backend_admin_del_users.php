<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function delete_user($cn, $login)
{
    if ($login !== "" && $login !== "admin")
    {
      $del_user = "DELETE FROM users WHERE login='$login'";
      mysqli_query($cn, $del_user);
      header("Location: ../front_end/admin.php?action=user_deleted");
    }
    else if ($login === "admin")
    {
      header("Location: ../front_end/admin.php?action=no_allowed_to_delete_administrator");
    }
    else
    {
      header("Location: ../front_end/admin.php?action=wrong_input");
    }
}
delete_user($cn, mysqli_real_escape_string($cn, $_POST['login']));
?>
