<?php include('standard_upper_html.php'); ?>
</div>
<div class="block" id="middle_block">

	<T2>Your profile</T2></br ></br >
	<T1>If you want to modify your password :<T1><br /><br />
	<div class="form">
		<form  action="../back_end/backend_modif.php" method="POST">
			<T1>
				<pass_c>Old Password:</pass_c> <input type="password" name="old_pass" id="pass_input"/><br/><br />
				<pass_c>New Password:</pass_c> <input type="password" name="new_pass" id="pass_input"/><br/ ><br />
			</T1>
				<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
			</form>
			<form  action="../back_end/backend_delete_account.php" method="POST">
				<T1>
					<ERROR style="color:red;">Delete Account</ERROR><br /><T1>Please, enter your login to confirm the deletion of your account</T1><br /><br />
					<input type="login" name="login" id="pass_input"/><br/><br />
				</T1>
					<input type="submit" name="submit" title="/!\ Delete Account /!\" id="submit" value="OK"/>
			</form>
			<?php echo $_GET['action'] ?>
		</div>
</div>
<?php include('standard_bottom_html.php'); ?>
