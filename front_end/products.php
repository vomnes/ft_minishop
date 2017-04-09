<?php include('standard_upper_html.php'); ?>
</div>
</center>
<div class="block" id="middle_block">
	</br>
	<?php
	$up= ucfirst($_GET[platform]);
	echo "<center><T2>$up</T2></center>" ?>
</br>
<?php
	include('../back_end/backend_loop.php');
?>
</div>
</center>
<?php include('standard_bottom_html.php'); ?>
