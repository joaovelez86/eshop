<?php 

Class Product_details extends Controller
{

	public function index($permalink)
	{
		$permalink = esc($permalink);

		$User = $this->load_model('User');
		$user_data = $User->check_login();

		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();

		$ROW = $DB->read("select * from products where permalink = :permalink",['permalink'=>$permalink]);

		$data['page_title'] = "Product Details";
		$data['ROW'] = is_array($ROW) ? $ROW[0] : false;

		$this->view("product-details",$data);
	}


}