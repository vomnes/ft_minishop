<?php
    function get_value_login($cn)
    {
      $user_login = $_SESSION['loggued_on_user'];
      $get_data = "SELECT id_user FROM users WHERE login='$user_login'";
      $id_data = mysqli_query($cn, $get_data);
      $row = mysqli_fetch_assoc($id_data);
      return $row['id_user'];
    }
    function validate_cart($cn)
    {
      session_start();
      $user_id = intval(get_value_login($cn));
      $id = 0;
      while ($id < $_SESSION['nb_elem'])
      {
        $product_id = intval($_SESSION[cart][$id][product_id]);
        $price = intval($_SESSION[cart][$id][price]);
        $quantity = intval($_SESSION[cart][$id][quantity]);
        $add_order = "INSERT INTO cart (id_user, id_product, price_product, quantity)
                     VALUES ($user_id, $product_id, $price, $quantity)";
        mysqli_query($cn, $add_order);
        $id++;
      }
    }
    session_start();
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    validate_cart($cn);
    header('Location: ../front_end/index.php');
    $_SESSION['cart'] = "";
    $_SESSION['nb_elem'] = 0;
?>
