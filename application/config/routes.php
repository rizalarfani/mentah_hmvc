<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'daftar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = "Admin_login/index";
$route['Logout'] = 'Admin_login/logout';

$route['prodi'] = "Prodi/index";
$route['prodi/create'] = "Prodi/index/tambah";
$route['prodi/request_data'] = "Prodi/index/reg_data";
$route['prodi/delete'] = "Prodi/index/delete";

$route['slider'] = "Slider/index";
$route['slider/create'] = "Slider/index/tambah";
$route['slider/delete'] = "Slider/index/delete";
$route['slider/non_active'] = "Slider/index/non_active";
$route['slider/active'] = 'Slider/index/active_slider';

$route['informasi'] = "Informasi_page/index";
$route['informasi/create'] = "Informasi_page/index/create";
$route['informasi/create/proses'] = "Informasi_page/index/create/proses";
$route['informasi/delete'] = "Informasi_page/index/delete";
$route['informasi/edit/(:any)'] = "Informasi_page/index/edit/(:any)";