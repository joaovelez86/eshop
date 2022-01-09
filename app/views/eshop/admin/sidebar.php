<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<style>
    .sub-menu span {
        color: white;
    }
</style>
<aside>
    <div id="sidebar" class="nav-collapse " style="background: #BBD2C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient( #292E49, #536976, #BBD2C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?= ASSETS . THEME ?>admin/img/eu.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?= $data['user_data']->name ?></h5>
            <h5 class="centered" style="font-size: 11px;"><?= $data['user_data']->email ?></h5>


            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Painel</span>
                </a>

            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "products") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/products">
                    <i class="fa fa-barcode"></i>
                    <span>Productos</span>
                </a>

            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "categories") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/categories">
                    <i class="fa fa-list-alt"></i>
                    <span>Categorias</span>
                </a>

            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "orders") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/orders">
                    <i class="fa fa-reorder"></i>
                    <span>Pedidos</span>
                </a>

            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "messages") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/messages">
                    <i class="fa fa-email-o"></i>
                    <span>Mensagens</span>
                </a>

            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "settings") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/settings">
                    <i class="fa fa-cogs"></i>
                    <span>Definições</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/settings/slider_images">Imagens carrousel</a></li>
                </ul>

                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/settings/socials">Redes sociais / Contactos</a></li>
                </ul>


            </li>

            <li class="sub-menu">
                <a <?= (isset($current_page) && $current_page == "users") ? ' class="active" ' : ''; ?> href="<?= ROOT ?>admin/users">
                    <i class="fa fa-user"></i>
                    <span>Utilizadores</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/users/customers">Clientes</a></li>
                    <li><a href="<?= ROOT ?>admin/users/admins">Admins</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/backup">
                    <i class="fa  fa-hdd-o"></i>
                    <span>Eshop Backup</span>
                </a>

            </li>



        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->


<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i><?= ucwords($data['page_title']) ?></h3>
        <div class="row mt">
            <div class="col-lg-12">