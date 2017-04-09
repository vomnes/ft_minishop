<?php
session_start();
include('standard_upper_html.php');
?>
<div class="block" id="middle_block">
	<T2>Your actual cart :</T2></br ><br />
	<?php include('../back_end/backend_cart.php'); ?>
<?php
		if ($_SESSION['loggued_on_user'] != "")
		{
			echo '<form  action="../back_end/backend_validate_cart.php">
					<input type="submit" name="validate_cart" title="Buy Cart" id="submit" value="Buy Cart"/>
			</form>';
			echo '<form  action="../back_end/backend_clean_cart.php">
					<input type="submit" name="clean_cart" title="Clean Cart" id="submit" value="Clean Cart"/>
			</form>';
			echo '<form  action="../back_end/backend_delete_elem_cart.php" method="POST">
			<T1>Delete last product </T1>
					<input type="submit" name="delete_id" title="delete_id" id="submit" value="Delete"/>
			</form>';
			echo '<form  action="../back_end/backend_modify_elem_cart.php" method="POST">
			<T1>Modify quantity product - Select id : </T1>
					<select name=\"id_product\" size=\"1\">';
					$id = 0;
					while ($id < count($_SESSION['cart']))
					{
							echo "<option>$id</option>";
							$id++;
					}
					echo '</select><br/>
					<input type="submit" name="clean_cart" title="Clean Cart" id="submit" value="+"/>
					<input type="submit" name="clean_cart" title="Clean Cart" id="submit" value="-"/>
			</form>';
		}
		else
		{
			echo '<form  action="../front_end/log.php">
			<T1>You need to be login to edit and validate your cart</T1>
					<input type="submit" name="action" title="Buy Cart" id="submit" value="Login"/>
			</form>';
		}
?>
</div>
<?php
include('standard_bottom_html.php');
?>
