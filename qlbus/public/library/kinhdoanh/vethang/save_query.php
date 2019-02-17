<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$tenvt = $_POST['tenvt'];
	$dongia = $_POST['dongia'];
	$ghichu = $_POST['ghichu'];

	$sql = "SELECT magdvt FROM vethang  WHERE tenvt = '$tenvt' AND dongia = '$dongia' ";
	$kd->query($sql);
	$num = $kd->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO vethang(tenvt,
						  			dongia,
							  		ghichu) VALUES('$tenvt',
							   						'$dongia',
							   						'$ghichu')";
		$kd->query($sql);
	}
	$kd->disconnect();
		
?>