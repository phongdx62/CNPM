<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['mapx'])){
		$mapx = $_POST['mapx'];
		
		$sql = "SELECT * FROM phuxe WHERE mapx = $mapx";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'mapx' => $row['mapx'],
			'tenpx' => $row['tenpx'],
			'diachi' => $row['diachi'],
			'sdt' => $row['sdt'],
			'cmnd' => $row['cmnd'],
			'ngaysinh' => $row['ngaysinh'],
			'luong' => $row['luong'],
			'matuyen' => $row['matuyen'],
			'anhpx' => $row['anhpx']
		);
		
		echo json_encode($array);
	}
?>