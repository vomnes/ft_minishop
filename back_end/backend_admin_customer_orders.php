<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function delete_cart_customer($cn, $var)
{
  if ($var != "")
  {
    $del_platform = "DELETE FROM cart WHERE id_user='$var'";
    mysqli_query($cn, $del_platform);
    header("Location: ../front_end/admin.php?action=customer_cart_deleted");
  }
  else
  {
    header("Location: ../front_end/admin.php?action=customer_cart_not_deleted");
  }
}
delete_cart_customer($cn, mysqli_real_escape_string($cn, $_POST['id_customer']));
?>
