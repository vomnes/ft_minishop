<?php
session_start();
include('standard_upper_html.php');
?>
<div class="block" id="middle_block">
	<T2>Your actual cart :</T2></br ><br />
	<?php
	$cn = mysqli_connect('localhost', 'root', 'root');
	if (mysqli_connect_errno()) {
	    die ("Connection failed: " . mysqli_connect_error() . "\n");
	}
	mysqli_select_db($cn, 'ft_minishop');
	echo "<table>\n";
	echo "<tr>\n";
	echo "<th width=100px;>Game Name</th>\n";
	echo "<th width=50px;>Picture</th>\n";
	echo "<th width=150px;>Price</th>\n";
	echo "<th width=150px;>Platform</th>\n";
	echo "<th width=150px;>Quantity</th>\n";
	echo "<th width=150px;>Total</th>\n";
	echo "</tr>\n";
	if ($_GET['add_id'] !== "")
	{
		$_SESSION['cart'] = $_GET['add_id'];
		$get_data = "SELECT * FROM games WHERE product_id=$_SESSION[cart]";
		$id_data = mysqli_query($cn, $get_data);
		$row = mysqli_fetch_assoc($id_data);
    $pict_link = "'https://" . $row['picture'] . "''";
		echo "<tr>\n";
		echo "<th width=100px;>$row[name]</th>\n";
		echo "<th width=50px;><img src=$pict_link width=50px;></th>\n";
		echo "<th width=150px;>$row[price] $</th>\n";
		echo "<th width=150px;>$row[platform]</th>\n";
		echo "<th width=150px;>1</th>\n";
		$total = intval($row[price]) * 1;
		echo "<th width=150px;>$total $</th>\n";
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<th width=100px;>$row[name]</th>\n";
		echo "<th width=50px;><img src=$pict_link width=50px;></th>\n";
		echo "<th width=150px;>$row[price] $</th>\n";
		echo "<th width=150px;>$row[platform]</th>\n";
		echo "<th width=150px;>2</th>\n";
		$total = intval($row[price]) * 2;
		echo "<th width=150px;>$total $</th>\n";
		echo "</tr>\n";
	}
	echo "<tr>\n";
	echo "<th height=200px; colspan=\"5\">Total</th>\n";
	echo "<th width=150px;>$total $</th>\n";
	echo "</tr>\n";
	echo "</table>\n";
?>
	<br />
	<form  action="../back_end/xxxx.php" method="POST">
			<input type="submit" name="clean_cart" title="OK" id="submit" value="Clean Cart"/>
			<input type="submit" name="validate_cart" title="OK" id="submit" value="Buy Cart"/>
	</form>
<?php echo "</div>\n";
include('standard_bottom_html.php');
?>
