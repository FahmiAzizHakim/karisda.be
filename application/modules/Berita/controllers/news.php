<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends MY_Controller {

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
		$data = $this->M_master->getListData('tbl_news')->result_array();
		$i = 0;
		foreach ($data as $row) {
			$data[$i]['cuplikan'] = substr($row['berita_isi'], 0, 100) . "...";
			$i++;
		}

		$this->templates->assign( 'data', $data);
    	$this->layout('lists', '');
	}
	public function add()
	{
		$this->layout('add', '');
	}

	public function insert()
	{
		$param = $this->input->post();
		$param['lastupd_date'] = date('d/m/Y');

		$proses = $this->M_master->save('tbl_news', $param);
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
		$data = $this->M_master->getDataWhere('id', $id,'tbl_news')->row_array();
		$this->templates->assign( 'data', $data);
		$this->layout('edit', '');
	}

	public function edit()
	{
		$param['berita_judul'] = $this->input->post('berita_judul');
		$param['berita_isi'] = $this->input->post('berita_isi');
		$param['lastupd_by'] = $this->input->post('lastupd_by');
		$param['lastupd_date'] = date('d/m/Y');
		$id = $this->input->post("id");

		$proses = $this->M_master->update('id', $id, $param,'tbl_news');
		if ($proses == true) {
			$result = "success";
		}else{
			$result = "error";
		}
		echo json_encode(array("status" => $result, "error" => 0));
	}
}