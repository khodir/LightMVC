<?php

class BaseController{

	protected $BaseUrl;
	public static $Vfolder = 'views';
	public static $BaseUrlC = '';

	function __construct(){
		$this->view = new View(self::$Vfolder);
		$this->BaseUrl = self::$BaseUrlC;
	}

}
