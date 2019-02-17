<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['mavn'])){
		$mavn = $_POST['mavn'];
		
		$sql = "SELECT * FROM vengay WHERE mavn = $mavn";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'mavn' => $row['mavn'],
			'tenvn' => $row['tenvn'],
			'dongia' => $row['dongia'],
			'matuyen' => $row['matuyen']
		);
		
		echo json_encode($array);
	}
?>