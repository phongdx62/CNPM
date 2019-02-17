<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();	
	if(ISSET($_POST['matuyen'])){
		$matuyen = $_POST['matuyen'];
		
		$sql = "SELECT matuyen, tentuyen, chieudi, chieuve FROM tuyen WHERE matuyen = $matuyen";
		$dh->query($sql);
		$row = $dh->fetch_assoc();
		
		$array = array(
			'matuyen' => $row['matuyen'],
			'tentuyen' => $row['tentuyen'],
			'chieudi' => $row['chieudi'],
			'chieuve' => $row['chieuve']
		);
		
		echo json_encode($array);
	}
?>