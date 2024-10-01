<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Rute untuk login dan logout
$route['login'] = 'login/index';
$route['login/authenticate'] = 'login/authenticate';
$route['logout'] = 'login/logout';

// Rute untuk akses pengajuan dan konfirmasi
$route['access/submit'] = 'access/submit';
$route['access'] = 'access/form';  // Rute untuk mengakses form pengajuan
$route['access/confirmation'] = 'access/confirmation';  // Rute untuk halaman konfirmasi

// Rute untuk admin approval dan laporan
$route['admin/approval_list'] = 'access/approval_list';
$route['admin/laporan'] = 'access/laporan';
$route['access/hapus_pengajuan/(:num)'] = 'access/hapus_pengajuan/$1';
$route['access/laporan'] = 'access/laporan';

// Di dalam function submit() di controller Access
$config['upload_path'] = './uploads/payment_proofs/';
$config['allowed_types'] = 'jpg|jpeg|png|pdf';
$config['max_size'] = 2048; // Maksimal ukuran file 2MB


// Rute untuk captcha
$route['captcha'] = 'CaptchaController/generateCaptcha';

// Rute untuk cek ketersediaan email
$route['check_email_availability'] = 'EmailController/check_email_availability';

// Rute default dan lainnya
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['captcha'] = 'CaptchaController/generateCaptcha';
$route['check_email_availability'] = 'EmailController/check_email_availability';
$route['logincontroller'] = 'LoginController/index';
$route['logincontroller/login'] = 'LoginController/login';
