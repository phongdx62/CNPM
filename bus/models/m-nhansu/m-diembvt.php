<?php  
	include('database.php');
	class m_diembvt extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_dbvt()
		{
			$sql = "SELECT * FROM diembvt";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-dbvt.php");
			}
		}


		public function m_add_dbvt($tendbvt, $diachi, $sdt)
		{
			$sql = "SELECT madbvt FROM diembvt WHERE tendbvt = '$tendbvt' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO diembvt(tendbvt,
									  		diachi,
										  	sdt)	VALUES ('$tendbvt',
										   					'$diachi',
										   					'$sdt')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_dbvt($madbvt, $tendbvt, $diachi, $sdt)
		{
			$sql = "UPDATE diembvt SET 	tendbvt = '$tendbvt', 
									 	diachi = '$diachi', 
									 	sdt = '$sdt' 						 
								   WHERE madbvt = $madbvt";
			$this->query($sql);
		}


		public function m_get_dbvt($madbvt)
		{
			$sql = "SELECT * FROM diembvt
					WHERE madbvt = $madbvt ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_dbvt($key)
		{
			$sql = "SELECT * FROM diembvt 
					WHERE tendbvt LIKE '%$key%' OR sdt = '%$key%' OR diachi LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-dbvt.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-dbvt.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_dbvt($madbvt)
		{
			$sql = "DELETE FROM diembvt WHERE madbvt = $madbvt";
			$this->query($sql);
		}
	}
?>