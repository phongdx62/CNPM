<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	if(ISSET($_POST['magdvt']))
	{
		$magdvt = $_POST['magdvt'];
		$ngay = $_POST['ngay'];
		$manvbvt = $_POST['manvbvt'];
		$mavt = $_POST['mavt'];
		$sovephatra = $_POST['sovephatra'];
		$sovethuve = $_POST['sovethuve'];
		$sovebanduoc = $_POST['sovebanduoc'];

		$sql = "UPDATE  banvethang  SET ngay = '$ngay', 
										manvbvt = '$manvbvt', 
										mavt = '$mavt',
										sovephatra = '$sovephatra',
										sovethuve = '$sovethuve',
										sovebanduoc = '$sovebanduoc'  						 
							   		WHERE magdvt = $magdvt";
		$kd->query($sql);
	
		$kd->disconnect();
	}

?>