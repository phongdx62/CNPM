<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	
	$ngay = $_POST['ngay'];
	$manvbvt = $_POST['manvbvt'];
	$mavt = $_POST['mavt'];
	$sovephatra = $_POST['sovephatra'];
	$sovethuve = $_POST['sovethuve'];
	$sovebanduoc = $_POST['sovebanduoc'];

	$sql = "SELECT magdvt FROM banvethang  WHERE mavt = $mavt AND manvbvt = $manvbvt ";
	$kd->query($sql);
	$num = $kd->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO banvethang (ngay,
						  				manvbvt,
							  			mavt,
							  			sovephatra,
							  			sovethuve,
							  			sovebanduoc) VALUES('$ngay',
								   							'$manvbvt',
								   							'$mavt',
								   							'$sovephatra',
								   							'$sovethuve',
								   							'$sovebanduoc')";
		$kd->query($sql);
	}
	$kd->disconnect();
		
?>