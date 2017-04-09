<?php
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    $nb = mysqli_real_escape_string($cn, $_POST['number_product']);
    $id = $_GET['add_id'];
    header("Location: ../front_end/cart.php?add_id=$id&quantity=$nb");
?>
