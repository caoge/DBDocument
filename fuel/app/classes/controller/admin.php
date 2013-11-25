<?php
/**
 * 后台控制器基类
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin extends Controller {
	public function before() {
		
	}
	/**
	 * 404页面
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404() {
		echo 404;exit;
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}