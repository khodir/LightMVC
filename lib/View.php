<?php

class View{

	protected $Vfolder;

	function __construct($Vfolder){
		$this->Vfolder = $Vfolder;
	}

	public function render($file){
		$data = $this->Vfolder.'/'.$file.'.php';
		return $data;
	}

}
