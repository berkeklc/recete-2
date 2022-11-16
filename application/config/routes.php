<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "HomeController/index";
$route['en'] = 'HomeController';
$route['arama'] = 'SearchController/index';
$route['en/search'] = 'SearchController/index';
$route['iletisim'] = 'ContactController/index';
$route['en/contact'] = 'ContactController/index';
$route['icerik/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ContentController/view/$1';
$route['en/content/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ContentController/view/$1';
$route['projeler/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProjectController/view/$1';
$route['projeler'] = 'ProjectController/index';
$route['en/projeler/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProjectController/view/$1';
$route['en/projeler'] = 'ProjectController/index';
$route['hizmet/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ServiceController/view/$1';
$route['hizmet'] = 'ServiceController/index';
$route['referans'] = 'CertificateController/index';
$route['en/certificate'] = 'CertificateController/index';
$route['galeri/[a-zA-Z0-9_-]+/([0-9]+)'] = 'GalleryController/view/$1';
$route['galeri'] = 'GalleryController/index';
$route['en/gallery/[a-zA-Z0-9_-]+/([0-9]+)'] = 'GalleryController/view/$1';
$route['en/gallery'] = 'GalleryController/index';
$route['haber/[a-zA-Z0-9_-]+/([0-9]+)'] = 'NewsController/view/$1';
$route['haber'] = 'NewsController/index';
$route['en/news/[a-zA-Z0-9_-]+/([0-9]+)'] = 'NewsController/view/$1';
$route['en/news'] = 'NewsController/index';
$route['urun-kategori/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProductcategoryController/view/$1';
$route['urun-kategori'] = 'ProductcategoryController/index';
$route['urunler/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProductController/view/$1';
$route['urunler'] = 'ProductController/index';
$route['insan-kaynaklari'] = 'CvController/index';
$route['en/human-resources'] = 'CvController/index';
$route['insan-kaynaklari'] = 'CvController/index';
$route['en/human-resources'] = 'CvController/index';
$route['koleksiyon'] = 'KoleksiyonController/index';
$route['koleksiyon/[a-zA-Z0-9_-]+/([0-9]+)'] = 'KoleksiyonController/view/$1';
$route['en/koleksiyon'] = 'KoleksiyonController/index';
$route['en/koleksiyon/[a-zA-Z0-9_-]+/([0-9]+)'] = 'KoleksiyonController/view/$1';
$route['canli'] = 'LiveController/index';$route['canli/giris'] = 'LiveController/login';$route['canli/cikis'] = 'LiveController/logout';
$route['koleksiyon-kategori'] = 'KoleksiyoncategoryController/index';
$route['koleksiyon-kategori/[a-zA-Z0-9_-]+/([0-9]+)'] = 'KoleksiyoncategoryController/view/$1';
$route['en/koleksiyon-kategori/[a-zA-Z0-9_-]+/([0-9]+)'] = 'KoleksiyoncategoryController/view/$1';
$route['en/koleksiyon-kategori'] = 'KoleksiyoncategoryController/index';
$route['dokumanlar'] = 'DocumentController/index';
$route['en/documents'] = 'DocumentController/index';
$route['en/urun-kategori/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProductcategoryController/view/$1';
$route['en/urun-kategori'] = 'ProductcategoryController/index';
$route['en/urunler/[a-zA-Z0-9_-]+/([0-9]+)'] = 'ProductController/view/$1';
$route['en/urunler'] = 'ProductController/index';