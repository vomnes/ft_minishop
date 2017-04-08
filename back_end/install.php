<?php
    function ft_mysqli_query($query, $connection, $action)
    {
      if (mysqli_query($connection, $query))
          echo "$action : [<span style=\"color:green;\">Success</span>]<br />";
      else
          echo "$action : [<span style=\"color:red;\">Error</span>]" . mysqli_error($connection) . "<br />";
    }
    function add_game($name, $picture, $price, $video, $details, $connection)
    {
      $add_game = "INSERT INTO games (name, picture, price, video, details)
                   VALUES ('$name', '$picture', '$price', '$video', '$details')";
      ft_mysqli_query($add_game, $connection, "Add game -> $name");
    }
    function add_user($login, $password, $family_name, $first_name, $email, $is_admin, $connection)
    {
      $add_user = "INSERT INTO users (login, password, family_name, first_name, email, is_admin)
                    VALUES ('$login', '$password', '$family_name', '$first_name', '$email', $is_admin)";
      ft_mysqli_query($add_user, $connection, "Add user -> $login");
    }
    function ft_create_database($connection)
    {
      $create = "CREATE DATABASE ft_minishop;";
      ft_mysqli_query($create, $connection, "Create database ft_minishop");
      $use_it = "USE ft_minishop";
      ft_mysqli_query($use_it, $connection, "Select ft_minishop database");
    }
    function ft_fill_database($connection)
    {
      $platforms = "CREATE TABLE platforms
      (
        id_platform INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255)
      )";
      ft_mysqli_query($platforms, $connection, " Create table platforms");
      $add_platform = "INSERT INTO platforms (name)
                       VALUES
                      ('PS4'),
                      ('Xbox'),
                      ('Steam'),
                      ('Battlenet'),
                      ('Swicth')";
      ft_mysqli_query($add_platform, $connection, "Add platforms");
      $games = "CREATE TABLE games
      (
        product_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255),
        picture VARCHAR(255),
        price INT,
        video VARCHAR(255),
        details VARCHAR(2000)
      )";
      ft_mysqli_query($games, $connection, "Create table games");
      add_game("my_game2", "my_picture.com", 99, "my_video.com", "Details", $connection);
      $users = "CREATE TABLE users
      (
          id_user INT PRIMARY KEY AUTO_INCREMENT,
          login VARCHAR(255),
          password VARCHAR(1000),
          family_name VARCHAR(255),
          first_name VARCHAR(255),
          email VARCHAR(255),
          is_admin TINYINT(1)
      )";
      ft_mysqli_query($users, $connection, "Create table users");
      add_user('admin', 'admin', 'admin', 'admin', 'admin', 1, $connection);
    }
    $connection = mysqli_connect('localhost', 'root', 'root');
    if (mysqli_connect_errno()) {
        die ("Connection failed: " . mysqli_connect_error() . "\n");
    }
    echo "Connected to server : [<span style=\"color:green;\">Success</span>]<br />";
    if (mysqli_select_db($connection, "ft_minishop"))
        echo "Database already exit<br />Select ft_minishop database: [<span style=\"color:green;\">Success</span>]<br />";
    else
    {
      ft_create_database($connection);
      ft_fill_database($connection);
    }
?>
