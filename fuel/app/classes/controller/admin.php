<?php
/**
 * 后台控制器基类
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin extends Controller_Base {
	public $template = 'admin/template';
	public $nav = 'server';
	public function before(){
		parent::before();
		//if ( ! Auth::member(100) and Request::active()->action != 'login'){
			//Response::redirect('sign/login');
		//}
    }
}