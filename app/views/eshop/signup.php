<!--Faz roteamento para o header! app>views>header.php-->
<?php $this->view("header", $data); ?>


<section id="form" style="margin-top:5px;">
	<!--form-->
	<div class="container">
		<div class="row" style="text-align: center;">

			<span style="font-size: 20px; color:red;"><?php check_error() ?></span>

			<div class="col-sm-4" style="float: none;display: inline-block;">
				<div class="signup-form">
					<!--sign up form-->
					<h2>New User Signup!</h2>
					<form method="post">
						<input name="full_name" value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : '';?>" type="text" placeholder="Full name" />
						<input name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>" type="email" placeholder="Email Address"/>
						<input name="password" type="password" placeholder="Password" autocomplete="" />
						<input name="password2" type="password" placeholder="Retype Password" autocomplete="" />
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>

<!--/form-->

<!--Faz roteamento para o footer app>views>footer.php-->
<?php $this->view("footer", $data); ?>