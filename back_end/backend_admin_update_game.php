<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function update_game($cn, $id, $name, $picture, $price, $video, $details, $platform)
{
    if ($name != "" || $picture != "" || $price != "" || $video != "" || $details != "" || $platform != "")
    {
      if ($name != "")
      {
        $update = "UPDATE games SET name='$name' WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      if ($picture != "")
      {
        $update = "UPDATE games SET picture='$picture' WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      if ($price != "")
      {
        $update = "UPDATE games SET price=$price WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      if ($video != "")
      {
        $update = "UPDATE games SET video='$video' WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      if ($details != "")
      {
        $update = "UPDATE games SET details='$details' WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      if ($platform != "")
      {
        $update = "UPDATE games SET platform='$platform' WHERE product_id=$id";
        mysqli_query($cn, $update);
      }
      header("Location: ../front_end/admin.php?action=game_updated");
    }
    else
    {
        header("Location: ../front_end/admin.php");
    }
}
update_game($cn,
mysqli_real_escape_string($cn, $_POST['delete_game']),
mysqli_real_escape_string($cn, $_POST['name']),
mysqli_real_escape_string($cn, $_POST['picture']),
mysqli_real_escape_string($cn, $_POST['price']),
mysqli_real_escape_string($cn, $_POST['video']),
mysqli_real_escape_string($cn, $_POST['details']),
mysqli_real_escape_string($cn, $_POST['delete_category']));
?>
