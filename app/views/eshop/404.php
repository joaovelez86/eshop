<!--Faz roteamento para o header!-->
<?php $this->view("header", $data); ?>

<div class="container text-center">
    <div class="content-404">
        <img src="<?php echo ASSETS . THEME?>images/404/404.png" class="img-responsive" alt="" style="max-width: 200px;" />
        <h1><b>UPSS! error 404!!</b> We Couldn’t Find this Page</h1>
        <p>Sorry for the inconvenience.</p>
        <h2><a href="<?php echo ROOT?>">Bring me back to the Home page</a></h2>
    </div>
</div>

<!--Faz roteamento para o footer!-->
<?php $this->view("footer", $data); ?>
