<footer id="footer" style="height: 50vh;">
	<!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="companyinfo">
						<h2><span>e</span>shop</h2>
						<p>Projecto Back-end php & mysql em MVC.</p>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo ASSETS . THEME ?>images/home/iframe1.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>2021</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo ASSETS . THEME ?>images/home/iframe2.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>2021</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo ASSETS . THEME ?>images/home/iframe3.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>2021</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo ASSETS . THEME ?>images/home/iframe4.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>2021</h2>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="single-widget">
						<h2 style="color: darkorange;">Services</h2>
						<ul class="nav nav-pills nav-stacked">
							<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
								<li><a href="<?= ROOT ?>admin">Admin</a></li>
							<?php endif; ?>

						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

</footer>
<!--/Footer-->



<script src="<?php echo ASSETS . THEME ?>js/jquery.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/price-range.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/main.js"></script>
</body>

</html>