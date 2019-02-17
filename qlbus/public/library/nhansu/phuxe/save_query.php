<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	$tenpx = $_POST['tenpx'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$cmnd = $_POST['cmnd'];
	$ngaysinh = $_POST['ngaysinh'];
	$luong = $_POST['luong'];
	$matuyen = $_POST['matuyen'];
	$anhpx = $_POST['anhpx'];
	
	$sql = "SELECT mapx FROM phuxe WHERE cmnd = '$cmnd' ";
	$ns->query($sql);
	$num = $ns->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO phuxe  (tenpx,
							  		diachi,
								  	sdt,
								  	ngaysinh,
								  	cmnd,
								    luong,
								    matuyen,
								    anhpx)	VALUES ('$tenpx',
								   					'$diachi',
								   					'$sdt',
								   					'$ngaysinh',
								   					'$cmnd',
								   					'$luong',
								   					'$matuyen',
								   					'$anhpx')";
		$ns->query($sql);
	}
	$ns->disconnect();	
		
?>