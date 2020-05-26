<?php

use ishop\Router;

// defaulte routes
Router::add('^admin$', ['controler' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prifix' => 'admin']);

Router::add('^$', ['controler' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
