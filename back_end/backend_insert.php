<?php
      function ft_mysqli_query($query, $connection, $action)
      {
        if (mysqli_query($connection, $query))
            return ;
        else
            exit ();
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
?>
