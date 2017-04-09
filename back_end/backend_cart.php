<?php
function add_elem_cart_session()
{
  session_start();
  if ($_SESSION['cart'] === "")
  {
    $_SESSION['cart'] = array();
    $_SESSION['nb_elem'] = 0;
  }
  if ($_GET['add_id'] != "")
  {
    $cn = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    mysqli_select_db($cn, 'ft_minishop');
    $get_data = "SELECT * FROM games WHERE product_id=$_GET[add_id]";
    $id_data = mysqli_query($cn, $get_data);
    $row = mysqli_fetch_assoc($id_data);
    $product_id = $_GET[add_id];
    $pict_link="https://" . $row[picture];
    $_SESSION['cart'][$_SESSION['nb_elem']] = array('name'=> $row[name],
                                  'product_id'=> $product_id,
                                  'picture'=> $pict_link,
                                  'price'=> $row[price],
                                  'platform'=> $row[platform],
                                  'quantity'=> $_GET[quantity],
                                  'total'=> intval($row[price]) * intval($_GET[quantity]));
    $_SESSION['nb_elem']++;
  }
}
function print_cart()
{
  session_start();
  if ($_GET['add_id'] !== "")
  {
    echo "<table class=\"cart\";>\n";
    echo "<tr>\n";
    echo "<th width=100px;>Product id</th>\n";
    echo "<th width=100px;>Game Name</th>\n";
    echo "<th width=50px;>Picture</th>\n";
    echo "<th width=150px;>Price</th>\n";
    echo "<th width=150px;>Platform</th>\n";
    echo "<th width=150px;>Quantity</th>\n";
    echo "<th width=150px;>Total</th>\n";
    echo "</tr>\n";
    $id = 0;
    $total = 0;
    while ($id < $_SESSION['nb_elem'])
    {
      echo "<th width=100px;>" . $id . "</th>\n";
      echo "<th width=100px;>" . $_SESSION[cart][$id][name] . "</th>\n";
      echo "<th width=50px;>" . "<img src=" . $_SESSION[cart][$id][picture] . " width=50px;>" . "</th>\n";
      echo "<th width=150px;>" . $_SESSION[cart][$id][price] . "</th>\n";
      echo "<th width=150px;>" . $_SESSION[cart][$id][platform] . "</th>\n";
      echo "<th width=150px;>" . $_SESSION[cart][$id][quantity] . "</th>\n";
      echo "<th width=150px;>" . $_SESSION[cart][$id][total] . "</th>\n";
      $total += $_SESSION[cart][$id][total];
      echo "</tr>\n";
      $id++;
    }
  }
  echo "<tr>\n";
  echo "<th height=200px; colspan=\"6\">Total</th>\n";
  echo "<th width=150px;>$total $</th>\n";
  echo "</tr>\n";
  echo "</table><br/>\n";
}
add_elem_cart_session(1);
print_cart();
?>
