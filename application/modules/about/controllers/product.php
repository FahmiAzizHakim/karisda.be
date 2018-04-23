<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function index()
	{
		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->layout('product/lists', '');
	}
	public function add()
	{
		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->layout('product/add', '');
	}
}