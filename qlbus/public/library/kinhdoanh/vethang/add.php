<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['tenvt']) && ISSET($_POST['dongia'])){
		$tenvt = $_POST['tenvt'];
		$dongia = $_POST['dongia'];
		
		$sql = "SELECT magdvt FROM vethang WHERE tenvt = '$tenvt' AND dongia = 'dongia' ";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'tenvt' => $row['tenvt'],
			'dongia' => $row['dongia']
		);
		
		echo json_encode($array);
	}
?>