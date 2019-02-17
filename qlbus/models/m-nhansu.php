<?php  
	include('database.php');
	class m_nhansu extends database
	{
		public function __construct()
		{
			$this->connect();
		}

		public function nhansu()
		{
			
		}

		public function tuyen()
		{
			$sql = "SELECT matuyen, tentuyen FROM tuyen";
			$this->query($sql);
		}

		public function diembvt()
		{
			$sql = "SELECT madbvt, tendbvt FROM diembvt";
			$this->query($sql);
		}
	}
?>