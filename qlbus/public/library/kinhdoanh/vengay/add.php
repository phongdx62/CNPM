<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['matuyen'])){
		$matuyen = $_POST['matuyen'];
		
		$sql = "SELECT matuyen FROM vengay WHERE matuyen = '$matuyen' ";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'matuyen' => $row['matuyen']
		);
		
		echo json_encode($array);
	}
?>