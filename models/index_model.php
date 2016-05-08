<?php

/**
* Contoh Model By Abdul Khodir :)
*/

class Index_model extends BaseModel {


	function __construct()
	{
		parent::__construct();
	}

	public function Select(){
		$data = $this->query("SELECT * FROM pengguna");
		$hasil = $data->fetchALl();
		return $hasil;
	}


}
