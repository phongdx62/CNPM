<?php  
	include('database.php');
	class m_banvengay extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_bvn()
		{
			$sql = "SELECT bvn.*, tenpx, dongia FROM banvengay bvn
					INNER JOIN phuxe px ON bvn.mapx = px.mapx
					INNER JOIN vengay vn ON bvn.mavn = vn.mavn";	
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-bvn.php");
			}
		}


		public function m_add_bvn($ngay, $mapx, $mavn, $sovephatra, $sovethuve, $sovebanduoc)
		{
			$sql = "SELECT magdvn FROM banvengay WHERE ngay = '$ngay' AND mapx = '$mapx' AND mavn = '$mavn' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO banvengay  (ngay,
									  			mapx,
										    	mavn,
										    	sovephatra,
										    	sovethuve,
										    	sovebanduoc)	VALUES ('$ngay',
										   								'$mapx',
											   							'$mavn',
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


		public function m_edit_bvn($magdvn, $ngay, $mapx, $mavn, $sovephatra, $sovethuve, $sovebanduoc)
		{
			$sql = "UPDATE  banvengay 	SET ngay = '$ngay', 
									 		mapx = '$mapx', 
									 		mavn = '$mavn',
									 		sovephatra = '$sovephatra',
									 		sovethuve = '$sovethuve',
									 		sovebanduoc = '$sovebanduoc'					 
								 		WHERE magdvn = $magdvn";
			$this->query($sql);
		}


		public function m_get_bvn($magdvn)
		{
			$sql = "SELECT bvn.*, tenpx, dongia FROM banvengay bvn
					INNER JOIN phuxe px ON bvn.mapx = px.mapx
					INNER JOIN vengay vn ON vn.mavn = bvn.mavn
					WHERE magdvn = $magdvn ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_bvn($key)
		{
			$sql = "SELECT bvn.*, tenpx, dongia FROM banvengay bvn
					INNER JOIN phuxe px ON bvn.mapx = px.mapx
					INNER JOIN vengay vn ON bvn.mavn = vn.mavn 
					WHERE ngay LIKE '%$key%' OR dongia LIKE '%$key%' OR tenpx LIKE '%$key%' OR bvn.mavn LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-bvn.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-bvn.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}

		public function m_del_bvn($magdvn)
		{
			$sql = "DELETE FROM banvengay WHERE magdvn = $magdvn";
			$this->query($sql);
		}
	}
?>