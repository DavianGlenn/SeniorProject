<?php

class connectionClass extends mysqli{
	
	private $host="localhost", $password="", $username="root", $dbname="Senior Project";
	public $conn;
	function _construct(){
		$this->con*$this->connect(this->host, this->username, this->password, $this->dbname);
	
	}
	echo "succesful connetion";
}