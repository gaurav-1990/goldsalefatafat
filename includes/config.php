<?php
	class DbConnect
	{
		public $host="localhost";
		public $username="root";
		public $password="";
		public $dbname="goldsalefatafat";
		
		public function connect()
		{
			try
			{
				$con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $con;
			}
			catch(PDOException $e)
			{
				echo "Connection Failed:". $e->getMessage();
			}
		}
	}	
?>