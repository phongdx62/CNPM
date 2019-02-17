<?php  
	include('database.php');
	class m_vengay extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_vn()
		{
			$sql = "SELECT * FROM vengay";	
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-vn.php");
			}
		}


		public function m_add_vn($tenvn, $dongia, $matuyen)
		{
			$sql = "SELECT mavn FROM vengay WHERE tenvn = '$tenvn' AND matuyen = '$matuyen' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO vengay (tenvn,
									  		dongia,
										    matuyen)	VALUES ('$tenvn',
										   						'$dongia',
											   					'$matuyen')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_vn($mavn, $tenvn, $dongia, $matuyen)
		{
			$sql = "UPDATE vengay 	SET tenvn = '$tenvn', 
									 	dongia = '$dongia', 
									 	matuyen = '$matuyen'					 
								 	WHERE mavn = $mavn";
			$this->query($sql);
		}


		public function m_get_vn($mavn)
		{
			$sql = "SELECT vn.*, tentuyen FROM vengay vn 
					INNER JOIN tuyen t
					ON vn.matuyen = t.matuyen
					WHERE mavn = $mavn ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_vn($key)
		{
			$sql = "SELECT vn.*, tentuyen FROM vengay vn
					INNER JOIN tuyen t
					ON vn.matuyen = t.matuyen 
					WHERE tenvn LIKE '%$key%' OR dongia LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-vn.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-vn.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_vn($mavn)
		{
			$sql = "DELETE FROM vengay WHERE mavn = '$mavn' ";
			$this->query($sql);
		}
	}
?>