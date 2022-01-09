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
 
		<?php if($mode == "read"):?>

			<thead>
				<tr><th>Name</th><th>Subject</th><th>Email</th><th>Message</th><th>Date created</th><th>Action</th></tr>
			</thead>
			<tbody>

			<?php if(isset($messages) && is_array($messages)):?>
				<?php foreach($messages as $message):?>

					<tr style="position: relative;"><td><?=$message->name?></td><td><?=$message->subject?></td><td><?=$message->email?></td><td><?=$message->message?></td><td><?=date("Y-m-d H:i:s",strtotime($message->date))?></td>
	 
						<td>
							<a href="<?=ROOT?>admin/messages?delete=<?=$message->id?>">
							<i class="fa fa-trash-o"></i> Apaga
							</a>
						</td>
						
					</tr>
				<?php endforeach;?>
			<?php endif;?>

			<tr><td colspan="8"><?php Page::show_links();?></td></tr>

			</tbody>
		<?php elseif($mode == "delete_confirmed"):?>

			<div class="status alert alert-success">A mensagem foi apagada correctamente</div>
			<a href="<?=ROOT?>admin/messages">
			<input type="button" class="btn btn-success pull-right" value="Back to messages"/>
			</a>

		<?php elseif($mode == "delete" && is_object($messages)):?>
			
			<div class="status alert alert-danger">Tens a certeza que queres apagar esta mensagem??</div>
			
			<thead>
				<tr><th>Nome</th><th>Assunto</th><th>Email</th><th>Mensagem</th><th>Data de Criação</th><th>Acção</th></tr>
			</thead>
			<tbody>

				<tr style="position: relative;"><td><?=$messages->name?></td><td><?=$messages->subject?></td><td><?=$messages->email?></td><td><?=$messages->message?></td><td><?=date("Y-m-d H:i:s",strtotime($messages->date))?></td>
				</tr>
				<a href="<?=ROOT?>admin/messages?delete_confirmed=<?=$messages->id?>">
				<input type="button" class="btn btn-warning pull-right" value="Delete"/>
				</a>
			</tbody>

		<?php endif;?>


</table>
 

<?php $this->view("admin/footer",$data); ?>