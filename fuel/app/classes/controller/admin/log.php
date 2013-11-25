<?php
/**
 * 日志
 *
 * @package  app
 * @extends  Controller_Admin
 */
class Controller_Admin_Log extends Controller_Admin {
	/**
	 * 列表
	 *
	 * @access  public
	 */
	public function action_index() {
		$this->template->title = "日志";
        $this->template->content = View::forge('admin/log/index', array());
	}
}
