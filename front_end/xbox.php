<?php
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
	<img src="https://d37wg8gb8tk3bf.cloudfront.net/img/logos/xb1_logo.png"><br/><br />
<div class="platform_prod">
<?php
	$query_result = connect_and_return("*", "games");
	while ($row = mysqli_fetch_assoc($query_result))
	{
		print_r($row);
	};
?>

</div>
</center>
<br/ >

<hr id="line"/>
<p id="sign"/>
 © vomnes/jpeguet 2017
</p>

</body>
</html>
