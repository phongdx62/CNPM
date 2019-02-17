<?php  
	include('database.php');
	class m_banvethang extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_bvt()
		{
			$sql = "SELECT bvt.*, tennvbvt, dongia FROM banvethang bvt
					INNER JOIN nhanvienbvt nvbvt ON bvt.manvbvt = nvbvt.manvbvt
					INNER JOIN vethang vt ON bvt.mavt = vt.mavt";	
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-bvt.php");
			}
		}


		public function m_add_bvt($ngay, $manvbvt, $mavt, $sovephatra, $sovethuve, $sovebanduoc)
		{
			$sql = "SELECT magdvt FROM banvethang WHERE ngay = '$ngay' AND manvbvt = '$manvbvt' AND mavt = '$mavt' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO banvethang (ngay,
									  			manvbvt,
										    	mavt,
										    	sovephatra,
										    	sovethuve,
										    	sovebanduoc) 	VALUES ('$ngay',
										   								'$manvbvt',
											   							'$mavt',
											   							'$sovephatra',
											   							'$sovethuve',
											   							'$sovebanduoc')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_bvt($magdvt, $ngay, $manvbvt, $mavt, $sovephatra, $sovethuve, $sovebanduoc)
		{
			$sql = "UPDATE  banvethang 	SET ngay = '$ngay', 
									 		manvbvt = '$manvbvt', 
									 		mavt = '$mavt',
									 		sovephatra = '$sovephatra',
									 		sovethuve = '$sovethuve',
									 		sovebanduoc = '$sovebanduoc'					 
								 		WHERE magdvt = $magdvt";
			$this->query($sql);
		}


		public function m_get_bvt($magdvt)
		{
			$sql = "SELECT bvt.*, tennvbvt, dongia FROM banvethang bvt
					INNER JOIN nhanvienbvt nvbvt ON bvt.manvbvt = nvbvt.manvbvt
					INNER JOIN vethang vt ON vt.mavt = bvt.mavt
					WHERE magdvt = $magdvt ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_bvt($key)
		{
			$sql = "SELECT bvt.*, tennvbvt, dongia FROM banvethang bvt
					INNER JOIN nhanvienbvt nvbvt ON bvt.manvbvt = nvbvt.manvbvt
					INNER JOIN vethang vt ON bvt.mavt = vt.mavt 
					WHERE ngay LIKE '%$key%' OR dongia LIKE '%$key%' OR tennvbvt LIKE '%$key%' OR bvt.mavt LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-bvt.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-bvt.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_bvt($magdvt)
		{
			$sql = "DELETE FROM banvethang WHERE magdvt = $magdvt";
			$this->query($sql);
		}
	}
?>