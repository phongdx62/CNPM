<?php
	include("../../../../models/m-nhansu.php");
	$nvbvt = new m_nhansu();
	
	$manvbvt = $_POST['manvbvt'];
	
	$nvbvt->query("DELETE FROM nhanvienbvt WHERE manvbvt = '$manvbvt'");
	
?>