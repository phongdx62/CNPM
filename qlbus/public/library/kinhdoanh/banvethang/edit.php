<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['magdvt'])){
		$magdvt = $_POST['magdvt'];
		
		$sql = "SELECT * FROM banvethang WHERE magdvt = $magdvt";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'magdvt' => $row['magdvt'],
			'ngay' => $row['ngay'],
			'mavt' => $row['mavt'],
			'manvbvt' => $row['manvbvt'],
			'sovephatra' => $row['sovephatra'],
			'sovethuve' => $row['sovethuve'],
			'sovebanduoc' => $row['sovebanduoc']
		);
		
		echo json_encode($array);
	}
?>