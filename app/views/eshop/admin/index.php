<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

          		<h3>Página principal da Admin.</h3>
           

          		 	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="fa fa-user"></span>
					  			<h3><?=get_payment_total()?> €</h3>
                  			</div>
					  			<p><?=get_payment_total()?> pagamentos até agora!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="fa fa-copy"></span>
					  			<h3><?=get_categories_count()?></h3>
                  			</div>
					  			<p>Tens <?=get_categories_count()?> categorias.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="fa fa-paste"></span>
					  			<h3><?=get_customer_count()?></h3>
                  			</div>
					  			<p>Tens <?=get_customer_count()?> clientes.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3><?=get_order_count()?></h3>
                  			</div>
					  			<p>Tens <?=get_order_count()?> encomendas recebidas.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3><?=get_admin_count()?></h3>
                  			</div>
					  			<p>Tens <?=get_admin_count()?> admins.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	

<?php $this->view("admin/footer",$data); ?>
      