<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com", "uixodnli2w95t7oa", "WDZfqukULNtn9LzL9tJl", "bnjhz69tzqtptkhxejq4");
		return $this->con;
	}
}

?>