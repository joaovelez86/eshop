<?php $this->view("header",$data); ?>

<?php $this->view("slider",$data); ?>

<?php 

?>
	<section>
		<div class="container">
			<div class="row">
				<?php if(isset($_GET['mode']) && $_GET['mode'] == 'approved'):?>

	 				<center><h1>Obrigado por comprar conosco!</h1></center>
	 			<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'cancel'):?>

	 				<center><h1>Pagamento cancelado</h1></center>
	 			<?php elseif(isset($_GET['mode']) && $_GET['mode'] == 'error'):?>
	 				
	 				<center><h1>Erro! Pagamento sem sucesso!</h1></center>
	 			<?php endif;?>
			</div>
		</div>
	</section>
	
<?php $this->view("footer",$data); ?>

