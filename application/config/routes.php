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