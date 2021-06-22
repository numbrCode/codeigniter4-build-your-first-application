<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(true);
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

/* Build Your First Application */
/* http://codeigniter.com/user_guide/tutorial/static_pages.html#running-the-app */

/* $ php spark serve */

/* We get a performance increase by specifying the default
/ route since we don't have to scan directories. */
$routes->get('/', 'Home::index');	/* http://codeigniter4-build-your-first-application */

$routes->match(['get', 'post'], 'news/create', 'News::create'); /* http://codeigniter4-build-your-first-application/news/create */
$routes->get('news/(:segment)', 'News::view/$1');   /* http://codeigniter4-build-your-first-application/news/elvis-sighted */
$routes->get('news', 'News::index');                /* http://codeigniter4-build-your-first-application/news */

/* 404 - File Not Found | Cannot find the news item: elvis */   /* http://codeigniter4-build-your-first-application/news/elvis */

$routes->get('pages', 'Pages');                         /* http://codeigniter4-build-your-first-application/pages */
$routes->get('pages/index', 'Pages');                   /* http://codeigniter4-build-your-first-application/pages/index */
$routes->get('pages/view', 'Pages::view');              /* http://codeigniter4-build-your-first-application/pages/view */
$routes->get('pages/view/home', 'Pages::view/home');    /* http://codeigniter4-build-your-first-application/pages/view/home */
$routes->get('pages/view/about', 'Pages::view/about');  /* http://codeigniter4-build-your-first-application/pages/view/about */

/* 404 - File Not Found */ /* http://codeigniter4-build-your-first-application/pages/view/shop */

$routes->get('(:any)', 'Pages::view/$1');   /* http://codeigniter4-build-your-first-application/home , http://codeigniter4-build-your-first-application/about */

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
