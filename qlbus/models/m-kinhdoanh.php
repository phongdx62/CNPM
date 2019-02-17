<?php  
	include('database.php');
	class m_kinhdoanh extends database
	{
		public function __construct()
		{
			$this->connect();
		}
	}
?>