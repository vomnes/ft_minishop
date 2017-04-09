<?php
if ($_SESSION['loggued_on_user'] != "")
{
		header("Location: ../front_end/index.php");
}
include('standard_upper_html.php');?>
</div>
<div class="block" id="middle_block">
	<T2>Login</T2></br ></br>
	<div class="form">
		<form  action="../back_end/backend_login.php" method="POST">
			<T1>
				Login: <input type="text" name="login_a" id="log_input"/><br/ ><br />
				<pass>Password:</pass> <input type="password" name="passwd_a" id="pass_input"/><br/ ><br/ >
			</T1>
				<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
		</form>
		<ERROR><?php echo $_GET['login_action'] ?></ERROR>
	</div>
</br ></br ></br ><hr></br >
	<T1>If you don't have any account yet, please</T1><br />
	<T2>Sign in</T2></br ></br >
		<div class="form">
			<form  action="../back_end/backend_create_account.php" method="POST">
				<T1>
					Login*: <input type="text" name="login" id="log_input"/><br /><br />
					<pass>Password*:</pass><input type="password" name="password" id="pass_input"/><br/><br />
					<pass_c>Confirm Password*:</pass_c><input type="password" name="password_conf" id="pass_input"/><br/ ><br />
					Name*: <input type="text" name="first_name" id="log_input"/><br /><br />
					<family>Family Name*:</family> <input type="text" name="family_name" id="log_input"/><br /><br />
					E-mail*: <input type="text" name="email" id="log_input"/><br /><br />
				</T1>
					<input type="submit" name="submit" title="OK" id="submit" value="OK"/>
				</form>
				<ERROR><?php echo $_GET['action'] ?></ERROR>
			</div>
</div>
<?php include('standard_bottom_html.php'); ?>
