<?php  
	include('database.php');
	class m_luuthong extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_luuthong()
		{
			$sql = "SELECT matuyen, tentuyen, chieudi, chieuve FROM tuyen";
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("show-luuthong.php");
				$stt++;
			}
		}


		public function m_add_luuthong($tentuyen, $chieudi, $chieuve)
		{
			$sql = "SELECT matuyen FROM tuyen WHERE tentuyen = '$tentuyen' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO tuyen  (tentuyen,
											chieudi,
											chieuve)	VALUES ('$tentuyen',
										   						'$chieudi',
										   						'$chieuve')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_luuthong($matuyen, $tentuyen, $chieudi, $chieuve)
		{
			$sql = "UPDATE tuyen SET  	tentuyen = '$tentuyen', 
										chieudi = '$chieudi',
										chieuve = '$chieuve'  						 
					WHERE matuyen = '$matuyen' ";
			$this->query($sql);
		}


		public function m_get_luuthong($matuyen)
		{
			$sql = "SELECT tentuyen, chieudi, chieuve FROM tuyen
					WHERE matuyen = '$matuyen' ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_luuthong($key)
		{
			$sql = "SELECT * FROM tuyen
					WHERE matuyen LIKE '%$key%' OR tentuyen LIKE '%$key%' OR chieudi LIKE '%$key%' OR chieuve LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-luuthong.php");

                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-luuthong.php"); 
                    $stt++;      
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}
	}
?>