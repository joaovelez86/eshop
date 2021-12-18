<!--Faz roteamento para o admin header! -->
<?php $this->view("admin/header", $data); ?>

<!--Faz roteamento para o admin sidebar! -->
<?php $this->view("admin/sidebar", $data); ?>

<!--main content começa aqui-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> <?php echo strtoupper($data['page_title'])?></h3>
        <div class="row mt">
            <div class="col-lg-12">
                <p>Place your content here.</p>
            </div>
        </div>

    </section>
</section>

<!--Faz roteamento para o admin footer -->
<?php $this->view("admin/footer", $data); ?>