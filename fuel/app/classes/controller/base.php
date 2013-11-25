<?php
/**
 * 后台控制器基类
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Base extends Controller_Template {
	/**
	 * 404页面
	 *
	 * @access  public
	 */
	public function action_404() {
		$this->template->title = 'Error';
        $this->template->content = View::forge('common/404');
	}
}