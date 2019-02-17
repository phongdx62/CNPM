<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$ngay = $_POST['ngay'];
	$mapx = $_POST['mapx'];
	$mavn = $_POST['mavn'];
	$sovephatra = $_POST['sovephatra'];
	$sovethuve = $_POST['sovethuve'];
	$sovebanduoc = $_POST['sovebanduoc'];

	$sql = "SELECT magdvn FROM banvengay  WHERE mavn = $mavn AND mapx = $mapx ";
	$kd->query($sql);
	$num = $kd->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO banvengay  (ngay,
						  				mapx,
							  			mavn,
							  			sovephatra,
							  			sovethuve,
							  			sovebanduoc) VALUES('$ngay',
								   							'$mapx',
								   							'$mavn',
								   							'$sovephatra',
								   							'$sovethuve',
								   							'$sovebanduoc')";
		$kd->query($sql);
	}
	$kd->disconnect();
		
?>