<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class legalitas extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('login','refresh');
		}
		$this->load->model('M_master');

	}

	public function index()
	{
		$data = $this->M_master->getListData('tbl_legalitas')->result_array();
		$i = 0;

		$this->templates->assign( 'data', $data);
		$this->layout('legal/legalitas', '');
	}
	public function add()
	{
		$this->layout('legal/add', '');
	}

	public function insert()
	{
		$param = $this->input->post();
		$param['lastupd_date'] = date('d/m/Y');

		$proses = $this->M_master->save('tbl_legalitas', $param);
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
		$data = $this->M_master->getDataWhere('id', $id,'tbl_legalitas')->row_array();
		$this->templates->assign( 'data', $data);
		$this->layout('legal/edit', '');
	}

	public function edit()
	{
		$param['legalitas_name'] = $this->input->post('legalitas_name');
		$param['legalitas_desc'] = $this->input->post('legalitas_desc');
		$param['lastupd_by'] = $this->input->post('lastupd_by');
		$param['lastupd_date'] = date('d/m/Y');
		$id = $this->input->post("id");

		$proses = $this->M_master->update('id', $id, $param,'tbl_legalitas');
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}
