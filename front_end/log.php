<?php $_SESSION['error_signin']="test d'erreur"; ?>
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
	<T2>Login</T2></br ></br>
	<div class="form"
		<form  action="../back_end/backend_login.php" method="POST">
			<T1>
				Login: <input type="text" name="login" id="log_input"/><br/ ><br />
				<pass>Password:</pass> <input type="password" name="passwd" id="pass_input"/><br/ ><br/ >
			</T1>
				<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
		</form>
		<?php echo $_SESSION['error_login'] ?>
	</div>
</br ></br ></br ><hr></br >
	<T1>If you don't have any account yet, please</T1><br />
	<T2>Sign in</T2></br ></br >
		<div class="form">
			<form  action="../back_end/backend_create_account.php" method="POST">
				<T1>
					Login*: <input type="text" name="login" id="log_input"/><br /><br />
					<pass>Password*:</pass> <input type="password" name="password" id="pass_input"/><br/><br />
					<pass_c>Confirm Password*:</pass_c> <input type="password" name="password_conf" id="pass_input"/><br/ ><br />
					Name*: <input type="text" name="first_name" id="log_input"/><br /><br />
					<family>Family Name*:</family> <input type="text" name="family_name" id="log_input"/><br /><br />
					E-mail*: <input type="text" name="email" id="log_input"/><br /><br />
				</T1>
					<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
				</form>
				<ERROR><?php echo $_SESSION['error_signin'] ?></ERROR>
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