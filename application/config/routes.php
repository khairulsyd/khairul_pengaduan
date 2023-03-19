<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'C_khairul_Landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// view masyarakat
$route['dashboard_masyarakat'] = 'C_khairul_Dashboard';
$route['pengaduan_masyarakat'] = 'C_khairul_Dashboard/pengaduan';
$route['profile_masyarakat'] = 'C_khairul_Dashboard/profile';
$route['riwayat_masyarakat'] = 'C_khairul_Dashboard/riwayat';

// view admin
$route['dashboard_admin'] = 'C_khairul_Dashboard/admin';
$route['kategori_admin'] = 'C_khairul_Dashboard/kategori';
$route['petugas_admin'] = 'C_khairul_Dashboard/petugas';
$route['masyarakat_admin'] = 'C_khairul_Dashboard/masyarakat';
$route['riwayat_admin'] = 'C_khairul_Dashboard/riwayat_admin';

// view petugas
$route['dashboard_petugas'] = 'C_khairul_Dashboard/admin_petugas';
$route['kategori_petugas'] = 'C_khairul_Dashboard/tabel_kategori';
$route['petugas_petugas'] = 'C_khairul_Dashboard/tabel_petugas';
$route['masyarakat_petugas'] = 'C_khairul_Dashboard/tabel_masyarakat';
$route['riwayat_petugas'] = 'C_khairul_Dashboard/riwayat_petugas';


// sistem crud admin : petugas, kategori, subkategori
$route['tambah_petugas'] = 'C_khairul_auth/registrasi_admin';
$route['tambah_kategori'] = 'C_khairul_Update/tambahKategori';
$route['tambah_subkategori'] = 'C_khairul_Update/tambahSubKategori';
$route['hapus_kategori/(:num)'] = 'C_khairul_Update/hapusKategori/$1';
$route['laporan_pdf'] = 'C_khairul_Update/laporan_pdf';

// login register logout masyarakat
$route['registrasi'] = 'C_khairul_auth/registrasi';
$route['login'] = 'C_khairul_auth';
$route['logout'] = 'C_khairul_auth/logout';
$route['edit_profile'] = 'C_khairul_Update/editProfile';

// login setup admin
$route['setup_admin'] = 'C_khairul_auth/setup_admin';
$route['login_admin'] = 'C_khairul_auth/login_petugas';
$route['logout_admin'] = 'C_khairul_auth/logout_admin';

// pengaduan masyarakat
$route['masyarakat_pengaduan'] = 'C_khairul_Update/tambahPengaduan';
