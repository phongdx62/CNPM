<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();	
	if(ISSET($_POST['matuyen'])){
		$matuyen = $_POST['matuyen'];
		
		$sql = "SELECT * FROM tuyen WHERE matuyen = $matuyen";
		$dh->query($sql);
		$row = $dh->fetch_assoc();
		
		$array = array(
			'matuyen' => $row['matuyen'],
			'tentuyen' => $row['tentuyen'],
			'giobd' => $row['giobd'],
			'giokt' => $row['giokt'],
			'chieudi' => $row['chieudi'],
			'chieuve' => $row['chieuve'],
			'tansuat' => $row['tansuat'],
			'soluongxe' => $row['soluongxe']
		);
		
		echo json_encode($array);
	}
?>