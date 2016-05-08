<?php

/*
SImple MVC By Abdul Khodir :))
*/

class MVC {

	public $Cfolder;
	public $Mfolder;
	public $Vfolder;
	public $Cdefault;
	public $BaseUrl;
	public $Connection;
	public $debug;

	function __construct(){
		$this->Cdefault = 'index';
		$this->Cfolder = 'controllers';
		$this->Mfolder = 'models';
		$this->Vfolder = 'views';
		$this->BaseUrl = '';
		$this->Connection = array('localhost','name','user','password');
		$this->debug = true;
	}


	public function run(){

		//
		if(isset($_GET['url']))
			$url = $_GET['url'];
		else
			$url = "";

		$url = rtrim($url,'/');
		$url = explode('/', $url);

		//
		if($url[0] == ""){
			$file = $this->Cfolder.'/'.$this->Cdefault.'.php';
			$C = $this->Cdefault;
		}
		else{
			$file = $this->Cfolder.'/'.$url[0].'.php';
			$C = $url[0];
		}

		//
		if(file_exists($file))

			require $file;

		elseif($this->debug == true){
			echo "File ".$C." tidak ada";
//			throw new Exception("File ".$file." tidak ada.",1);
			return false;
		}
		else{
			header('Location:'.$this->BaseUrl);
			return false;
		}


		BaseModel::$Connection = $this->Connection;
		BaseController::$Vfolder = $this->Vfolder;
		BaseController::$BaseUrlC = $this->BaseUrl;
		$controller = new $C();


		if(isset($url[2]))
			$controller->{$url[1]}($url[2]);
		else{
			if(isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller->{$url[1]}();
				}
				elseif($this->debug == true){
					echo "Fungsi ".$url[1]." tidak ada pada controller ".$C;
//					throw new Exception("Fungsi ".$url[1]." tidak ada pada controller".$C, 1);
					return false;
				}
				else{
					header('Location:'.$this->BaseUrl.$C);
				}
			}
		}


	}
}
