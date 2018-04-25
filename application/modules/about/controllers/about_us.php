<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends MY_Controller {

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
		$data = $this->M_master->getDataWhere('judul','Tentang_Kami','tbl_aboutus')->row_array();

		$this->templates->assign( 'data', $data);
		$this->layout('about_us/about_us', '');
	}

	public function edit()
	{
		$param = $this->input->post();
		$param['lastupd_date'] = date('d/m/Y');

		$proses = $this->M_master->update('judul','Tentang_Kami',$param,'tbl_aboutus');

		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}