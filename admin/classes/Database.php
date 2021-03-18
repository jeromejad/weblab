<?php

/**
 * 
 */
class Database
{
	$servername = 'bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com';
$username = 'uixodnli2w95t7oa';
$password = 'WDZfqukULNtn9LzL9tJl';
$db = 'bnjhz69tzqtptkhxejq4';
	
	private $con;
	public function connect(){
		$this->con = mysqli_connect($servername, $username, $password,$db);
		return $this->con;
	}
}

?>