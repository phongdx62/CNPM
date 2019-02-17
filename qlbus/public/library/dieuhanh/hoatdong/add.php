<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();	
	if(ISSET($_POST['bienso']) && ISSET($_POST['ca'])){
		$ngay = $_POST['ngay'];
		$bienso = $_POST['bienso'];
		$ca = $_POST['ca'];
		
		$sql = "SELECT ngay, bienso, ca FROM hoatdong WHERE ngay = '$ngay' AND bienso = '$bienso' AND ca = '$ca' ";
		$hd->query($sql);
		$row = $hd->fetch_assoc();
		
		$array = array(
			'ngay' => $row['ngay'],
			'bienso' => $row['bienso'],
			'ca' => $row['ca']
		);
		
		echo json_encode($array);
	}
?>