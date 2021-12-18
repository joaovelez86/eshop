<!--Faz roteamento para o header! app>views>header.php-->
<?php $this->view("header", $data); ?>

<section id="main-content">
    <section class="wrapper">

        <div style="min-height: 300px; max-width: 1000px; margin: auto;">
            <style type="text/css">
                .col-md-6 {
                    color: #293444;
                }

                #texto_user {
                    color: #6e93ce;
                    text-transform: uppercase;
                }

                p {
                    color: #6e93ce;
                }
            </style>
            <div class="col-md-4 mb" style="background-color: #eee;text-align:center;box-shadow: 0px 0px 10px #aaa; border:#ddd thin ">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                    <div class="white-header" style="color: #FE980F;">
                        <h5>MY ACCOUNT</h5>
                    </div>
                    <p><img src="<?php echo ASSETS . THEME  ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
                    <p><b><?= $data['user_data']->full_name ?></b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="texto_user" class="small mt">MEMBER SINCE</p>
                            <p><?= date("jS M Y", strtotime($data['user_data']->date)) ?></p>
                        </div>
                        <div class="col-md-6">
                            <p id="texto_user" class="small mt">TOTAL SPEND</p>
                            <p>$ 47,60</p>
                        </div>
                    </div>
                    <hr style="color: #888;">
                    <div class="row">
                        <div class="col-md-6">
                            <p id="texto_user" class="small mt" style="cursor: pointer;color: #13b8ea;"><i class="fa fa-edit"></i> edit</p>
                            
                        </div>
                        <div class="col-md-6">
                            <p id="texto_user" class="small mt" style="cursor: pointer; color: #FE980F;"><i class="far fa-trash-alt"></i> delete</p>
                        </div>
                    </div>
                </div>
            </div><!-- /col-md-4 -->
        </div>
    </section>
</section>


<!--Faz roteamento para o meu footer app>views>footer.php-->
<?php $this->view("footer", $data); ?>