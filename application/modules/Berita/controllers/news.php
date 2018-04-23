<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function index()
	{
<<<<<<< HEAD
		$this->layout('news', '');
=======
    	$this->layout('news/lists', '');
	}
	public function add()
	{
		$this->layout('news/add', '');
>>>>>>> ca9d0fbdac962c3b0d583eefe95f9411941f5aff
	}
}