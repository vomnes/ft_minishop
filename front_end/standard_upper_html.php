<?php
    session_start();
    if ($_SESSION['is_admin'] === 1)
    {
      // header("Location: ../front_end/admin.php");
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
      		<a href="./Xbox.php">Xbox ONE</a><br /><hr>
      		<a href="./PS4.php">PlayStation 4</a><br /><hr>
      		<a href="./Steam.php">Steam</a></li><br /><hr>
      		<a href="./Battle.php">Battle.net</a><br /><hr>
      		<a href="./Switch.php">Switch</a><br />
      	</div>
?>
