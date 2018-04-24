<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}
		$this->load->model('M_master');

	}

	public function index()
	{
		$data = $this->M_master->getListData('tbl_product')->result_array();
		$i = 0;
		foreach ($data as $row) {
			$data[$i]['substr_desc'] = substr($row['product_desc'], 0, 150) . "...";
			$i++;
		}

		$this->templates->assign( 'data', $data);
		$this->layout('product/lists', '');
	}

	public function insert()
	{
		$param = $this->input->post();
		$param['lastupd_date'] = date('d/m/Y');
		$param['product_pict'] = "img/icon/training1.png";

		$proses = $this->M_master->save('tbl_product', $param);
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}

	public function add()
	{
		$this->layout('product/add', '');
	}

	public function update()
	{	
		$id = $this->input->get("id");
		$data = $this->M_master->getDataWhere('id', $id,'tbl_product')->row_array();
		$this->templates->assign( 'data', $data);
		$this->layout('product/update', '');
	}

	public function edit()
	{
		$param['product_name'] = $this->input->post("product_name");
		$param['product_desc'] = $this->input->post("product_desc");
		$param['lastupd_date'] = date('d/m/Y');
		$param['lastupd_by'] = $this->input->post("lastupd_by");

		$id = $this->input->post("id");

		$proses = $this->M_master->update('id', $id, $param,'tbl_product');

		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}