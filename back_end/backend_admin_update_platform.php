<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function update_platform($cn, $id, $new_name)
{
    $update_name = "UPDATE platforms SET name='$new_name' WHERE id_platform=$id";
    mysqli_query($cn, $update_name);
    header("Location: ../front_end/admin.php?action=platform_updated");
}
update_platform($cn, mysqli_real_escape_string($cn, $_POST['delete_game']), mysqli_real_escape_string($cn, $_POST['new_name']));
?>
