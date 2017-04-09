<?php
    session_start();
    if ($_SESSION['is_admin'] === 0)
    {
      header("Location: ../front_end/index.php");
    }
?>
<html lang="fr">
  <meta charset="UTF-8">
<head>
  <title>ft_minishop</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Press+Start+2P" rel="stylesheet">
</head>
<body>
  <div class="header">
  <img src="http://art42.fr/resources/42_logo_white.png" style="margin-left:20px; margin-top:7px"; width=70px;>
  <T3><a href="./index.php">ft_minishop</a></T3>
  <div id="nav-menu">
  <T1>
    <nav>
      <ul>
        <li><a href="../back_end/backend_logout.php">Admin Session - Logout</a></li>
      </ul>
    </T1>
    </nav>
  </div>
  </div>
  <center class="container">
    <div>
      <div class="block" id="middle_block">
          <T2>ft_minishop - Administrator Area</T2></br >
          <?php echo "<ERROR>$_GET[action]</ERROR><br/>"; ?>
          <T1>Platforms Management</T1></br >
          <?php include('../back_end/backend_admin_platform.php'); ?>
          <div class="form">
            <form  action="../back_end/backend_admin_add_platform.php" method="POST">
              <T1>
                <pass_c>Add Platform </pass_c> <input type="text" name="add_category" id="pass_input"/>
              </T1>
                <input type="submit" name="submit" title="Add it !" id="submit" value="Add it !"/>
            </form>
            <form  action="../back_end/backend_admin_del_platform.php" method="POST">
              <T1>
                <pass_c>Delete Platform </pass_c>
                <?php include('../back_end/backend_list_platform.php'); ?>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
            <T1>
              <pass_c>Update Platform Name </pass_c>
              <form  action="../back_end/backend_admin_update_platform.php" method="POST">
                <T1>
                  <pass_c>Select Platform </pass_c> <?php list_platforms($cn, "id_platform"); ?><br/>
                  <pass_c>New name </pass_c> <input type="text" name="new_name" id="pass_input"/>
                </T1>
                  <input type="submit" name="submit" title="Update it !" id="submit" value="Update it !"/>
              </form>
            </T1>
            </div>
            <T1>Games Management</T1></br >
            <?php include('../back_end/backend_admin_games.php'); ?>
            <T1>Add Game</T1></br >
            <form  action="../back_end/backend_admin_add_game.php" method="POST">
              <T1>
                <pass_c>Name</pass_c> <input type="text" name="name" id="pass_input"/><br />
                <pass_c>Picture link (without http://)</pass_c> <input type="text" name="picture" id="pass_input"/><br />
                <pass_c>Price</pass_c> <input type="text" name="price" id="pass_input"/><br />
                <pass_c>Video link - Embed Youtube (without http://) </pass_c> <input type="text" name="video" id="pass_input"/><br />
                <pass_c>Details</pass_c> <input type="text" name="details" id="pass_input"/><br />
                <pass_c>Platform</pass_c> <?php list_platforms($cn, "name"); ?><br/><br />
              </T1>
                <input type="submit" name="submit" title="Add game" id="submit" value="Add game"/>
            </form>
            <T1>Delete Game</T1></br >
            <form  action="../back_end/backend_admin_del_game.php" method="POST">
              <T1>
                <pass_c>Select game id</pass_c>
                <?php include('../back_end/backend_list_games_id.php'); ?>
              </T1>
                <input type="submit" name="submit" title="Delete game" id="submit" value="Delete game"/>
            </form>
            <T1>Update data game</T1></br >
            <form  action="../back_end/backend_admin_update_game.php" method="POST">
              <T1>
                <pass_c>Select game id to update</pass_c> <?php list_games($cn); ?>
                <pass_c>Name</pass_c> <input type="text" name="name" id="pass_input"/><br />
                <pass_c>Picture link (without http://)</pass_c> <input type="text" name="picture" id="pass_input"/><br />
                <pass_c>Price</pass_c> <input type="text" name="price" id="pass_input"/><br />
                <pass_c>Video link - Embed Youtube (without http://) </pass_c> <input type="text" name="video" id="pass_input"/><br />
                <pass_c>Details</pass_c> <input type="text" name="details" id="pass_input"/><br />
                <pass_c>Platform</pass_c> <?php list_platforms($cn, "name"); ?><br/><br />
              </T1>
                <input type="submit" name="submit" title="Update game" id="submit" value="Update game"/>
            </form>
            <T1>Users Management</T1></br >
            <?php include ('../back_end/backend_admin_users.php'); ?>
            <form  action="../back_end/backend_admin_del_users.php" method="POST">
              <T1>
                <pass_c>Login to delete </pass_c> <input type="text" name="login" id="pass_input"/><br/><br/>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
            <T1> Management</T1></br >
      </div>
    </div>
  </center>
  <br/ >

  <hr id="line"/>
  <p id="sign"/>
   © vomnes/jpeguet 2017
  </p>
  </body>
</html>
