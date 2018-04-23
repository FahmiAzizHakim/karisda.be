<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keunggulan extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function Index()
	{
		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->layout('keunggulan/index', '');
	}

	public function add()
	{
		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->layout('keunggulan/add', '');
	}
}