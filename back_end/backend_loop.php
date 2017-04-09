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

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
$query_result = connect_and_return("*", "games");
$url=curPageURL();
preg_match_all('/.*\/(.{0,}).php\.*/e', $url, $greped);
$platform = $greped[1][0];
$data = check_plateform($query_result, $platform);
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
	<T2 class=\"game_name\">$name</T2>	<T1 class=\"game_id\">$id</T1><br /><br /><br />
	<iframe class=\"game_video\" width=\"420\" height=\"250\" src=$video></iframe></br>
	<T1  class=\"game_details\">$details</T1></br>
	<T1  class=\"game_price\">$price</T1></br>
	</br><hr style=\"margin-top: 110px\">
	</div>";
	$n++;
}
?>
