<?php include('standard_upper_html.php'); ?>
</div>
</center>
<div class="block" id="middle_block">
	<?php
	$up= ucfirst($_GET[platform]);
	echo "<T2>$up</T2>" ?>
<?php
	include('../back_end/backend_loop.php');
?>
</div>
</center>
<?php include('standard_bottom_html.php'); ?>
