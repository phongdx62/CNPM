<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['mapx']) $$ ISSET($_POST['mavn'])){
		$mapx = $_POST['mapx'];
		$mavn = $_POST['mavn'];
		
		$sql = "SELECT mapx, mavn FROM banvengay WHERE mapx = '$mapx' AND mavn =  '$mavn' ";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'mapx' => $row['mapx'],
			'mavn' => $row['mavn']
		);
		
		echo json_encode($array);
	}
?>