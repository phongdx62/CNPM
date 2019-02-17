<?php  
	include("database.php");
	class m_doimatkhau extends database
	{
		public function __construct()
		{
			$this->connect();
		}
	}
?>