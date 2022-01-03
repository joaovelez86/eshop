<?php $this->view("header",$data); ?>

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					
				</div>			 		
			</div> 
 			
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>

	    				<?php if(is_array($errors) && count($errors)>0):?>
	    					<?php foreach ($errors as $error):?>
	    						<div class="status alert alert-danger"><?=$error?></div>
	    					<?php endforeach;?>
	    				<?php endif;?>
	    				<?php if(isset($_GET['success'])):?>
	    					<div class="status alert alert-success" >Message sent successfully</div>
	    				<?php endif;?>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="full_name" class="form-control" required="required" placeholder="Full Name" value="<?=isset($POST['full_name'])? $POST['full_name']:''?>">
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
				                <input type="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
    	</div>	
    </div><!--/#contact-page-->

