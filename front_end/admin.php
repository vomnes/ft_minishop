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
                <pass_c>Delete Platform </pass_c> <input type="text" name="delete_category" id="pass_input"/>
              </T1>
                <input type="submit" name="submit" title="Delete it !" id="submit" value="Delete it !"/>
            </form>
              <?php echo $_GET['action'] ?>
            </div>
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
