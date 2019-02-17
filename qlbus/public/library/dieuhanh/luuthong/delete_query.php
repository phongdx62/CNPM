<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	$matuyen = $_POST['matuyen'];
	
	$dh->query("DELETE FROM tuyen WHERE matuyen = '$matuyen'");
	
?>