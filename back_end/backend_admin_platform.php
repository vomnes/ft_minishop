<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function show_table_platforms($cn)
{
  $query = "SELECT * FROM platforms";
  $query_result = mysqli_query($cn, $query);
  echo "<table>\n";
  echo "<tr>\n";
  echo "<th>Id Platform</th>";
  echo "<th>Platform Name</th>\n";
  echo "</tr>\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      echo "<tr>\n";
      echo "<th>$row[id_platform]</th>";
      echo "<th>$row[name]</th>\n";
      echo "</tr>\n";
  }
  echo "</table>\n";
}
show_table_platforms($cn);
?>
