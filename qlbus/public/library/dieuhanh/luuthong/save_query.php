<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	$tentuyen = $_POST['tentuyen'];
	$chieudi = $_POST['chieudi'];
	$chieuve = $_POST['chieuve'];
	
	$sql = "SELECT matuyen FROM tuyen WHERE tentuyen = '$tentuyen' ";
	$dh->query($sql);
	$num = $dh->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO tuyen  (tentuyen,
								  	chieudi,	
								    chieuve)	VALUES ('$tentuyen',
									   					'$chieudi',
									   					'$chieuve')";
		$dh->query($sql);
		
	}
	$dh->disconnect();		
?>