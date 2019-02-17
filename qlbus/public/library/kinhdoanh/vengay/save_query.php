<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$tenvn = $_POST['tenvn'];
	$dongia = $_POST['dongia'];
	$matuyen = $_POST['matuyen'];

	$sql = "SELECT mavn FROM vengay  WHERE matuyen = '$matuyen' ";
	$kd->query($sql);
	$num = $kd->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO vengay (tenvn,
						  			dongia,
							  		matuyen) VALUES('$tenvn',
							   						'$dongia',
							   						'$matuyen')";
		$kd->query($sql);
	}
	$kd->disconnect();
		
?>