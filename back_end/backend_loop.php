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

function check_plateform($query_result, $platform_check)
{
	$n = 0;
	while ($row = mysqli_fetch_assoc($query_result))
	{
		$game[$n]=$row;
		$n++;
	}
	$n = 0;
	$j = 0;
	while ($game[$n])
	{
		if ($game[$n]['platform'] == $platform_check){
			$good[$j] = $game[$n];
			$j++;
		}
		$n++;
	}
	return($good);
}
$query_result = connect_and_return("*", "games");
$data = check_plateform($query_result, $_GET['platform']);
$n = 0;
$len = count($data);
while ($n != $len)
{
	$price=$data[$n]['price'] . "$";
	$pict_link[$n]="'https://" . $data[$n]['picture'] . "''";
	$details = $data[$n]['details'];
	$name = $data[$n]['name'];
	$video = "'https://" . $data[$n]['video']. "''";
	$id = $data[$n]['product_id'];
	echo "<div class=\"product\">
	<img src=$pict_link[$n] width=\"200px\" class=\"game_img\">
	<T2 class=\"game_name\">$name</T2><br /><br /><br />
	<iframe class=\"game_video\" width=\"420\" height=\"250\" src=$video></iframe></br>
	<T1  class=\"game_details\">$details</T1></br>
	<T1  class=\"game_price\">$price</T1>
	<form action=\"../back_end/backend_admin_push_on_cart.php?add_id=$id\" method=\"POST\" id=\"submit_number\">
			<select name=\"number_product\" size=\"1\">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
			</select>
	<input type=\"submit\" name=\"submit\" title=\"Add to cart\" id=\"submit_add\" value=\"Add to cart\"/>
	</form>
	</br><hr style=\"margin-top: 135px\"><br />
	</div>";
	$n++;
}

?>
