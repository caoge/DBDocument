<?php
/**
 * 服务器管理
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Server extends Controller_Admin {
	public function before() {
		parent::before();
		// 将所有数据库、表、字段关联存缓存
		//$this->field
	}
	/**
	 * 服务器页面
	 *
	 * @access  public
	 */
	public function action_index() {
		$server_list = Model_Server::find('all', array(
			'order_by' => array('add_time' => 'desc')
		));
		$data['server_list'] = $server_list;
		$this->template->title = "服务器";
        $this->template->content = View::forge('admin/server/index', $data);
	}

	public function action_database() {var_dump($this->param('table_id'), $this->param('database_id'));exit;
		$server_info = Model_Server::find(array('where' => array('id' => $server_id)));
		$db_list = Model_Database::find('all', array(
			'server_id' => $server_id
		));
		$data['db_list'] = $db_list;
		$data['server_info'] = $server_info;
		$this->template->title = "数据库";
        $this->template->content = View::forge('admin/server/database', $data);
	}

	public function action_table($database_id) {
		$server_info = Model_Server::find(array('where' => array('id' => $database_id)));
		$table_list = Model_Table::find('all', array(
			'database_id' => $database_id
		));
		$data['table_list'] = $table_list;
		$data['server_info'] = $server_info;
		$this->template->title = "表";
        $this->template->content = View::forge('admin/server/table', $data);
	}

	public function action_field($table_id) {
		$field_list = Model_Field::find('all', array(
			'table_id' => $table_id
		));
		$data['field_list'] = $field_list;
		//$data['server_info'] = $server_info;
		$this->template->title = "字段";
        $this->template->content = View::forge('admin/server/field', $data);
	}

	/**
	 * 面包屑
	 * 
	 * @param int $id ID 服务器ID|数据库ID|表ID
	 * @param string $type 当前列表 database|table|field
	 * @access  public
	 */
	private function get_breadcrumb($id, $type = 'database') {

	}

	/**
	 * 添加服务器
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
	 * 编辑服务器
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
	 * 删除服务器
	 *
	 * @access  public
	 */
	public function action_delete($id) {
		$entry = Model_Database::find($id);
		if ($entry != null) {
			$entry->delete();
		}
	}
}
