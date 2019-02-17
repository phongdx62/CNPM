<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();	
	if(ISSET($_POST['tendbvt'])){
		$tendbvt = $_POST['tendbvt'];
		
		$sql = "SELECT tendbvt FROM diembvt WHERE tendbvt = '$tendbvt' ";
		$ns->query($sql);
		$row = $ns->fetch_assoc();
		
		$array = array(
			'tendbvt' => $row['tendbvt']
		);
		
		echo json_encode($array);
	}
?>