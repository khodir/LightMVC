<?php

class BaseModel {

	public static $Connection = array();
	private $koneksi;
	private $db;

	function __construct(){
	}

	public function dbConnect(){
	try{
            $conn = new PDO('mysql:host='.self::$Connection[0].';dbname='.self::$Connection[1].'',self::$Connection[2],self::$Connection[3] );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
	}

	public function query($sql){
		$data = $this->dbConnect();
		$query = $data->prepare($sql);
		$query->execute();
		//$hasil = $query->fetchAll();
		$data = null;
		return $query;
	}

}
