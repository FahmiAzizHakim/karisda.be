<?php
class Upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
 
	public function index(){
		// echo "string";die;
		$this->load->view('v_upload', array('error' => ' ' ));
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|doc|docs';
		$config['max_size']             = 20000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;
 
		$this->load->library('upload', $config);
 		// print_r($this->upload->do_upload('berkas'));die;
		if ( ! $this->upload->do_upload('berkas')){
			// echo "blaaaaaa"; die;
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			// echo "blaaaaaa22222"; die;
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_upload_sukses', $data);
		}
	}
	
}
?>