<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['mavt'])){
		$mavt = $_POST['mavt'];
		
		$sql = "SELECT * FROM vethang WHERE mavt = $mavt";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'mavt' => $row['mavt'],
			'tenvt' => $row['tenvt'],
			'dongia' => $row['dongia'],
			'ghichu' => $row['ghichu']
		);
		
		echo json_encode($array);
	}
?>