<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	$matx = $_POST['matx'];
	
	$ns->query("DELETE FROM taixe WHERE matx = '$matx'");
	
?>