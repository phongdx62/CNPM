<?php  
	include('database.php');
	class m_nhansu extends database
	{
		public function __construct()
		{
			$this->connect();
		}
	}
?>