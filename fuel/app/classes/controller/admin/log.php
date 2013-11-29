<?php
/**
 * 日志
 *
 * @package  app
 * @extends  Controller_Admin
 */
class Controller_Admin_Log extends Controller_Admin {
	public function before() {
		parent::before();
		$this->template->nav = 'log';
	}
	/**
	 * 列表
	 *
	 * @access  public
	 */
	public function action_index() {
		$config = array(
		    'pagination_url' => Uri::current(),
		    'total_items'    => 10,
		    'per_page'       => 2,
		    'uri_segment'    => 3
		);
		$pagination = Pagination::forge('mypagination', $config);

		$data['list'] = DB::select()
                            ->from('dbd_log')
                            ->limit($pagination->per_page)
                            ->offset($pagination->offset)
                            ->execute()
                            ->as_array();
		$this->template->title = "日志";
        $this->template->content = View::forge('admin/log/index', $data);
	}
}
