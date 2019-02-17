<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['bienso'])){
		$bienso = $_POST['bienso'];
		
		$sql = "SELECT * FROM xe WHERE bienso = $bienso";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'bienso' => $bienso,
			'hangsx' => $row['hangsx'],
			'namsx' => $row['namsx'],
			'nhacc' => $row['nhacc'],
			'soghe' => $row['soghe'],
			'matuyen' => $row['matuyen'],
			'anhxe' => $row['anhxe']
		);
		
		echo json_encode($array);
	}
?>