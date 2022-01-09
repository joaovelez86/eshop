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
		<tr><th>Id Utilizador</th><th>Nome</th><th>Email</th><th>Data Criação</th><th>Contagem Encomendas</th><th>...</th></tr>
	</thead>
	<tbody>
		<?php if(isset($users) && is_array($users)):?>
			<?php foreach($users as $user):?>

				<tr style="position: relative;"><td><?=$user->id?></td><td><a href="<?=ROOT?>profile/<?=$user->url_address?>"><?=$user->name?></a></td><td><?=$user->email?></td><td><?=date("Y-m-d H:i:s",strtotime($user->date))?></td>

					<td>
						<?=$user->orders_count?>
					</td>
					<td>
						
					</td>
					
				</tr>
			<?php endforeach;?>
		<?php endif;?>
	</tbody>

</table>
 

<?php $this->view("admin/footer",$data); ?>