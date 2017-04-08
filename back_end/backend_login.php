<?php
$connection = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_query();
mysqli_select_db();
add_user($login, $password, $family_name, $first_name, $email, $is_admin, $connection);
?>
