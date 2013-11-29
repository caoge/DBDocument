<?php
return array(
	'_root_'  => 'admin/server/index',  // The default route
	'_404_'   => 'admin/server/404',    // The main 404 route
	
	//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	'admin/server-:server_id-:database_id-:table_id' => 'admin/server/field',
	'admin/server-:server_id-:database_id' => 'admin/server/table',
	'admin/server-:server_id' => 'admin/server/database',
);