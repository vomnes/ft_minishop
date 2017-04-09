<?php
    $nb = $_POST['number_product'];
    $id = $_GET['add_id'];
    header("Location: ../front_end/cart.php?add_id=$id&quantity=$nb");
?>
