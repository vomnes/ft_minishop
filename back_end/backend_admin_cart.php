<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function show_table_cart($cn)
{
  $query = "SELECT * FROM cart";
  $query_result = mysqli_query($cn, $query);
  echo "<table>\n";
  echo "<tr>\n";
  echo "<th>id_cart</th>";
  echo "<th>id_customer</th>";
  echo "<th>id_product</th>\n";
  echo "<th>price_product</th>\n";
  echo "<th>quantity</th>\n";
  echo "</tr>\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      echo "<tr>\n";
      echo "<th>$row[id_cart]</th>";
      echo "<th>$row[id_user]</th>";
      echo "<th>$row[id_product]</th>\n";
      echo "<th>$row[price_product]</th>\n";
      echo "<th>$row[quantity]</th>\n";
      echo "</tr>\n";
  }
  echo "</table>\n";
}
show_table_cart($cn);
?>
