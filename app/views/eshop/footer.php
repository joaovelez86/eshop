
	<footer id="footer" style="background-color: #fff;border-top: 1px solid lightgray"><!--Footer-->

		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>shop</h2>
							<p>Projecto Back-end, João Velez. <br> Php & mysql em MVC. <br> Jan 2022</p>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	
		
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
									<li><a href="<?=ROOT?>admin">Admin Back Office</a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="<?= ASSETS . THEME ?>js/jquery.js"></script>
	<script src="<?= ASSETS . THEME ?>js/bootstrap.min.js"></script>
	<script src="<?= ASSETS . THEME ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?= ASSETS . THEME ?>js/price-range.js"></script>
    <script src="<?= ASSETS . THEME ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= ASSETS . THEME ?>js/main.js"></script>
</body>
</html>