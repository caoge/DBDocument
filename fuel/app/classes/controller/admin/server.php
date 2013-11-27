<?php
/**
 * 服务器管理
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Server extends Controller_Admin {
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
