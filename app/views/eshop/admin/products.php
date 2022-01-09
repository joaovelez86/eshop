<!--Faz roteamento para o admin header!-->
<?php $this->view("admin/header", $data); ?>
<!--Faz roteamento para o admin sidebar!-->
<?php $this->view("admin/sidebar", $data); ?>

<style type="text/css">
	.add_edit_panel {

		width: 500px;
		height: 650px;
		background-color: #eae8e8;
		box-shadow: 0px 0px 10px #aaa;
		position: absolute;
		padding: 6px;
		z-index: 100;
	}

	.show {
		display: block;
	}

	.hide {
		display: none;
	}

	.edit_product_images {

		display: flex;
		width: 100%;

	}

	.edit_product_images img {

		flex: 1;
		width: 50px;
		margin: 2px;
		height: 80px;
	}
</style>
<div class="row mt">
	<div class="col-md-12">
		<div class="content-panel">

			<!--searchbox-->
			<style>
				.my-table {
					background-color: #eee;
				}

				.my-table th {
					background-color: #ddd;
				}
			</style>


			<!--end searchbox-->

			<table class="table table-striped table-advance table-hover">
				<h4><i class="fa fa-angle-right"></i> Productos <button class="btn btn-primary btn-xs" onclick="show_add_new(event)"><i class="fa fa-plus"></i> Add novo</button></h4>

				<!--Adicionar novos productos-->
				<div class="add_new add_edit_panel hide">

					<h4 class="mb"><i class="fa fa-angle-right"></i>Add Novo productos</h4>
					<form class="form-horizontal style-form" method="post">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Nome do Producto:</label>
							<div class="col-sm-10">
								<input id="description" name="description" type="text" class="form-control" autofocus required>
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Quantidade:</label>
							<div class="col-sm-10">
								<input id="quantity" name="quantity" type="number" value="1" class="form-control" required>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Categoria:</label>
							<div class="col-sm-10">
								<select id="category" name="category" class="form-control" required>
									<option></option>
									<?php if (is_array($categories)) : ?>
										<?php foreach ($categories as $categ) : ?>

											<option value="<?= $categ->id ?>"><?= $categ->category ?></option>
										<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Preço:</label>
							<div class="col-sm-10">
								<input id="price" name="price" type="number" placeholder="0.00" step="0.01" class="form-control" required>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem:</label>
							<div class="col-sm-10">
								<input id="image" name="image" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-add')" class="form-control" required>
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem2 (opcional):</label>
							<div class="col-sm-10">
								<input id="image2" name="image2" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-add')" class="form-control">
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem3 (opcional):</label>
							<div class="col-sm-10">
								<input id="image3" name="image3" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-add')" class="form-control">
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem4 (opcional):</label>
							<div class="col-sm-10">
								<input id="image4" name="image4" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-add')" class="form-control">
							</div>
						</div>
						<div class="js-product-images-add edit_product_images">
							<img src="">
							<img src="">
							<img src="">
							<img src="">
						</div>

						<button type="button" class="btn btn-warning" onclick="show_add_new(event)" style="position:absolute;bottom:10px; left:10px;">Fechar</button>
						<button type="button" class="btn btn-primary" onclick="collect_data(event)" style="position:absolute;bottom:10px; right:10px;">Gravar</button>

					</form>

					<br><br>
				</div>
				<!--add new product end-->

				<!--edit product-->
				<div class="edit_product add_edit_panel hide">

					<h4 class="mb"><i class="fa fa-angle-right"></i> Editar Producto</h4>
					<form class="form-horizontal style-form" method="post">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Producto com Nome:</label>
							<div class="col-sm-10">
								<input id="edit_description" name="description" type="text" class="form-control" autofocus required>
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Quantidade:</label>
							<div class="col-sm-10">
								<input id="edit_quantity" name="quantity" type="number" value="1" class="form-control" required>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Categoria:</label>
							<div class="col-sm-10">
								<select id="edit_category" name="category" class="form-control" required>
									<option></option>
									<?php if (is_array($categories)) : ?>
										<?php foreach ($categories as $categ) : ?>

											<option value="<?= $categ->id ?>"><?= $categ->category ?></option>
										<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Preço:</label>
							<div class="col-sm-10">
								<input id="edit_price" name="price" type="number" placeholder="0.00" step="0.01" class="form-control" required>
							</div>
						</div>

						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem:</label>
							<div class="col-sm-10">
								<input id="edit_image" name="image" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-edit')" class="form-control" required>
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem2 (opcional):</label>
							<div class="col-sm-10">
								<input id="edit_image2" name="image2" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-edit')" class="form-control">
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem3 (opcional):</label>
							<div class="col-sm-10">
								<input id="edit_image3" name="image3" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-edit')" class="form-control">
							</div>
						</div>
						<br><br style="clear: both;">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Imagem4 (opcional):</label>
							<div class="col-sm-10">
								<input id="edit_image4" name="image4" type="file" onchange="display_image(this.files[0],this.name,'js-product-images-edit')" class="form-control">
							</div>
						</div>
						<br>
						<div class="js-product-images-edit edit_product_images">

						</div>
						<button type="button" class="btn btn-warning" onclick="show_edit_product(0,'',false)" style="position:absolute;bottom:10px; left:10px;">Cancelar</button>
						<button type="button" class="btn btn-primary" onclick="collect_edit_data(event)" style="position:absolute;bottom:10px; right:10px;">Guardar</button>

					</form>

					<br><br>
				</div>
				<!--edit product end-->
				<hr>

				<thead>
					<tr>
						<th>Producto id</th>
						<th>Nome Producto</th>
						<th>Quantidade</th>
						<th>Categoria</th>
						<th>Marca</th>
						<th>Preçp</th>
						<th>Data</th>
						<th><i class=" fa fa-edit"></i> Acção</th>
					</tr>
				</thead>
				<tbody id="table_body">

					<?= $tbl_rows ?>

				</tbody>

				<tr>
					<td colspan="9"><?php Page::show_links(); ?></td>
				</tr>

			</table>
		</div><!-- /content-panel -->
	</div><!-- /col-md-12 -->
