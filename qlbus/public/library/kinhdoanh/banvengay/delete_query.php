<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$magdvn = $_POST['magdvn'];
	
	$kd->query("DELETE FROM banvengay WHERE magdvn = '$magdvn'");
	
?>