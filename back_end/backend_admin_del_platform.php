<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function delete_platforms($cn, $name)
{
  if ($name != "")
  {
    $del_platform = "DELETE FROM platforms WHERE name='$name'";
    mysqli_query($cn, $del_platform);
    header("Location: ../front_end/admin.php?action=Platform_deleted");
  }
  else
  {
    header("Location: ../front_end/admin.php?action=Platform_not_deleted");
  }
}
delete_platforms($cn, mysqli_real_escape_string($cn, $_POST['delete_category']));
?>
