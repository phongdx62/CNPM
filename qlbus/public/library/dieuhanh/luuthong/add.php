<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();	
	if(ISSET($_POST['tentuyen'])){
		$tentuyen = $_POST['tentuyen'];
		
		$sql = "SELECT tentuyen FROM tuyen WHERE tentuyen = '$tentuyen' ";
		$dh->query($sql);
		$row = $dh->fetch_assoc();
		
		$array = array(
			'tentuyen' => $row['tentuyen']
		);
		
		echo json_encode($array);
	}
?>