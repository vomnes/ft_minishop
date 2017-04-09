<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function list_platformes($cn)
{
  $query = "SELECT * FROM platforms";
  $query_result = mysqli_query($cn, $query);
  echo "<select name=\"category\" value=\"category\" size=\"1\">\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      echo "<option>$row[name]";
  }
  echo "</select>\n";
}
list_platformes($cn);
?>
