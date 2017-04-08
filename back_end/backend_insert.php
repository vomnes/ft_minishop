<?php
      function ft_mysqli_query($query, $connection, $action)
      {
        if (mysqli_query($connection, $query))
            return ;
        else
            exit ();
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
      function connect_and_return($need, $from)
      {
        $cn = mysqli_connect('localhost', 'root', 'root');
        if (mysqli_connect_errno()) {
            die ("Connection failed: " . mysqli_connect_error() . "\n");
        }
        mysqli_select_db($cn, 'ft_minishop');
        $query = "SELECT $need FROM $from";
        return($query_result = mysqli_query($cn, $query));
      }
      function protect_input($cn, $input)
      {
        $protected = mysqli_real_escape_string($cn, $input);
        return $protected;
      }
?>
