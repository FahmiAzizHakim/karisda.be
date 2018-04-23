<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $module;
	public $controller;
	public $path;
	public $base_url;
	public $assets_url;
	public $default_view;
	public $s_user_code;
	public $s_user_id;
	public $s_user_name;
	public $s_user_role;
	public $s_company_code;
	public $view_path = '';
	public $API;

	public function MY_Controller()
	{
		parent::__construct();
		$this->API = 'http://localhost/serverapi.futsalku/';
		$this->module = $this->router->fetch_module();
		$this->controller = $this->router->fetch_class();
		$path = APPPATH . 'modules/'.$this->module.'/views/';
		$this->view_path = $path;
		$this->base_url = base_url();
		$this->assets_url = base_url().'assets/';
		$this->default_view = 'application/views/';
		$this->s_user_code = $this->session->userdata('user_code');
		$this->s_user_id = $this->session->userdata('user_id');
		$this->s_user_name = $this->session->userdata('user_name');
		$this->s_user_role = $this->session->userdata('user_role');
		$this->s_company_code = $this->session->userdata('user_company_code');
		$this->templates->assign( 'api_url', $this->API);
		$this->templates->assign( 's_user_code', $this->s_user_code);
		$this->templates->assign( 's_user_id', $this->s_user_id);
		$this->templates->assign( 's_user_name', $this->s_user_name);
		$this->templates->assign( 's_user_role', $this->s_user_role);
		$this->templates->assign( 's_company_code', $this->s_company_code);
		$this->templates->assign( 'base_url', $this->base_url);
		$this->templates->assign( 'assets_url', $this->assets_url);
		$this->templates->assign( 'views_url', $this->view_path);
	}

	function layout($template, $title, $breadcrumbs=""){
	  if ($breadcrumbs=="") {
      	$breadcrumbs = array();
      }
      $this->templates->assign("breadcrumbs", $breadcrumbs);
	  $this->templates->assign( 'nav_top', $this->default_view . 'nav_top.tpl');
	  $this->load_layout($template, $title);
	}

	function layout_empty($template, $title, $breadcrumbs=""){
	 $this->templates->assign( 'template', $this->view_path . $template .'.tpl');
      $this->templates->view('empty');
	}

	function layout_login($template){
	  $this->templates->assign( 'template', $this->view_path . $template .'.tpl');
	  $this->templates->view('layout_login');
	}

	function set_menugroup($menu=""){
      $this->templates->assign("menu_group", $menu);
	}

    private function load_layout($template, $title)
    {
      $this->templates->assign("title", $title);
      $this->templates->assign("breadcrumbsfile", $this->default_view . 'breadcrumbs.tpl');
      $this->templates->assign( 'template', $this->view_path . $template .'.tpl');
      $this->templates->view('main_template');
    }
}