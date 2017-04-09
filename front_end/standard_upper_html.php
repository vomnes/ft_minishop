<?php
    session_start();
    if ($_SESSION['is_admin'] === 1)
    {
      header("Location: ../front_end/admin.php");
    }
?>
    <html lang="fr">
    	<meta charset="UTF-8">
    <head>
    	<title>ft_minishop</title>
    	<link rel="stylesheet" type="text/css" href="minishop.css">
    	<link href="https://fonts.googleapis.com/css?family=Lobster|Press+Start+2P" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body>
    	<div class="header">
    	<img src="http://art42.fr/resources/42_logo_white.png" style="margin-left:20px; margin-top:7px"; width=70px;>
     	<T3><a href="./index.php">Ft_minishop</a></T3>
      <T1>
      <?php
          if ($_SESSION['loggued_on_user'] != "")
              echo "Hello " . $_SESSION['loggued_on_user'];
      ?>
      </T1>
    	<div id="nav-menu">
    	<T1>
    		<nav>
    			<ul>
    				<li><a href="./index.php">Home</a></li>
    				<li><a href="./best.php">Best Seller</a></li>
    				<li><a href="./cart.php">Cart</a></li>
            <?php
        				include('./login_logout_section.php');
            ?>
    			</ul>
    		</T1>
    		</nav>
    	</div>
    	</div>
      <center class="container">
      <div class="block  side_block" id="block_left">
      	<br /><T2>Platform</T2><br /><br /><hr>
      	<div class="links">
          <?php
          $cn = mysqli_connect('localhost', 'root', 'root');
          if (mysqli_connect_errno()) {
              die ("Connection failed: " . mysqli_connect_error() . "\n");
          }
          mysqli_select_db($cn, 'ft_minishop');
          function list_platformes($cn)
          {
            $query = "SELECT * FROM platforms";
            $query_result = mysqli_query($cn, $query);
            while ($row = mysqli_fetch_assoc($query_result))
            {
                $up = ucfirst($row[name]);
                echo "<a href='../front_end/products.php?platform=$row[name]'>$up</a><br /><hr>";
            }
          }
          list_platformes($cn);
          ?>
      	</div>
      </div>
