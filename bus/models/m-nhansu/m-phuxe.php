<?php  
	include('database.php');
	class m_phuxe extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_px()
		{
			$sql = "SELECT px.*, tentuyen FROM phuxe px
					INNER JOIN tuyen t
					ON px.matuyen = t.matuyen";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-px.php");
			}
		}


		public function m_add_px($tenpx, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $matuyen, $anhpx)
		{
			$sql = "SELECT mapx FROM phuxe WHERE cmnd = '$cmnd' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO phuxe  (tenpx,
									  		diachi,
										  	sdt,
										  	ngaysinh,
										  	cmnd,
										    luong,
										    matuyen,
										    anhpx)	VALUES ('$tenpx',
										   					'$diachi',
										   					'$sdt',
										   					'$ngaysinh',
										   					'$cmnd',
										   					'$luong',
										   					'$matuyen',
										   					'$anhpx')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_px($mapx, $tenpx, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $matuyen, $anhpx)
		{
			$sql = "UPDATE phuxe SET tenpx = '$tenpx', 
									 diachi = '$diachi', 
									 sdt = '$sdt',
									 cmnd = '$cmnd',
									 ngaysinh = '$ngaysinh',
									 luong = '$luong',
									 matuyen = '$matuyen',
									 anhpx = '$anhpx'  						 
								 WHERE mapx = $mapx";
			$this->query($sql);
		}


		public function m_get_px($mapx)
		{
			$sql = "SELECT px.*, tentuyen FROM phuxe px 
					INNER JOIN tuyen t
					ON px.matuyen = t.matuyen
					WHERE mapx = $mapx ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_px($key)
		{
			$sql = "SELECT px.*, tentuyen FROM phuxe px
					INNER JOIN tuyen t
					ON px.matuyen = t.matuyen 
					WHERE tenpx LIKE '%$key%' OR diachi LIKE '%$key%' OR sdt LIKE '%$key%' OR cmnd LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-px.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-px.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_px($mapx)
		{
			$sql = "DELETE FROM phuxe WHERE mapx = $mapx";
			$this->query($sql);
		}
	}
?>