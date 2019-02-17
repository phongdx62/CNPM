<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$mavt = $_POST['mavt'];
	
	$kd->query("DELETE FROM vethang WHERE mavt = '$mavt'");
	
?>