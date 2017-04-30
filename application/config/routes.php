<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'news';

// eg: http://localhost/index.php/Hello/you/kevin/patel
$route['hello'] = 'hello';
$route['news/create'] = 'news/create';
 
$route['news/edit/(:any)'] = 'news/edit/$1';
 
$route['news/view/(:any)'] = 'welcome';
$route['news/(:any)'] = 'news/view/$1';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
