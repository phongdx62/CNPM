<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['magdvn'])){
		$magdvn = $_POST['magdvn'];
		
		$sql = "SELECT * FROM banvengay WHERE magdvn = $magdvn";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'magdvn' => $row['magdvn'],
			'ngay' => $row['ngay'],
			'mavn' => $row['mavn'],
			'mapx' => $row['mapx'],
			'sovephatra' => $row['sovephatra'],
			'sovethuve' => $row['sovethuve'],
			'sovebanduoc' => $row['sovebanduoc']
		);
		
		echo json_encode($array);
	}
?>