<?php
/**
 * 数据库管理
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Database extends Controller_Admin {
	/**
	 * 服务器下的数据库列表
	 *
	 * @access  public
	 */
	public function action_index($server_id){
		$server_info = Model_Server::find(array('where' => array('id' => $server_id)));
		$db_list = Model_Database::find('all', array(
			'server_id' => $server_id
		));
		$data['db_list'] = $db_list;
		$data['server_info'] = $server_info;
		$this->template->title = "数据库列表";
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
