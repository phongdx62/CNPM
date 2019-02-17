<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	$tentuyen = $_POST['tentuyen'];
	$giobd = $_POST['giobd'];
	$giokt = $_POST['giokt'];
	$tansuat = $_POST['tansuat'];
	$soluongxe = $_POST['soluongxe'];
	
	$sql = "SELECT matuyen FROM tuyen WHERE tentuyen = '$tentuyen' ";
	$dh->query($sql);
	$num = $dh->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO tuyen  (tentuyen,
							  		giobd,
								  	giokt,
								    tansuat,
								    soluongxe)	VALUES ('$tentuyen',
									   					'$giobd',
									   					'$giokt',
									   					'$tansuat',
									   					'$soluongxe')";
		$dh->query($sql);
		
	}
	$dh->disconnect();		
?>