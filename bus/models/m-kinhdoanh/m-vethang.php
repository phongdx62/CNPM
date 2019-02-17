<?php  
	include('database.php');
	class m_vethang extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_vt()
		{
			$sql = "SELECT * FROM vethang";	
			$this->query($sql);
			
			while($row = $this->fetch_assoc())
			{
				require("show-vt.php");
			}
		}


		public function m_add_vt($tenvt, $dongia, $ghichu)
		{
			$sql = "SELECT mavt FROM vethang WHERE tenvt = '$tenvt' AND dongia = '$dongia' ";
			$this->query($sql);
			$num = $this->num_rows();
			if($num == 0)
			{
				$sql = "INSERT INTO vethang(tenvt,
									  		dongia,
										    ghichu)	VALUES ('$tenvt',
										   					'$dongia',
											   				'$ghichu')";
				$this->query($sql);
			}
			else
			{
				return "fail";
			}		
		}


		public function m_edit_vt($mavt, $tenvt, $dongia, $ghichu)
		{
			$sql = "UPDATE vethang 	SET tenvt = '$tenvt', 
									 	dongia = '$dongia', 
									 	ghichu = '$ghichu'					 
								 	WHERE mavt = $mavt";
			$this->query($sql);
		}


		public function m_get_vt($mavt)
		{
			$sql = "SELECT * FROM vethang WHERE mavt = $mavt";				
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_search_vt($key)
		{
			$sql = "SELECT * FROM vethang";		
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("table-vt.php");
                
                while ($row = $this->fetch_assoc()) 
                {
                    require("show-vt.php");       
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_del_vt($mavt)
		{
			$sql = "DELETE FROM vethang WHERE mavt = '$mavt' ";
			$this->query($sql);
		}
	}
?>