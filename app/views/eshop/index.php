<?php $this->view("header", $data); ?>

<?php $this->view("slider", $data); ?>

<section style="background: #BBD2C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #292E49, #536976, #BBD2C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
	<div class="container" style="padding-top: 15px;">
		<div class="row">

			<?php $this->view("sidebar.inc", $data); ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--Todos os artigos-->
					<h2 class="title text-center">Todos os Artigos</h2>

					<?php if (is_array($ROWS)) : ?>
						<?php foreach ($ROWS as $row) : ?>

							<?php $this->view("product.inc", $row); ?>

						<?php endforeach; ?>
					<?php endif; ?>

					<?php //show($segment_data)
					?>
				</div>
				<!--Todos os artigos-->

				<div class="recommended_items">
					<!--Artigos recomendadoss-->
					<h2 class="title text-center">Artigos recomendados de hoje</h2>

					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">

							<?php if (isset($Slider_ROWS) && is_array($Slider_ROWS)) : $num = 0 ?>

								<?php foreach ($Slider_ROWS as $Slider_ROW) : $num++ ?>
									<div class="item <?= ($num == 1) ? 'active' : ''; ?>">

										<?php if (is_array($Slider_ROW)) : ?>
											<?php foreach ($Slider_ROW as $row) : ?>

												<?php $this->view("product.inc", $row); ?>

											<?php endforeach; ?>
										<?php endif; ?>

									</div>
								<?php endforeach; ?>
							<?php endif; ?>


						</div>
						<!--/recommended_items-->

					</div>
				</div>
			</div>
</section>

<?php $this->view("footer", $data); ?>