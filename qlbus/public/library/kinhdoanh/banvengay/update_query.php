<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	if(ISSET($_POST['magdvn']))
	{
		$magdvn = $_POST['magdvn'];
		$ngay = $_POST['ngay'];
		$mapx = $_POST['mapx'];
		$mavn = $_POST['mavn'];
		$sovephatra = $_POST['sovephatra'];
		$sovethuve = $_POST['sovethuve'];
		$sovebanduoc = $_POST['sovebanduoc'];

		$sql = "UPDATE  banvengay   SET ngay = '$ngay', 
										mapx = '$mapx', 
										mavn = '$mavn',
										sovephatra = '$sovephatra',
										sovethuve = '$sovethuve',
										sovebanduoc = '$sovebanduoc'  						 
							   		WHERE magdvn = $magdvn";
		$kd->query($sql);
	
		$kd->disconnect();
	}

?>