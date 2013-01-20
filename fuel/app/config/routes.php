<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

  'resources' => array(
    array('GET', new Route('resources/index')),
    array('POST', new Route('resources/create'))
  ),

  'resources/new' => 'resources/new',
  'resources/:id/edit' => 'resources/edit',

  'resources/:id' => array(
    array('GET', new Route('resources/show')),
    array('PUT', new Route('resources/update')),
    array('DELETE', new Route('resources/destroy'))
  ),

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
