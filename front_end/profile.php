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
	<div id="nav-menu">
	<T1>
		<nav>
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./best.php">Best Seller</a></li>
				<li><a href="./profile.php">Profile</a></li>
				<li><a href="./cart.php">Cart</a></li>
				<li><a href="./log.php">Login</a></li>
			</ul>
		</T1>
		</nav>
	</div>
	</div>
<center class="container">

<div class="block  side_block" id="block_left">

	<br /><T2>Platform</T2><br /><br /><hr>
	<div class="links">
		<a href="./xbox.php">Xbox ONE</a><br /><hr>
		<a href="./play.php">PlayStation 4</a><br /><hr>
		<a href="./steam.php">Steam</a></li><br /><hr>
		<a href="./battle.php">Battle.net</a><br /><hr>
		<a href="./switch.php">Switch</a><br />
	</div>

</div>
<div class="block" id="middle_block">

	<T2>Your profile</T2></br ></br >
	<T1>If you want to modify your password :<T1><br /><br />
	<div class="form">
		<form  action="../back_end/backend_modif.php" method="POST">
			<T1>
				<log>Login:</log> <input type="text" name="login" id="log_input"/><br /><br />
				<pass_c>Old Password:</pass_c> <input type="password" name="old_pass" id="pass_input"/><br/><br />
				<pass_c>New Password:</pass_c> <input type="password" name="new_pass" id="pass_input"/><br/ ><br />
			</T1>
				<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
			</form>
			<?php echo $_SESSION['error_modify'] ?>
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
