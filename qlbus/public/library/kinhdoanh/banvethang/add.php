<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();	
	if(ISSET($_POST['manvbvt']) $$ ISSET($_POST['mavt'])){
		$manvbvt = $_POST['manvbvt'];
		$mavt = $_POST['mavt'];
		
		$sql = "SELECT manvbvt, mavt FROM banvethang WHERE manvbvt = '$manvbvt' AND mavt =  '$mavt' ";
		$kd->query($sql);
		$row = $kd->fetch_assoc();
		
		$array = array(
			'manvbvt' => $row['manvbvt'],
			'mavt' => $row['mavt']
		);
		
		echo json_encode($array);
	}
?>