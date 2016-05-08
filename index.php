<?php

/*
simple lightMVC Created By Abdul Khodir :)
*/

require 'lib/BaseController.php';
require 'lib/MVC.php';
require 'lib/Session.php';
require 'lib/View.php';
require 'lib/Model.php';

$app = new MVC();

//setting debug mode , default = true
//$app->debug = false;

//Konfigurasi Untuk mengganti Folder Default :)
/*
$app->Cdefault = 'index';
$app->Cfolder = 'controllers';
$app->Mfolder = 'models';
$app->Vfolder = 'views';
*/

/*
menyiapkan baseUrl dari program , berguna untuk pemanggilan CSS ataupun JS pada View, berguna juga saat debug = false
*/
$app->BaseUrl = "http://localhost/MVC/";

//konfigurasi koneksi database array(host,dbname,username,password)
$app->Connection = array('localhost','latihan','root','');

//menjalankan aplikasi
$app->run();

?>