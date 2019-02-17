<?php  
	include('database.php');
	class m_dieuhanh extends database
	{
		public function __construct()
		{
			$this->connect();
		}
	}
?>