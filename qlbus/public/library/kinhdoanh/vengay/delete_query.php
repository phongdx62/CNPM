<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$mavn = $_POST['mavn'];
	
	$kd->query("DELETE FROM vengay WHERE mavn = '$mavn'");
	
?>