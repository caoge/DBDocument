<?php
/**
 * 文档管理
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Document extends Controller_Admin {
	public function before() {
		parent::before();
		$this->template->nav = 'document';
	}
	/**
	 * 已经生成的文档列表
	 *
	 * @access  public
	 * @return  Response
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
                            ->from('dbd_document')
                            ->limit($pagination->per_page)
                            ->offset($pagination->offset)
                            ->execute()
                            ->as_array();
		$this->template->title = "文档列表";
        $this->template->content = View::forge('admin/document/index', $data);
	}
	
	/**
	 * 分类列表
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_category() {
		$config = array(
		    'pagination_url' => Uri::current(),
		    'total_items'    => 10,
		    'per_page'       => 2,
		    'uri_segment'    => 3
		);
		$pagination = Pagination::forge('mypagination', $config);

		$data['list'] = DB::select()
                            ->from('dbd_document')
                            ->limit($pagination->per_page)
                            ->offset($pagination->offset)
                            ->execute()
                            ->as_array();
		$this->template->title = "文档列表";
        $this->template->content = View::forge('admin/document/category', $data);
	}

	/**
	 * 下载文档
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_download($id) {
		$path = '';
		File::download(DOCROOT.'/assets/css/bootstrap.css', 'a.css');
	}
}
