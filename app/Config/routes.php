<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'users', 'action' => 'login'));
	
	Router::connect('/users/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/users/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/users/tolist', array('controller' => 'users', 'action' => 'tolist'));
	Router::connect('/users/add', array('controller' => 'users', 'action' => 'add'));
	Router::connect('/users/edit/', array('controller' => 'users', 'action' => 'edit'));
	Router::connect('/users/delete/', array('controller' => 'users', 'action' => 'delete'));
	
	Router::connect('/categories/tolist', array('controller' => 'categories', 'action' => 'tolist'));
	Router::connect('/categories/add', array('controller' => 'categories', 'action' => 'add'));
	Router::connect('/categories/edit/', array('controller' => 'categories', 'action' => 'edit'));
	Router::connect('/categories/delete/', array('controller' => 'categories', 'action' => 'delete'));

	Router::connect('/items/tolist', array('controller' => 'items', 'action' => 'tolist'));
	Router::connect('/items/add', array('controller' => 'items', 'action' => 'add'));
	Router::connect('/items/edit/', array('controller' => 'items', 'action' => 'edit'));
	Router::connect('/items/delete/', array('controller' => 'items', 'action' => 'delete'));

	Router::connect('/locations/tolist', array('controller' => 'locations', 'action' => 'tolist'));
	Router::connect('/locations/add', array('controller' => 'locations', 'action' => 'add'));
	Router::connect('/locations/edit/', array('controller' => 'locations', 'action' => 'edit'));
	Router::connect('/locations/delete/', array('controller' => 'locations', 'action' => 'delete'));

	Router::connect('/movements/tolist/', array('controller' => 'movements', 'action' => 'tolist'));
	Router::connect('/movements/add/', array('controller' => 'movements', 'action' => 'add'));


	/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
