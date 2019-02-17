<?php  
	include('database.php');
	class m_hoatdong extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_hoatdong()
		{
			$sql = "SELECT hd.*, bienso, tentuyen, tentx, tenpx FROM hoatdong hd
					INNER JOIN tuyen t ON hd.matuyen = t.matuyen
					INNER JOIN taixe tx ON hd.matx = tx.matx
					INNER JOIN phuxe px ON hd.mapx = px.mapx";
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-hoatdong.php");
			}
		}


		public function m_add_hoatdong($ngay, $ca, $bienso, $matuyen, $matx, $mapx)
		{
			$sql = "SELECT mahd FROM hoatdong WHERE ca = '$ca' AND bienso = '$bienso' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO hoatdong   (ngay,
												ca,
												bienso,
												matuyen,
												matx,
												mapx)	VALUES ('$ngay',
										   						'$ca',
										   						'$bienso',
										   						'$matuyen',
										   						'$matx',
										   						'$mapx')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_hoatdong($mahd, $ngay, $ca, $bienso, $matuyen, $matx, $mapx)
		{
			$sql = "UPDATE hoatdong SET ngay = '$ngay', 
										ca = '$ca',
										bienso = '$bienso',
										matuyen = '$matuyen',
										matx = '$matx',
										mapx = '$mapx'  						 
					WHERE mahd = '$mahd' ";
			$this->query($sql);
		}


		public function m_get_hoatdong($mahd)
		{
			$sql = "SELECT hd.*, bienso, tentuyen, tentx, tenpx FROM hoatdong hd
					INNER JOIN tuyen t ON hd.matuyen = t.matuyen
					INNER JOIN taixe tx ON hd.matx = tx.matx
					INNER JOIN phuxe px ON hd.mapx = px.mapx
					WHERE mahd = $mahd";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_hoatdong($key)
		{
			$sql = "SELECT hd.*, bienso, tentuyen, tentx, tenpx FROM hoatdong hd
					INNER JOIN tuyen t ON hd.matuyen = t.matuyen
					INNER JOIN taixe tx ON hd.matx = tx.matx
					INNER JOIN phuxe px ON hd.mapx = px.mapx
					WHERE ngay LIKE '%$key%' OR ca LIKE '%$key%' OR bienso LIKE '%$key%' OR tentuyen LIKE '%key%' OR tentx LIKE '%key%' OR tenpx LIKE '%key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-hoatdong.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-hoatdong.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_hoatdong($mahd)
		{
			$sql = "DELETE FROM hoatdong WHERE mahd = '$mahd' ";
			$this->query($sql);
		}
	}
?>