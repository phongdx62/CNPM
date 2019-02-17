<?php  
	include('database.php');
	class m_index extends database
	{
		public function __construct()
		{
			$this->connect();
		}

		public function index()
		{
			$sql = "SELECT matuyen, tentuyen FROM tuyen";
			$this->query($sql);
		}

		public function thongtin($matuyen)
		{
			$sql = "SELECT t.*, dongia, soghe FROM tuyen t
					INNER JOIN vengay vn
					ON t.matuyen = vn.matuyen
					INNER JOIN xe x
					ON t.matuyen = x.matuyen
			 		WHERE t.matuyen = '$matuyen' ";
			$this->query($sql);
		}

		public function timkiem($key)
		{
			$sql = "SELECT t.*, dongia, soghe FROM tuyen t
					INNER JOIN vengay vn
					ON t.matuyen = vn.matuyen
					INNER JOIN xe x
					ON t.matuyen = x.matuyen
			 		WHERE t.matuyen = '$key' OR tentuyen LIKE '$key' ";
			$this->query($sql); 		
		}
	}
?>