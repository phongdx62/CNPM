<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	$mapx = $_POST['mapx'];
	
	$ns->query("DELETE FROM phuxe WHERE mapx = '$mapx'");
	
?>