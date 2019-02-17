<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	$bienso = $_POST['bienso'];
	
	$dh->query("DELETE FROM xe WHERE bienso = '$bienso'");
	
?>