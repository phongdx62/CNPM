<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();	
	if(ISSET($_POST['bienso'])){
		$bienso = $_POST['bienso'];
		
		$sql = "SELECT bienso FROM xe WHERE bienso = '$bienso' ";
		$dh->query($sql);
		$row = $dh->fetch_assoc();
		
		$array = array(
			'bienso' => $row['bienso']
		);
		
		echo json_encode($array);
	}
?>