<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function add_game($name, $picture, $price, $video, $details, $platform, $cn)
{
  if ($name !== "" || $picture !== "" || $price !== "" || $video !== "" || $details !== "" || $platform !== "")
  {
    $add_game = "INSERT INTO games (name, picture, price, video, details, platform)
                     VALUES ('$name', '$picture', '$price', '$video', '$details', '$platform')";
    mysqli_query($cn, $add_game);
    header("Location: ../front_end/admin.php?action=Game_added");
  }
  else
  {
    header("Location: ../front_end/admin.php?action=Game_not_added");
  }
}
add_game(mysqli_real_escape_string($cn, $_POST['name']),
        mysqli_real_escape_string($cn, $_POST['picture']),
        mysqli_real_escape_string($cn, $_POST['price']),
        mysqli_real_escape_string($cn, $_POST['video']),
        mysqli_real_escape_string($cn, $_POST['details']),
        mysqli_real_escape_string($cn, $_POST['category']), $cn);
?>
