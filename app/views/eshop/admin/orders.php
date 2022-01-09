<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

<style type="text/css">
	
	.details{

		background-color: #eee;
		box-shadow: 0px 0px 10px #aaa;
		width: 100%;
		position: absolute;
		min-height: 100px;
		left: 0px;
		padding: 10px;
		z-index: 2;
	}

</style>
<table class="table table-striped table-advance table-hover">

	<thead>
		<tr><th>Encomenda nº</th><th>cliente</th><th>Data Encomenda</th><th>Total</th><th>Morada de entrega</th><th>Cidade/destrito</th><th>Contacto telefónico</th><th>Status</th><th>...</th></tr>
	</thead>
	<tbody onclick="show_details(event)">

		<?php if(isset($orders) && is_array($orders)):?>
		<?php foreach($orders as $order):?>

			<tr style="position: relative;"><td><?=$order->id?></td><td><a href="<?=ROOT?>profile/<?=$order->user->url_address?>"><?=$order->user->name?></a></td><td><?=date("jS M Y H:i a",strtotime($order->date))?></td><td><?=$order->total?>€</td><td><?=$order->delivery_address?></td><td><?=$order->state?></td><td><?=$order->mobile_phone?></td>
				<td>
					<?=is_paid($order)?>
				</td>
				<td>
					<i class="fa fa-arrow-down"></i>
					<div class="js-order-details details hide" >
						<a style="float: right;cursor: pointer;">Close</a>
						<h3>Encomenda #<?=$order->id?></h3>
						<h4>Cliente: <?=$order->user->name?></h4>
						
						<!--order details-->
						<div style="display: flex;">
							<table class="table" style="flex: 1;margin: 4px;">

								<tr><th>País</th><td><?=$order->country?></td></tr>
								<tr><th>cidade/destrito</th><td><?=$order->state?></td></tr>
								<tr><th>Morada entrega</th><td><?=$order->delivery_address?></td></tr>
							</table>
							<table class="table" style="flex: 1;margin: 4px;">
								<tr><th>Telefone fixo</th><td><?=$order->home_phone?></td></tr>
								<tr><th>Telemóvel</th><td><?=$order->mobile_phone?></td></tr>
								<tr><th>Date</th><td><?=$order->date?></td></tr>
								
							</table>
						</div>
						<hr>
						<h4>Sumário de Encomenda</h4>
						<table class="table">
							<thead>
								<tr><th>Quantidade</th><th>Descrição</th><th>Montante</th><th>Total</th></tr>
							</thead>	
							<?php if(isset($order->details) && is_array($order->details)):?>
								<tbody>
									<?php foreach($order->details as $detail):?>
										<tr><td><?=$detail->qty?></td><td><?=$detail->description?></td><td><?=$detail->amount?></td><td><?=$detail->total?></td></tr>
										
									<?php endforeach;?>
								</tbody>

							<?php else: ?>
								<div>Não foi possível encontrar detalhes para esta encomenda</div>
							<?php endif;?>
						</table>
						<h3 class="pull-right">Total: <?=$order->grand_total?>€</h3>
					</div>
				</td>
			</tr>
		<?php endforeach;?>
		<?php endif;?>

		<tr><td colspan="8"><?php Page::show_links();?></td></tr>

	</tbody>

</table>


<script type="text/javascript">
	
	function show_details(e){

		let row = e.target.parentNode;
		if(row.tagName != "TR")
			row = row.parentNode;

		let details = row.querySelector(".js-order-details");
		
		//todas as rows
		let all = e.currentTarget.querySelectorAll(".js-order-details");
		for (let i = 0; i < all.length; i++) {
			if(all[i] != details){
				all[i].classList.add("hide");
			}
		}

		if(details.classList.contains("hide")){
			details.classList.remove("hide");
		}else{
			details.classList.add("hide");
		}
	}

</script>

<?php $this->view("admin/footer",$data); ?>