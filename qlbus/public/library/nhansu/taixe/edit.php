<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['matx'])){
		$matx = $_POST['matx'];
		
		$sql = "SELECT * FROM taixe WHERE matx = $matx";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'matx' => $row['matx'],
			'tentx' => $row['tentx'],
			'diachi' => $row['diachi'],
			'sdt' => $row['sdt'],
			'cmnd' => $row['cmnd'],
			'ngaysinh' => $row['ngaysinh'],
			'luong' => $row['luong'],
			'loaibang' => $row['loaibang'],
			'matuyen' => $row['matuyen'],
			'anhtx' => $row['anhtx']
		);
		
		echo json_encode($array);
	}
?>