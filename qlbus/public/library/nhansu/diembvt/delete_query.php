<?php
	include("../../../../models/m-nhansu.php");
	$dbvt = new m_nhansu();
	
	$madbvt = $_POST['madbvt'];
	
	$dbvt->query("DELETE FROM diembvt WHERE madbvt = '$madbvt'");
	
?>