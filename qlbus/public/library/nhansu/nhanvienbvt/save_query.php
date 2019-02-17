<?php
	include("../../../../models/m-nhansu.php");
	$nvbvt = new m_nhansu();
	
	$tennvbvt = $_POST['tennvbvt'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$cmnd = $_POST['cmnd'];
	$ngaysinh = $_POST['ngaysinh'];
	$luong = $_POST['luong'];
	$madbvt = $_POST['madbvt'];
	$anhnvbvt = $_POST['anhnvbvt'];
	
	$sql = "SELECT manvbvt FROM nhanvienbvt WHERE cmnd = '$cmnd' ";
	$nvbvt->query($sql);
	$num = $nvbvt->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO nhanvienbvt    (tennvbvt,
									  		diachi,
										  	sdt,
										  	ngaysinh,
										  	cmnd,
										    luong,
										    madbvt,
										    anhnvbvt)	VALUES ('$tennvbvt',
										   					'$diachi',
										   					'$sdt',
										   					'$ngaysinh',
										   					'$cmnd',
										   					'$luong',
										   					'$madbvt',
										   					'$anhnvbvt')";
		$nvbvt->query($sql);
	}
	$nvbvt->disconnect();
		
?>