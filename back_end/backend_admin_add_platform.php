<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function add_platforms($cn, $name)
{
  if ($name != "")
  {
    $add_platform = "INSERT INTO platforms (name) VALUES ('$name')";
    mysqli_query($cn, $add_platform);
    header("Location: ../front_end/admin.php?action=Platform_added");
    return ;
  }
  header("Location: ../front_end/admin.php?action=Platform_not_added");
}
add_platforms($cn, mysqli_real_escape_string($cn, $_POST['add_category']));
?>
