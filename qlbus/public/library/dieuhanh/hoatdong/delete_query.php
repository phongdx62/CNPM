<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();
	
	$mahd = $_POST['mahd'];
	
	$hd->query("DELETE FROM hoatdong WHERE mahd = '$mahd'");
	
?>