</div><!-- /row -->

<script type="text/javascript">
	let EDIT_ID = 0;

	function show_add_new() {
		let show_edit_box = document.querySelector(".add_new");
		let product_input = document.querySelector("#description");

		if (show_edit_box.classList.contains("hide")) {

			show_edit_box.classList.remove("hide");
			product_input.focus();
		} else {

			show_edit_box.classList.add("hide");
			product_input.value = "";
		}


	}

	function show_edit_product(id, product, e) {

		let show_add_box = document.querySelector(".edit_product");
		let edit_description_input = document.querySelector("#edit_description");

		if (e) {

			let a = (e.currentTarget.getAttribute("info"));
			let info = JSON.parse(a.replaceAll("'", '"'));

			EDIT_ID = info.id;
			//show_add_box.style.left = (e.clientX - 700) + "px";
			show_add_box.style.top = (e.clientY - 100) + "px";

			edit_description_input.value = info.description;

			let edit_quantity_input = document.querySelector("#edit_quantity");
			edit_quantity_input.value = info.quantity;

			let edit_category_input = document.querySelector("#edit_category");
			edit_category_input.value = info.category;

			let edit_price_input = document.querySelector("#edit_price");
			edit_price_input.value = info.price;

			let product_images_input = document.querySelector(".js-product-images-edit");
			product_images_input.innerHTML = `<img src="<?= ROOT ?>${info.image}" />`;
			product_images_input.innerHTML += `<img src="<?= ROOT ?>${info.image2}" />`;
			product_images_input.innerHTML += `<img src="<?= ROOT ?>${info.image3}" />`;
			product_images_input.innerHTML += `<img src="<?= ROOT ?>${info.image4}" />`;

		}


		if (show_add_box.classList.contains("hide")) {

			show_add_box.classList.remove("hide");
			edit_description_input.focus();
		} else {

			show_add_box.classList.add("hide");
			edit_description_input.value = "";
		}


	}

	function collect_data(e) {

		let product_input = document.querySelector("#description");
		if (product_input.value.trim() == "" || !isNaN(product_input.value.trim())) {
			alert("Por favor, inserir uma descrição válida do producto");
			return;
		}

		let quantity_input = document.querySelector("#quantity");
		if (quantity_input.value.trim() == "" || isNaN(quantity_input.value.trim())) {
			alert("Por favor, inserir quantidade válida");
			return;
		}

		let category_input = document.querySelector("#category");
		if (category_input.value.trim() == "" || isNaN(category_input.value.trim())) {
			alert("Por favor, inserir uma Categoria válida");
			return;
		}

		let price_input = document.querySelector("#price");
		if (price_input.value.trim() == "" || isNaN(price_input.value.trim())) {
			alert("Por favor, inserir um preço válido");
			return;
		}

		let image_input = document.querySelector("#image");
		if (image_input.files.length == 0) {
			alert("Por favor, inserir uma imagem válida");
			return;
		}

		//criar um form
		let data = new FormData();

		let image2_input = document.querySelector("#image2");
		if (image2_input.files.length > 0) {
			data.append('image2', image2_input.files[0]);
		}

		let image3_input = document.querySelector("#image3");
		if (image3_input.files.length > 0) {
			data.append('image3', image3_input.files[0]);
		}

		let image4_input = document.querySelector("#image4");
		if (image4_input.files.length > 0) {
			data.append('image4', image4_input.files[0]);
		}


		data.append('description', product_input.value.trim());
		data.append('quantity', quantity_input.value.trim());
		data.append('category', category_input.value.trim());
		data.append('price', price_input.value.trim());
		data.append('data_type', 'add_product');
		data.append('image', image_input.files[0]);

		send_data_files(data);

	}


	function collect_edit_data(e) {

		let product_input = document.querySelector("#edit_description");
		if (product_input.value.trim() == "" || !isNaN(product_input.value.trim())) {
			alert(" Por favor, inserir nome de producto válido");
			return;
		}

		let quantity_input = document.querySelector("#edit_quantity");
		if (quantity_input.value.trim() == "" || isNaN(quantity_input.value.trim())) {
			alert("Por favor, inserir quantidades válidas");
			return;
		}

		let category_input = document.querySelector("#edit_category");
		if (category_input.value.trim() == "" || isNaN(category_input.value.trim())) {
			alert("Por favor, insira uma categoria válida");
			return;
		}

		let price_input = document.querySelector("#edit_price");
		if (price_input.value.trim() == "" || isNaN(price_input.value.trim())) {
			alert("Por favor, inserir preço válido");
			return;
		}

		//criar form
		let data = new FormData();

		let image_input = document.querySelector("#edit_image");
		if (image_input.files.length > 0) {
			data.append('image', image_input.files[0]);
		}

		let image2_input = document.querySelector("#edit_image2");
		if (image2_input.files.length > 0) {
			data.append('image2', image2_input.files[0]);
		}


		let image3_input = document.querySelector("#edit_image3");
		if (image3_input.files.length > 0) {
			data.append('image3', image3_input.files[0]);
		}

		let image4_input = document.querySelector("#edit_image4");
		if (image4_input.files.length > 0) {
			data.append('image4', image4_input.files[0]);
		}


		data.append('description', product_input.value.trim());
		data.append('quantity', quantity_input.value.trim());
		data.append('category', category_input.value.trim());
		data.append('price', price_input.value.trim());
		data.append('data_type', 'edit_product');
		data.append('id', EDIT_ID);

		send_data_files(data);
	}



	function send_data(data = {}) {

		let ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?= ROOT ?>ajax_product", true);
		ajax.send(JSON.stringify(data));
	}

	function send_data_files(formdata) {

		let ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?= ROOT ?>ajax_product", true);
		ajax.send(formdata);
	}



	function handle_result(result) {
		//console.log(result);
		if (result != "") {
			var obj = JSON.parse(result);

			if (typeof obj.data_type != 'undefined') {

				if (obj.data_type == "add_new") {
					if (obj.message_type == "info") {
						alert(obj.message);
						show_add_new();

						var table_body = document.querySelector("#table_body");
						table_body.innerHTML = obj.data;
					} else {
						alert(obj.message);
					}
				} else
				if (obj.data_type == "edit_product") {

					if (obj.message_type == "info") {
						show_edit_product(0, '', false);

						var table_body = document.querySelector("#table_body");
						table_body.innerHTML = obj.data;
					} else {
						alert(obj.message);
					}

				} else
				if (obj.data_type == "disable_row") {

					var table_body = document.querySelector("#table_body");
					table_body.innerHTML = obj.data;

				} else
				if (obj.data_type == "delete_row") {

					var table_body = document.querySelector("#table_body");
					table_body.innerHTML = obj.data;

					alert(obj.message);
				}


			}
		}
	}


	function display_image(file, name, element) {
		let index = 0;
		if (name == "image2") {
			index = 1;
		} else
		if (name == "image3") {
			index = 2;
		} else
		if (name == "image4") {
			index = 3;
		}

		let image_holder = document.querySelector("." + element);

		let images = image_holder.querySelectorAll("IMG");

		images[index].src = URL.createObjectURL(file);
		


	}

	function edit_row(id) {

		send_data({
			data_type: ""
		});
	}

	function delete_row(id) {

		if (!confirm("Tens a certeza que queres apagar?")) {
			return;
		}

		send_data({
			data_type: "delete_row",
			id: id
		});
	}

	function disable_row(id, state) {
		send_data({
			data_type: "disable_row",
			id: id,
			current_state: state,
		});
	}
</script>

<?php $this->view("admin/footer", $data); ?>