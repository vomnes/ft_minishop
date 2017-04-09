<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function delete_game($cn, $id)
{
    $del_game = "DELETE FROM games WHERE product_id=$id";
    mysqli_query($cn, $del_game);
    header("Location: ../front_end/admin.php?action=Game_deleted");
}
delete_game($cn, mysqli_real_escape_string($cn, $_POST['delete_game']));
?>
