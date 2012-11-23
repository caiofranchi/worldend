<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    'message' => array(array('POST', new \Fuel\Core\Route('message/all')), array('POST', new \Fuel\Core\Route('message/create')))
);