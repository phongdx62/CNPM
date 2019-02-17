<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();	
	if(ISSET($_POST['mahd'])){
		$mahd = $_POST['mahd'];
		
		$sql = "SELECT * FROM hoatdong WHERE mahd = $mahd";
		$hd->query($sql);
		$row = $hd->fetch_assoc();
		
		$array = array(
			'mahd' => $row['mahd'],
			'ngay' => $row['ngay'],
			'ca' => $row['ca'],
			'bienso' => $row['bienso'],
			'matuyen' => $row['matuyen'],
			'matx' => $row['matx'],
			'mapx' => $row['mapx']
		);
		
		echo json_encode($array);
	}
?>