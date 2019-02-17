<?php
	include("../../../../models/m-nhansu.php");
	$nvbvt = new m_nhansu();
	
	if(ISSET($_POST['manvbvt']))
	{
		$manvbvt = $_POST['manvbvt'];
		$tennvbvt = $_POST['tennvbvt'];
		$diachi = $_POST['diachi'];
		$sdt = $_POST['sdt'];
		$cmnd = $_POST['cmnd'];
		$ngaysinh = $_POST['ngaysinh'];
		$luong = $_POST['luong'];
		
		$madbvt = $_POST['madbvt'];
		$anhnvbvt = $_POST['anhnvbvt'];
	
		$sql = "UPDATE  nhanvienbvt SET tennvbvt = '$tennvbvt', 
										diachi = '$diachi', 
										sdt = '$sdt',
										cmnd = '$cmnd',
										ngaysinh = '$ngaysinh',
										luong = '$luong',
										madbvt = '$madbvt',
										anhnvbvt = '$anhnvbvt'  						 
							   		WHERE manvbvt = $manvbvt";
		$nvbvt->query($sql);	
		
		$nvbvt->disconnect();
	}
?>