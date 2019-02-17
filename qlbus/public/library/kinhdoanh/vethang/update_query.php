<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	if(ISSET($_POST['mavt']))
	{
		$mavt = $_POST['mavt'];
		$tenvt = $_POST['tenvt'];
		$dongia = $_POST['dongia'];
		$ghichu = $_POST['ghichu'];

		$sql = "UPDATE  vethang SET tenvt = '$tenvt', 
									dongia = '$dongia', 
									ghichu = '$ghichu'  						 
							   	WHERE mavt = $mavt";
		$kd->query($sql);
	
		$kd->disconnect();
	}

?>