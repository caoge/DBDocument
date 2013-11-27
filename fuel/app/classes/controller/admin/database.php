<?php
/**
 * 数据库管理
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Database extends Controller_Admin {
	/**
	 * 数据库栏目页
	 *
	 * @access  public
	 */
	public function action_index() {
		$database_list = Model_Database::find('all');
		$data = array(
			'database_list' => $database_list
		);
		$this->template->title = "数据库";
        $this->template->content = View::forge('admin/database/index', $data);
	}

	/**
	 * 添加数据库
	 *
	 * @access  public
	 */
	public function action_add() {
		$name = Input::post('name', '默认数据库');
		
		$props = array(
			'name' => '测试数据库',
			'db_name' => 'test',
			'db_host' => 'localhost',
			'db_user' => 'root',
			'db_password' => 'root',
			'db_port' => '3306',
			'add_time' => date('Y-m-d H:i:s')
		);
		$Database = Model_Database::forge($props);
		$Database->save();
	}

	/**
	 * 编辑数据库
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_edit($id) {
		$entry = Model_Database::find($id);
		if ($entry != null) {
			$entry->set(array(
			    'db_name'  => 'My first edit'
			));
			$entry->save();
		}
	}

	/**
	 * 删除数据库
	 *
	 * @access  public
	 */
	public function action_delete($id) {
		$entry = Model_Database::find($id);
		if ($entry != null) {
			$entry->delete();
		}
	}

	/**
	 * 数据库表页面
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_table() {
		$data = array();
		$this->template->title = "数据库";
        $this->template->content = '';
		
	}

	/**
	 * 编辑数据库表
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_table_edit() {

	}

	/**
	 * 删除数据库表
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_table_delete($id) {
		$entry = Model_Table::find($id);
		if ($entry != null) {
			$entry->delete();
		}
	}

	/**
	 * 数据库表字段页面
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_field() {

	}
}
