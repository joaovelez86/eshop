<?php $this->view("header",$data); ?>

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contacta-<strong>nos</strong></h2>    			    				    				
					
				</div>			 		
			</div> 
 			
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Entra em Contacto</h2>

	    				<?php if(is_array($errors) && count($errors)>0):?>
	    					<?php foreach ($errors as $error):?>
	    						<div class="status alert alert-danger" ><?=$error?></div>
	    					<?php endforeach;?>
	    				<?php endif;?>
	    				<?php if(isset($_GET['success'])):?>
	    					<div class="status alert alert-success">Messagem enviada correctamente.</div>
	    				<?php endif;?>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name" value="<?=isset($POST['name'])? $POST['name']:''?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email" value="<?=isset($POST['email'])? $POST['email']:''?>">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject" value="<?=isset($POST['subject'])? $POST['subject']:''?>">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"><?=isset($POST['subject'])? $POST['subject']:''?></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Enviar" style=" border-radius: 10px;">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informação de Contacto</h2>
	    				<address>
	    					<?=nl2br(Settings::contact_info())?>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Redes sociais</h2>
							<ul>
								<li>
									<a href="<?= Settings::linkedin_link() ?>" target="_blank"><i class="fa fa-linkedin" style="color: #536976;"></i></a>
								</li>
							
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

<?php $this->view("footer",$data); ?>