<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');

	}

	public function index()
	{
		if($this->session->userdata('user_id') != ''){
			redirect('','refresh');
		}
    	$this->layout_empty('login', '');

	}

	function check_user(){
		$param = array("username" => $this->input->post('username'),
						"password" => md5(substr(sha1($this->input->post('password') . 'reds'),1,20)));
		$cek = $this->M_auth->cek_user($param['username'], $param['password'])->num_rows();
    	$data = $this->M_auth->cek_user($param['username'], $param['password'])->result();
		if($cek > 0 && $cek != null){
			foreach($data as $sess){
	        	$sess_data['user_code'] = $sess->user_code;
	    	    $sess_data['user_id'] = $sess->id;
	    	    $sess_data['user_name'] = $sess->user_name;
	    	}
        	$this->session->set_userdata($sess_data);
    	}
    	echo json_encode($cek);
    }

    function logout()
  	{
    	$this->session->sess_destroy();
    	redirect('/');
  	}

}