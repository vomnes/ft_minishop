<?php
session_start();
include('standard_upper_html.php');
?>
<div class="block" id="middle_block">
	<T2>Your actual cart :</T2></br ><br />
	<?php include('../back_end/backend_cart.php'); ?>
	<form  action="../back_end/backend_clean_cart.php">
			<input type="submit" name="clean_cart" title="Clean Cart" id="submit" value="Clean Cart"/>
	</form>
	<form  action="../back_end/backend_validate_cart.php">
			<input type="submit" name="validate_cart" title="Buy Cart" id="submit" value="Buy Cart"/>
	</form>
<?php echo "</div>\n";
include('standard_bottom_html.php');
?>
