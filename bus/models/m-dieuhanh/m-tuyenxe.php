<?php  
	include('database.php');
	class m_tuyenxe extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_tuyenxe()
		{
			$sql = "SELECT * FROM tuyen";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-tuyenxe.php");
			}
		}


		public function m_add_tuyenxe($tentuyen, $giobd, $giokt, $tansuat, $soluongxe)
		{
			$sql = "SELECT matuyen FROM tuyen WHERE tentuyen = '$tentuyen' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO tuyen  (tentuyen,
									  		giobd,
											giokt,
											tansuat,
											soluongxe)	VALUES ('$tentuyen',
										   						'$giobd',
										   						'$giokt',
										   						'$tansuat',
										   						'$soluongxe')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_tuyenxe($matuyen, $tentuyen, $giobd, $giokt, $tansuat, $soluongxe)
		{
			$sql = "UPDATE tuyen SET  tentuyen = '$tentuyen', 
										giobd = '$giobd', 
										giokt = '$giokt',
										tansuat = '$tansuat',
										soluongxe = '$soluongxe'  						 
					WHERE matuyen = '$matuyen' ";
			$this->query($sql);
		}


		public function m_get_tuyenxe($matuyen)
		{
			$sql = "SELECT * FROM tuyen
					WHERE matuyen = '$matuyen' ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_tuyenxe($key)
		{
			$sql = "SELECT * FROM tuyen
					WHERE matuyen LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-tuyenxe.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-tuyenxe.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_tuyenxe($matuyen)
		{
			$sql = "DELETE FROM tuyen WHERE matuyen = '$matuyen' ";
			$this->query($sql);
		}
	}
?>