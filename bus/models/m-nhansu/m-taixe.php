<?php  
	include('database.php');
	class m_taixe extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_tx()
		{
			$sql = "SELECT tx.*, tentuyen FROM taixe tx
					INNER JOIN tuyen t
					ON tx.matuyen = t.matuyen";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-tx.php");
			}
		}


		public function m_add_tx($tentx, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $loaibang, $matuyen, $anhtx)
		{
			$sql = "SELECT matx FROM taixe WHERE cmnd = '$cmnd' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO taixe  (tentx,
									  		diachi,
										  	sdt,
										  	ngaysinh,
										  	cmnd,
										    loaibang,
										    luong,
										    matuyen,
										    anhtx)	VALUES ('$tentx',
										   					'$diachi',
										   					'$sdt',
										   					'$ngaysinh',
										   					'$cmnd',
										   					'$loaibang',
										   					'$luong',
										   					'$matuyen',
										   					'$anhtx')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_tx($matx, $tentx, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $loaibang, $matuyen, $anhtx)
		{
			$sql = "UPDATE taixe SET tentx = '$tentx', 
									 diachi = '$diachi', 
									 sdt = '$sdt',
									 cmnd = '$cmnd',
									 ngaysinh = '$ngaysinh',
									 luong = '$luong',
									 loaibang = '$loaibang',
									 matuyen = '$matuyen',
									 anhtx = '$anhtx'  						 
								 WHERE matx = $matx";
			$this->query($sql);
		}


		public function m_get_tx($matx)
		{
			$sql = "SELECT tx.*, tentuyen FROM taixe tx 
					INNER JOIN tuyen t
					ON tx.matuyen = t.matuyen
					WHERE matx = $matx ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_tx($key)
		{
			$sql = "SELECT tx.*, tentuyen FROM taixe tx
					INNER JOIN tuyen t
					ON tx.matuyen = t.matuyen 
					WHERE tentx LIKE '%$key%' OR diachi LIKE '%$key%' OR sdt LIKE '%$key%' OR cmnd LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-tx.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-tx.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_tx($matx)
		{
			$sql = "DELETE FROM taixe WHERE matx = '$matx' ";
			$this->query($sql);
		}
	}
?>