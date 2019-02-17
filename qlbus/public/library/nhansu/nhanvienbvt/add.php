<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['cmnd'])){
		$cmnd = $_POST['cmnd'];
		
		$sql = "SELECT cmnd FROM nhanvienbvt WHERE cmnd = $cmnd";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'cmnd' => $row['cmnd']
		);
		
		echo json_encode($array);
	}
?>