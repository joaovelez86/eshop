<?php $this->view("header", $data); ?>
<div style="text-align: center;">

	<?php if (isset($_GET['mode']) && $_GET['mode'] == 'approved') : ?>
		<h1>Obrigado por comprar conosco!</h1>
		<h4>O teu pedido foi concluído com sucesso!</h4>
		<br><br>

	<?php elseif (isset($_GET['mode']) && $_GET['mode'] == 'cancel') : ?>

		<center>
			<h1>Pagamento foi cancelado!</h1>
		</center>
	<?php elseif (isset($_GET['mode']) && $_GET['mode'] == 'error') : ?>

		<center>
			<h1>Algo correu mal! Pagamento Cancelado!</h1>
		</center>
	<?php else : ?>
		<center>
			<h1>Desculpa, algo está mal!</h1>
		</center>
	<?php endif; ?>

	<div>O que queres fazer agora?</div><br>
	<a href="<?= ROOT ?>shop">
		<input type="button" class="btn btn-warning" value="Continar na loja">
	</a>
	<a href="<?= ROOT ?>profile">
		<input type="button" class="btn btn-warning" value="Ver as tuas encomendas">
	</a>

	<br><br>

</div>
<?php $this->view("footer", $data); ?>