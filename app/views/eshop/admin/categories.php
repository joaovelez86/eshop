<!--Faz roteamento para o admin header!-->
<?php $this->view("admin/header", $data); ?>

<!--Faz roteamento para o admin sidebar!-->
<?php $this->view("admin/sidebar", $data); ?>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Product Categories <button class="btn btn-primary btn-xs" onclick="show_add_new(event)"><i class="fa fa-plus"></i> Add New</button></h4>

                <style type="text/css">
                    .add_new {
                        width: 500px;
                        height: 300px;
                        background-color: #FFFFFF;
                        position: absolute;
                        padding: 7px;
                    }

                    .show {
                        display: block;
                    }

                    .hide {
                        display: none;
                    }
                </style>

                <!--Adicionar nova categoria-->
                <div class="add_new hide">



                    <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Category</h4>
                    <form class="form-horizontal style-form" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label"> Category Name:</label>
                            <div class="col-sm-10">
                                <input id="category" name="category" type="text" class="form-control" autofocus>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" onclick="collect_data(event)" style="position:absolute;bottom:10px;right:10px;">Save</button>
                        <button type="button" class="btn btn-warning" onclick="show_add_new(event)" style="position:absolute;bottom:10px;left:10px;">Close</button>
                    </form>

                </div>
                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Category</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                        <th><i class="fa fa-bookmark"></i> Price</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th><i class=" fa fa-edit"></i>Action</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="basic_table.html#">Company Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                        <td>12000.00$ </td>
                        <td><span class="label label-info label-mini">Enabled</span></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->

<script type="text/javascript">
    function show_add_new() {
        let show_edit_box = document.querySelector(".add_new");
        let category_input = document.querySelector("#category");

        if (show_edit_box.classList.contains("hide")) {

            show_edit_box.classList.remove("hide");
            category_input.focus();
        } else {

            show_edit_box.classList.add("hide");
            category_input.value = "";
        }
    }

</script>
<!--Faz roteamento para o admin footer!-->
<?php $this->view("admin/footer", $data); ?>