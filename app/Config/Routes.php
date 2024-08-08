<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Home::index',['as' => "dashboard"]);
$routes->get('/chat', 'Home::chat', ['as' => 'chat']);
$routes->get('/email', 'Home::email', ['as' => 'email']);
$routes->get('/kanban', 'Home::kanban', ['as' => 'kanban']);
$routes->get('/todos', 'Home::todos', ['as' => 'todos']);
$routes->get('/calendar', 'Home::calendar', ['as' => 'calendar']);
$routes->get('/file-manager', 'Home::filemanager', ['as' => 'file-manager']);
$routes->get('/other/post', 'Home::Post', ['as' => 'other-post']);
$routes->get('/other/travel', 'Home::Travel', ['as' => 'other-travel']);
$routes->get('/other/nft-v1', 'Home::Nftv1', ['as' => 'other-nft-v1']);
$routes->get('/other/nft-v2', 'Home::Nftv2', ['as' => 'other-nft-v2']);
