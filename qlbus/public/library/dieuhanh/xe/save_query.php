<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	$bienso = $_POST['bienso'];
	$hangsx = $_POST['hangsx'];
	$namsx = $_POST['namsx'];
	$nhacc = $_POST['nhacc'];
	$soghe = $_POST['soghe'];
	$matuyen = $_POST['matuyen'];
	$anhxe = $_POST['anhxe'];
	
	$sql = "SELECT bienso FROM xe WHERE bienso = '$bienso' ";
	$dh->query($sql);
	$num = $dh->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO xe (bienso,
							  	hangsx,
							  	namsx,
							  	nhacc,
							    soghe,
							    matuyen,
							    anhxe)	VALUES ('$bienso',
							   					'$hangsx',
							   					'$namsx',
							   					'$nhacc',
							   					'$soghe',
							   					'$matuyen',
							   					'$anhxe')";
		$dh->query($sql);
		
	}
	$dh->disconnect();		
?>