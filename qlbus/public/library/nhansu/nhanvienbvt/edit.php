<?php
	include("../../../../models/m-nhansu.php");
	$nvbvt = new m_nhansu();	
	if(ISSET($_POST['manvbvt'])){
		$manvbvt = $_POST['manvbvt'];
		
		$sql = "SELECT * FROM nhanvienbvt WHERE manvbvt = $manvbvt";
		$nvbvt->query($sql);
		$row = $nvbvt->fetch_assoc();
		
		$array = array(
			'manvbvt' => $row['manvbvt'],
			'tennvbvt' => $row['tennvbvt'],
			'diachi' => $row['diachi'],
			'sdt' => $row['sdt'],
			'cmnd' => $row['cmnd'],
			'ngaysinh' => $row['ngaysinh'],
			'luong' => $row['luong'],
			'madbvt' => $row['madbvt'],
			'anhnvbvt' => $row['anhnvbvt']
		);
		
		echo json_encode($array);
	}
?>