<?php
$cn = mysqli_connect('localhost', 'root', 'root');
if (mysqli_connect_errno()) {
    die ("Connection failed: " . mysqli_connect_error() . "\n");
}
mysqli_select_db($cn, 'ft_minishop');
function show_table_users($cn)
{
  $query = "SELECT * FROM users";
  $query_result = mysqli_query($cn, $query);
  echo "<table>\n";
  echo "<tr>\n";
  echo "<th>Login</th>";
  echo "<th>Password</th>\n";
  echo "<th>Family name</th>\n";
  echo "<th>First name</th>\n";
  echo "<th>email</th>\n";
  echo "<th>Is admin ?</th>\n";
  echo "</tr>\n";
  while ($row = mysqli_fetch_assoc($query_result))
  {
      $pict_link = "'https://" . $row['picture'] . "''";
      $video = "'https://" . $row['video']. "''";
      echo "<tr>\n";
      echo "<th>$row[login]</th>";
      echo "<th>Encrypted</th>\n";
      echo "<th>$row[family_name]$</th>\n";
      echo "<th>$row[first_name]</th>\n";
      echo "<th>$row[email]</th>\n";
      if ($row['is_admin'] == 0)
          echo "<th>No</th>\n";
      else
        echo "<th>Yes</th>\n";
      echo "</tr>\n";
  }
  echo "</table>\n";
}
show_table_users($cn);
?>
