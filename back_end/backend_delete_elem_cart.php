<?php
  session_start();
  $id = intval($_POST['id_to_delete']);
  unset($_SESSION['cart'][$_SESSION['nb_elem'] - 1]);
  $_SESSION['nb_elem']--;
  header("Location: ../front_end/cart.php");
?>
