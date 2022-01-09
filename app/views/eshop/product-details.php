<?php $this->view("header", $data); ?>

<section>
	<div class="container">
		<div class="row"></div>

			<!--start product-->
			<div class="col-sm-9 padding-right">
				<?php if ($ROW) : ?>
					<div class="product-details">
						<!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?= ROOT . $ROW->image ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<a href=""><img src="<?= ROOT . $ROW->image ?>" alt=""></a>
									</div>
									<div class="item">
										<a href=""><img src="<?= ROOT . $ROW->image2 ?>" alt=""></a>
									</div>
									<div class="item">
										<a href=""><img src="<?= ROOT . $ROW->image3 ?>" alt=""></a>
									</div>
									<div class="item">
										<a href=""><img src="<?= ROOT . $ROW->image4 ?>" alt=""></a>
									</div>

								</div>

								<!-- Controls -->
								<a class="left item-control" href="#similar-product" data-slide="<">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right item-control" href="#similar-product" data-slide=">">
									<i class="fa fa-angle-right"></i>
								</a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information">
								<!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?= $ROW->description ?></h2>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><?= $ROW->price ?>€</span>
									<label>Quantidade:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Adiciona ao Carrinho
									</button>
								</span>
								<p><b>Disponibilidade:</b> Em Stock</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
							</div>
							<!--/product-information-->
						</div>
					</div>
					<!--/product-details-->



					<!--end product-->
				<?php else : ?>
					<div style="padding: 1em;background-color: grey;color:white;margin:1em;text-align: center;">
						<h2>O producto não foi encontrado.</h2>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>

<?php $this->view("footer", $data); ?>


<!--procurar código javascript-->