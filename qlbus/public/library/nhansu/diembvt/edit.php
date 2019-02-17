<?php
	include("../../../../models/m-nhansu.php");
	$dbvt = new m_nhansu();	
	if(ISSET($_POST['madbvt'])){
		$madbvt = $_POST['madbvt'];
		
		$sql = "SELECT * FROM diembvt WHERE madbvt = $madbvt";
		$dbvt->query($sql);
		$row = $dbvt->fetch_assoc();
		
		$array = array(
			'madbvt' => $row['madbvt'],
			'tendbvt' => $row['tendbvt'],
			'diachi' => $row['diachi'],
			'sdt' => $row['sdt']
		);
		
		echo json_encode($array);
	}
?>