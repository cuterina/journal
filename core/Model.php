<?php 
class Model
{

	function __construct() { 
		$this->mysqli = mysqli_connect("127.0.0.1", "kate", "mypassword", "POSTS");

		if ($this->mysqli === false) {
		    	die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	}

	//Здесь мы получаем данные из БД
	public function executeQuery($query) {
		$res = $this->mysqli->query($query);
		return $res;
	}

	function __destruct() {
		//Освобождаем память. И закрываем соединение
       $this->mysqli->close();
   }
}
?>