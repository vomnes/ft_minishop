<?php
    function ft_mysqli_query($query, $connection, $action)
    {
      if (mysqli_query($connection, $query))
          echo "$action : [<span style=\"color:green;\">Success</span>]<br />";
      else
          echo "$action : [<span style=\"color:red;\">Error</span>]" . mysqli_error($connection) . "<br />";
    }
    function add_game($name, $picture, $price, $video, $details, $platform, $connection)
    {
      $add_game = "INSERT INTO games (name, picture, price, video, details, platform)
                   VALUES ('$name', '$picture', '$price', '$video', '$details', '$platform')";
      ft_mysqli_query($add_game, $connection, "Add game -> $name");
    }
    function add_user($login, $password, $family_name, $first_name, $email, $is_admin, $connection)
    {
      $password = hash('whirlpool', $password);
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
        name VARCHAR(255),
      )";
      ft_mysqli_query($platforms, $connection, " Create table platforms");
      $add_platform = "INSERT INTO platforms (name)
                       VALUES
                      ('ps4'),
                      ('xbox'),
                      ('steam'),
                      ('battle'),
                      ('switch')";
      ft_mysqli_query($add_platform, $connection, "Add platforms");
      $games = "CREATE TABLE games
      (
        product_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255),
        picture VARCHAR(512),
        price INT,
        video VARCHAR(512),
        details VARCHAR(2000),
        platform VARCHAR(255)
      )";
      ft_mysqli_query($games, $connection, "Create table games");
      add_game("Halo", "www.halopedia.org/images/thumb/0/0e/H5_final_cover_art.png/300px-H5_final_cover_art.png", 70, "www.youtube.com/embed/Rh_NXwqFvHc", "Best game ever", "xbox", $connection);
      add_game("Fifa 17", "images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcoYBrJRe6ocDBW_8MGfBUlzYTrjKUmdO25Ts6oNYyGWAkYSxrvqcTDsmxyaK.F1IqrboD6wZ9D7PxkW.7f3yPwuleRxoJ5_eA7x9kcNQIDHZ19t8y8WF.M3NBp9LRmc.ZLDBr6fUv9AvtvXwJ1mvad8Yq5oyC5iYI48SK27sgadU-&w=200&h=300&format=jpg", 80, "www.youtube.com/embed/P9LHzVEPodg", "The same that\'s 16 but 17", "xbox", $connection);
      add_game("Fifa 17", "images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcoYBrJRe6ocDBW_8MGfBUlzYTrjKUmdO25Ts6oNYyGWAkYSxrvqcTDsmxyaK.F1IqrboD6wZ9D7PxkW.7f3yPwuleRxoJ5_eA7x9kcNQIDHZ19t8y8WF.M3NBp9LRmc.ZLDBr6fUv9AvtvXwJ1mvad8Yq5oyC5iYI48SK27sgadU-&w=200&h=300&format=jpg", 80, "www.youtube.com/embed/P9LHzVEPodg", "The same that\'s 16 but 17", "ps4", $connection);
      add_game("Fifa 17", "images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcoYBrJRe6ocDBW_8MGfBUlzYTrjKUmdO25Ts6oNYyGWAkYSxrvqcTDsmxyaK.F1IqrboD6wZ9D7PxkW.7f3yPwuleRxoJ5_eA7x9kcNQIDHZ19t8y8WF.M3NBp9LRmc.ZLDBr6fUv9AvtvXwJ1mvad8Yq5oyC5iYI48SK27sgadU-&w=200&h=300&format=jpg", 80, "www.youtube.com/embed/P9LHzVEPodg", "The same that\'s 16 but 17", "steam", $connection);
      add_game("MGS V", "upload.wikimedia.org/wikipedia/en/8/8f/Metal_Gear_Solid_V_The_Phantom_Pain_cover.png", 60, "www.youtube.com/embed/A9JV0EvCkMI", "Best infiltration game", "xbox", $connection);
      add_game("MGS V", "upload.wikimedia.org/wikipedia/en/8/8f/Metal_Gear_Solid_V_The_Phantom_Pain_cover.png", 60, "www.youtube.com/embed/A9JV0EvCkMI", "Best infiltration game", "ps4", $connection);
      add_game("OverWatch", "jeu.video/wp-content/uploads/2016/09/overwatch-jaquette.png", 40, "www.youtube.com/embed/FqnKB22pOC0", "Best Team play game ever", "battle", $connection);
      add_game("OverWatch", "jeu.video/wp-content/uploads/2016/09/overwatch-jaquette.png", 40, "www.youtube.com/embed/FqnKB22pOC0", "Best Team play game ever", "xbox", $connection);
      add_game("OverWatch", "jeu.video/wp-content/uploads/2016/09/overwatch-jaquette.png", 40, "www.youtube.com/embed/FqnKB22pOC0", "Best Team play game ever", "ps4", $connection);
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
