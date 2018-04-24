<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keunggulan extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}
		$this->load->model('M_master');

	}

	public function Index()
	{
		$data = $this->M_master->getListData('tbl_keunggulan')->result_array();

		$this->templates->assign( 'data', $data);
		$this->layout('keunggulan/index', '');
	}

	public function add()
	{
		$this->layout('keunggulan/add', '');
	}

	public function insert()
	{
		$param = $this->input->post();
		$param['lastupd_date'] = date('d/m/Y');
		$param['keunggulan_img'] = "img/berpengal1.png";

		$proses = $this->M_master->save('tbl_keunggulan', $param);
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}

	public function update()
	{	
		$id = $this->input->get("id");
		$data = $this->M_master->getDataWhere('id', $id,'tbl_keunggulan')->row_array();
		$this->templates->assign( 'data', $data);
		$this->layout('keunggulan/edit', '');
	}

	public function edit()
	{
		$param['keunggulan_name'] = $this->input->post('keunggulan_name');
		$param['keunggulan_desc'] = $this->input->post('keunggulan_desc');
		$param['lastupd_by'] = $this->input->post('lastupd_by');
		$param['lastupd_date'] = date('d/m/Y');
		$id = $this->input->post("id");

		$proses = $this->M_master->update('id', $id, $param,'tbl_keunggulan');
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}