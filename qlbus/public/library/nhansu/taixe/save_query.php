<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	$tentx = $_POST['tentx'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$cmnd = $_POST['cmnd'];
	$ngaysinh = $_POST['ngaysinh'];
	$luong = $_POST['luong'];
	$loaibang = $_POST['loaibang'];
	$matuyen = $_POST['matuyen'];
	$anhtx = $_POST['anhtx'];
	
	$sql = "SELECT * FROM taixe WHERE cmnd = '$cmnd' ";
	$ns->query($sql);
	$num = $ns->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO taixe  (tentx,
							  		diachi,
								  	sdt,
								  	ngaysinh,
								  	cmnd,
								    loaibang,
								    luong,
								    matuyen,
								    anhtx)	VALUES ('$tentx',
								   					'$diachi',
								   					'$sdt',
								   					'$ngaysinh',
								   					'$cmnd',
								   					'$loaibang',
								   					'$luong',
								   					'$matuyen',
								   					'$anhtx')";
		$ns->query($sql);
		
	}
	$ns->disconnect();		
?>