<!--Faz roteamento para o header! app>views>header.php-->
<?php $this->view("header", $data);?>

<section id="form" style="margin-top: 5px;">
	<!--form-->
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-sm-4 col-sm-offset-1" style="float: none;display: inline-block;">
				<div class="login-form">
					<!--login form-->
					<h2>Login to your account</h2>
					<form action="#">
						<input type="text" placeholder="Name" />
						<input type="email" placeholder="Email Address" />
						<span>
							<input type="checkbox" class="checkbox">
							Keep me signed in

						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
					<br>
						<a href="<?php echo ROOT?>signup">Don't have an account? Signup here</a>
				</div>
				<!--/login form-->
			</div>


		</div>
	</div>
</section>
<!--/form-->

<!--Faz roteamento para o footer app>views>footer.php-->
<?php $this->view("footer", $data);?>