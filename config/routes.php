<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    
    $routes->connect('/',           ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/login',      ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/register',   ['controller' => 'Users', 'action' => 'register']);
    $routes->connect('/logout',     ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/myaccount',  ['controller' => 'Users', 'action' => 'view']);

    
        
    $routes->fallbacks('DashedRoute');
});
