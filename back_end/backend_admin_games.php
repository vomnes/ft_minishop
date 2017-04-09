<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function show_table_games($cn)
{
  $query = "SELECT * FROM games";
  $query_result = mysqli_query($cn, $query);
  echo "<table>\n";
  echo "<tr>\n";
  echo "<th>Id</th>";
  echo "<th>Name</th>\n";
  echo "<th>Picture</th>\n";
  echo "<th>Price</th>\n";
  echo "<th>Video</th>\n";
  echo "<th>Details</th>\n";
  echo "<th>Platform</th>\n";
  echo "</tr>\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      $pict_link = "'https://" . $row['picture'] . "''";
      $video = "'https://" . $row['video']. "''";
      echo "<tr>\n";
      echo "<th>$row[product_id]</th>";
      echo "<th>$row[name]</th>\n";
      echo "<th><img src=$pict_link width=50px;></th>\n";
      echo "<th>$row[price]$</th>\n";
      echo "<th><iframe width=\"150\" height=\"100\" src=$video></iframe></th>\n";
      echo "<th>$row[details]</th>\n";
      echo "<th>$row[platform]</th>\n";
      echo "</tr>\n";
  }
  echo "</table>\n";
}
show_table_games($cn);
?>
