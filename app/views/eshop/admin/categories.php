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

                        <button type="button" class="btn btn-warning" onclick="show_add_new(event)" style="position:absolute;bottom:10px;left:10px;">Close</button>
                        <button type="button" class="btn btn-primary" onclick="collect_data(event)" style="position:absolute;bottom:10px;right:10px;">Save</button>
                    </form>
                    <br><br>
                </div>

                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Category</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th><i class=" fa fa-edit"></i>Action</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <tr>
                        <td><a href="basic_table.html#">Company Ltd</a></td>
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

        var show_add_box = document.querySelector(".add_new");
        var category_input = document.querySelector("#category");

        if (show_add_box.classList.contains("hide")) {

            show_add_box.classList.remove("hide");
            category_input.focus();
        } else {

            show_add_box.classList.add("hide");
            category_input.value = "";
        }
    }

    function collect_data(event) {
        var category_input = document.querySelector("#category");

        if (category_input.value.trim() == "" || !isNaN(category_input.value.trim())) {

            alert("Pleaaase,enter a valid category name");
        }

        var data = category_input.value.trim();

        send_data({
            data: data,
            data_type: 'add_category'
        });
    }

    function send_data(data = {}) {

        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function() {

            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });

        ajax.open("POST", "<?= ROOT ?>ajax", true);
        ajax.send(JSON.stringify(data));
    }

    function handle_result(result) {

        //alert(result);
        if (result != "") {

            var obj = JSON.parse(result);
            if (typeof obj.message_type != "undefined") {
                if (obj.message_type == "info") {

                    alert(obj.message);
                    show_add_new();

                    var table_body = document.querySelector("#table_body");
                    table_body.innerHTML = obj.data;
                } else {
                    alert(obj.message);
                }
            }
        }
    }
</script>
<!--Faz roteamento para o admin footer!-->