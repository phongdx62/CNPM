<?php  
	include('database.php');
	class m_xe extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_xe()
		{
			$sql = "SELECT x.*, tentuyen FROM xe x
					INNER JOIN tuyen t
					ON x.matuyen = t.matuyen";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-xe.php");
			}
		}


		public function m_add_xe($bienso, $hangsx, $namsx, $nhacc, $soghe, $matuyen, $anhxe)
		{
			$sql = "SELECT bienso FROM xe WHERE bienso = '$bienso' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO xe (bienso,
										hangsx,
									  	namsx,
										nhacc,
										soghe,
										matuyen,
										anhxe)	VALUES ('$bienso',
														'$hangsx',
										   				'$namsx',
										   				'$nhacc',
										   				'$soghe',
										   				'$matuyen',
										   				'$anhxe')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_xe($bienso, $biensomoi, $hangsx, $namsx, $nhacc, $soghe, $matuyen, $anhxe)
		{
			$sql = "UPDATE xe SET   bienso = '$biensomoi',
									hangsx = '$hangsx', 
									namsx = '$namsx', 
									nhacc = '$nhacc',
									soghe = '$soghe',
									matuyen = '$matuyen',
									anhxe = '$anhxe'  						 
					WHERE bienso = '$bienso' ";
			$this->query($sql);
		}


		public function m_get_xe($bienso)
		{
			$sql = "SELECT x.*, tentuyen FROM xe x 
					INNER JOIN tuyen t
					ON x.matuyen = t.matuyen
					WHERE bienso = '$bienso' ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_xe($key)
		{
			$sql = "SELECT x.*, tentuyen FROM xe x
					INNER JOIN tuyen t
					ON x.matuyen = t.matuyen 
					WHERE bienso LIKE '%$key%' OR hangsx LIKE '%$key%' OR nhacc LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-xe.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-xe.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_xe($bienso)
		{
			$sql = "DELETE FROM xe WHERE bienso = '$bienso' ";
			$this->query($sql);
		}
	}
?>