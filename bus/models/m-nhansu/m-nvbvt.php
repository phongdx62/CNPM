<?php  
	include('database.php');
	class m_nhanvienbvt extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_nvbvt()
		{
			$sql = "SELECT nvbvt.*, tendbvt FROM nhanvienbvt nvbvt
					INNER JOIN diembvt dbvt
					ON nvbvt.madbvt = dbvt.madbvt";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-nvbvt.php");
			}
		}


		public function m_add_nvbvt($tennvbvt, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $madbvt, $anhnvbvt)
		{
			$sql = "SELECT manvbvt FROM nhanvienbvt WHERE cmnd = '$cmnd' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO nhanvienbvt  (tennvbvt,
									  		diachi,
										  	sdt,
										  	ngaysinh,
										  	cmnd,
										    luong,
										    madbvt,
										    anhnvbvt)	VALUES ('$tennvbvt',
										   					'$diachi',
										   					'$sdt',
										   					'$ngaysinh',
										   					'$cmnd',
										   					'$luong',
										   					'$madbvt',
										   					'$anhnvbvt')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_nvbvt($manvbvt, $tennvbvt, $diachi, $sdt, $cmnd, $ngaysinh, $luong, $madbvt, $anhnvbvt)
		{
			$sql = "UPDATE nhanvienbvt SET tennvbvt = '$tennvbvt', 
									 diachi = '$diachi', 
									 sdt = '$sdt',
									 cmnd = '$cmnd',
									 ngaysinh = '$ngaysinh',
									 luong = '$luong',
									 madbvt = '$madbvt',
									 anhnvbvt = '$anhnvbvt'  						 
								 WHERE manvbvt = $manvbvt";
			$this->query($sql);
		}


		public function m_get_nvbvt($manvbvt)
		{
			$sql = "SELECT nvbvt.*, tendbvt FROM nhanvienbvt nvbvt 
					INNER JOIN diembvt dbvt
					ON nvbvt.madbvt = dbvt.madbvt
					WHERE manvbvt = $manvbvt ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_nvbvt($key)
		{
			$sql = "SELECT nvbvt.*, tendbvt FROM nhanvienbvt nvbvt
					INNER JOIN diembvt dbvt
					ON nvbvt.madbvt = dbvt.madbvt 
					WHERE tennvbvt LIKE '%$key%' OR nvbvt.sdt = '%$key%' OR cmnd = '%$key%' OR tendbvt LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-nvbvt.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-nvbvt.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_nvbvt($manvbvt)
		{
			$sql = "DELETE FROM nhanvienbvt WHERE manvbvt = $manvbvt";
			$this->query($sql);
		}
	}
?>