<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

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
		$data = $this->M_master->getListData('tbl_user')->result_array();
		$i = 0;

		$this->templates->assign( 'data', $data);
    	$this->layout('users/lists', '');
	}

	public function add()
	{
		$this->layout('users/add', '');
	}

	public function update()
	{
		$id = $this->input->get("id");
		$data = $this->M_master->getDataWhere('id', $id,'tbl_user')->row_array();
		$this->templates->assign( 'data', $data);
		$this->layout('users/edit', '');
	}

	public function insert()
	{
		$param = $this->input->post();
		$param['user_password'] = md5(substr(sha1($param['user_password'] . 'reds'),1,20));
		$param['lastupd_date'] = date('d/m/Y');

		$proses = $this->M_master->save('tbl_user', $param);
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}