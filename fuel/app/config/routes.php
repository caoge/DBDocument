<?php
return array(
	'_root_'  => 'admin/server/index',  // The default route
	'_404_'   => 'admin/server/404',    // The main 404 route
	
	//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'admin/server-:database_id-:table_id' => 'admin/server/database'
);