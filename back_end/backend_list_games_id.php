<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function list_games($cn)
{
  $query = "SELECT * FROM games";
  $query_result = mysqli_query($cn, $query);
  echo "<select name=\"delete_game\" value=\"delete_game\" size=\"0\">\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      echo "<option>$row[product_id]";
  }
  echo "</select>\n";
  echo "<br/><br />\n";
}
list_games($cn);
?>
