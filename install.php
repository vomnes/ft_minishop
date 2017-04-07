<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $connection = mysqli_connect($servername, $username, $password);
    if (!$conn)
    {
      die ("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
