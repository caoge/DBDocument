<?php
/**
 * 设置
 *
 * @package  app
 * @extends  Controller_Admin
 */
class Controller_Admin_Setting extends Controller_Admin {
	/**
	 * 设置页
	 *
	 * @access  public
	 */
	public function action_index() {
		//$database_list = Model_Database::find('all');
		$this->template->title = "设置";
        $this->template->content = View::forge('admin/setting/index', array());
	}
}
