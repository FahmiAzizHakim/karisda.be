<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visi extends MY_Controller {

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
		$visi = $this->M_master->getDataWhere('judul','Visi','tbl_aboutus')->row_array();
		$misi = $this->M_master->getDataWhere('judul','Misi','tbl_aboutus')->row_array();
		$motto = $this->M_master->getDataWhere('judul','Motto','tbl_aboutus')->row_array();

		$this->templates->assign( 'visi', $visi);
		$this->templates->assign( 'misi', $misi);
		$this->templates->assign( 'motto', $motto);
		$this->layout('visi/visi', '');
	}

	public function edit()
	{
		$visi["isi"] = $this->input->post("visi");
		$misi["isi"] = $this->input->post("misi");
		$motto["isi"] = $this->input->post("motto");
		$visi["lastupd_by"] = $this->input->post("lastupd_by");
		$misi["lastupd_by"] = $this->input->post("lastupd_by");
		$motto["lastupd_by"] = $this->input->post("lastupd_by");
		$visi["lastupd_date"] = date('d/m/Y');
		$misi["lastupd_date"] = date('d/m/Y');
		$motto["lastupd_date"] = date('d/m/Y');


		$proses_visi = $this->M_master->update('judul','Visi',$visi,'tbl_aboutus');
		$proses_misi = $this->M_master->update('judul','Misi',$misi,'tbl_aboutus');
		$proses_motto = $this->M_master->update('judul','Motto',$motto,'tbl_aboutus');

		$result = "success";
		echo json_encode(array("status" => $result, "error" => 0));
	}
}