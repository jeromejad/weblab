<?php
define('HOST', 'bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com');
define('USER', 'uixodnli2w95t7oa');
define('PASSWORD', 'WDZfqukULNtn9LzL9tJl');
define('DATABASE_NAME', 'bnjhz69tzqtptkhxejq4');

define('CURRENCY', '€');

class Database
{
	$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = DATABASE_NAME;
	
	private $con;
	public function connect(){
		$this->con = mysqli_connect($servername, $username, $password,$db);
		return $this->con;
	}
}

?>