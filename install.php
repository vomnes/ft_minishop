<?php
    function ft_mysqli_query($query)
    {
      if (mysqli_query($connection, $query))
      {
          echo "$query : Success";
      }
      else
      {
          echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
    }
    function add_game($name, $picture, $price, $video, $details)
    {
      $add_game = "INSERT INTO games (name, picture, price, video, details)
                   VALUES ($name, $picture, $price, $video, $details)";
      ft_mysqli_query($add_game);
    }
    function add_user($login, $password, $family_name, $fisrt_name, $email)
    {
      $add_admin = "INSERT INTO users (login, password, family_name, fisrt_name, email, is_admin)
                    VALUES ($login, $password, $family_name, $fisrt_name, $email, 0)";
    }
    function ft_fill_database()
    {
      $platforms = "CREATE TABLE platforms
      {
        id_platform INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255)
      }";
      ft_mysqli_query($platforms);
      $add_platform = "INSERT INTO platforms (name)
                       VALUES
                      ("PS4"),
                      ("Xbox"),
                      ("Steam"),
                      ("Battlenet"),
                      ("Swicth")";
      ft_mysqli_query($add_platform);
      $games = "CREATE TABLE games
      {
        product_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255),
        picture VARCHAR(255),
        price INT,
        video VARCHAR(255),
        details VARCHAR(2000)
      }";
      ft_mysqli_query($games);
      add_game("my_game2", "http://my_picture.com", 99, "http://my_video.com", "Details xxxxxxxxxxxxxxx");
      $users = "CREATE TABLE users
      {
          id_user INT PRIMARY KEY AUTO_INCREMENT,
          login VARCHAR(255),
          password VARCHAR(1000),
          family_name VARCHAR(255),
          first_name VARCHAR(255),
          email VARCHAR(255),
          is_admin TINYINT(1)
      }";
      $add_admin = "INSERT INTO users (login, password, family_name, fisrt_name, email, is_admin)
                    VALUES ('admin', 'admin', 'admin', 'admin', 'admin', 1)";
      ft_mysqli_query($add_admin);
    }
    $connection = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno())
    {
      die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    echo "Connected successfully\n";
?>
