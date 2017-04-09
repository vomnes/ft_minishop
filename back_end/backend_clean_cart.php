<?php
    session_start();
    $_SESSION['cart'] = "";
    $_SESSION['nb_elem'] = 0;
    header("Location: ../front_end/cart.php");
?>
