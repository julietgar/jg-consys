<?php
class Admin_Login_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();

	}

	public function get_login()
	{
		return View::make('administracion.login.index')->with('title','Sistema Administrativo JG-Consys');
	}

	public function post_login()
	{
		return View::make('administracion.login.index')->with('title','Sistema Administrativo JG-Consys');
	}

	public function post_logout()
	{
		return View::make('administracion.login.index')->with('title','Sistema Administrativo JG-Consys');
	}

}

?>