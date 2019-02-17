<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	if(ISSET($_POST['mavn']))
	{
		$mavn = $_POST['mavn'];
		$tenvn = $_POST['tenvn'];
		$dongia = $_POST['dongia'];
		$matuyen = $_POST['matuyen'];

		$sql = "UPDATE  vengay SET tenvn = '$tenvn', 
									dongia = '$dongia', 
									matuyen = '$matuyen'  						 
							   	WHERE mavn = $mavn";
		$kd->query($sql);
	
		$kd->disconnect();
	}

?>