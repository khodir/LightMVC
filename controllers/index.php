<?php

class Index extends BaseController{

	//contoh construct pada Controller :)
	function __construct(){
		parent::__construct();
		require 'models/index_model.php';
		$this->model = new Index_Model();
		require $this->view->render('index');
	}

	//render data dengan menggunakan view
	function render(){
		$data = "Hello World";
		$view = $this->view->render('render_data');
		require $view;
	}

	//contoh penggunaan session :)
	function session(){
		Session::start();
		Session::set('User','Nama User');
		print_r(Session::get('User'));
		Session::destroy();
	}

	//menggunakan fungsi pada Model
	function select(){
		$data = $this->model->select();
		foreach ($data as $key => $value) {
			echo print_r($value).'<br>';
		}
	}

	//php info :D
	function phpinfo(){
		$tampil = $this->view->render('header/header');
		require $tampil;
	}

	//menampilkan data dari url :)
	function tampil($url){
		for ($i=0; $i < $url; $i++) {
			echo $i.'<br>';
		}
	}

}
