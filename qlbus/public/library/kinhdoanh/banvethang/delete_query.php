<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$magdvt = $_POST['magdvt'];
	
	$kd->query("DELETE FROM banvethang WHERE magdvt = '$magdvt'");
	
?>