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
  <link rel="stylesheet" type="text/css" href="minishop.css">
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
          <br><br/><T4>ft_minishop - Administrator Area<T4></br ><hr>
          <?php echo "<ERROR>$_GET[action]</ERROR><br/>"; ?>
          <T3>Platforms Management</T3></br ><br/>
          <?php include('../back_end/backend_admin_platform.php'); ?>
              </br/><br/>
          <div class="form">
            <form  action="../back_end/backend_admin_add_platform.php" method="POST">
              <T1>
                <T2>Add Platform</T2><br/><input type="text" name="add_category" id="pass_input"/>  <br/>  <br/>
              </T1>
                <input type="submit" name="submit" title="Add" id="submit" value="Add"/><br/>
            </form>
        <hr>
            <form  action="../back_end/backend_admin_del_platform.php" method="POST">
              <T1>
                <T2>Delete Platform</T2><br/>
                <?php include('../back_end/backend_list_platform.php'); ?>
                    <br/><br/>
              </T1>
                <input type="submit" name="submit" title="Delete" id="submit" value="Delete"/>
            </form>
            <hr>
              <T2>Update Platform</T2><br/>
              <form  action="../back_end/backend_admin_update_platform.php" method="POST">
                <T1>
                  Select Platform   <?php list_platforms($cn, "id_platform"); ?><br/>
                  New name    <input type="text" name="new_name" id="pass_input"/> <br/>
                </T1>
                  <input type="submit" name="submit" title="Update" id="submit" value="Update"/>  <br/>
              </form>
            </div>
            <br/><hr><br/>
            <T3>Games Management</T3></br ><br/>
            <?php include('../back_end/backend_admin_games.php'); ?><br/>
            <T2>Add Game</T2></br >
            <form  action="../back_end/backend_admin_add_game.php" method="POST">
              <T1>
                Name : <input type="text" name="name" id="pass_input"/><br />
                <esc style="margin-left:-190px;">Picture link (without http://) : <input type="text" name="picture" id="pass_input"/><br />
                Price : <input type="text" name="price" id="pass_input"/><br />
                <esc style="margin-left:-310px;">Video link - Embed Youtube (without http://)  : <input type="text" name="video" id="pass_input"/><br />
                Details : <input type="text" name="details" id="pass_input"/><br />
                Platform : <?php list_platforms($cn, "name"); ?><br/><br />
              </T1>
                <input type="submit" name="submit" title="Add game" id="submit" value="Add game"/>
            </form><br/><hr><br/>
            <T2>Delete Game</T2></br>
            <form  action="../back_end/backend_admin_del_game.php" method="POST">
              <T1>
                Select game id
                <?php include('../back_end/backend_list_games_id.php'); ?><br />
              </T1>
                <input type="submit" name="submit" title="Delete game" id="submit" value="Delete game"/>
            </form><br/><hr><br/>
            <T2>Update data game</T2></br >
            <form  action="../back_end/backend_admin_update_game.php" method="POST">
              <T1>
              Select game id to update <?php list_games($cn); ?>
                Name : <input type="text" name="name" id="pass_input"/><br />
                <esc style="margin-left:-190px;"> Picture link (without http://) : <input type="text" name="picture" id="pass_input"/><br/>
                Price : <input type="text" name="price" id="pass_input"/><br />
                <esc style="margin-left:-320px;">Video link - Embed Youtube (without http://)  : <input type="text" name="video" id="pass_input"/><br />
                Details : <input type="text" name="details" id="pass_input"/><br />
                Platform : <?php list_platforms($cn, "name"); ?><br/><br />
              </T1>
                <input type="submit" name="submit" title="Update game" id="submit" value="Update game"/>
            </form>
            <br><hr><br>
            <T3>Users Management</T3></br ><br>
            <?php include ('../back_end/backend_admin_users.php'); ?> <br/><br>
            <form  action="../back_end/backend_admin_del_users.php" method="POST">
              <T1>
                <pass_c>Login to delete : </pass_c><input type="text" name="login" id="pass_input"/><br/><br/>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
            <br/><hr><br/>
            <T3>Cart Management - History</T3></br ><br>
            <?php include ('../back_end/backend_admin_cart.php'); ?><br><br />
            <form  action="../back_end/backend_admin_customer_orders.php" method="POST">
              <T1>
                <esc style="margin-left:-140px;">Delete customer orders - Select id_customer : <input type="text" name="id_customer" id="pass_input"/><br/><br/>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
            <form  action="../back_end/backend_admin_id_cart.php" method="POST">
              <T1>
              Delete cart - Select id_cart : <input type="text" name="id_cart" id="pass_input"/><br/><br/>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
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
