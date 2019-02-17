<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	if(ISSET($_POST['matx']))
	{
		$matx = $_POST['matx'];
		$tentx = $_POST['tentx'];
		$diachi = $_POST['diachi'];
		$sdt = $_POST['sdt'];
		$cmnd = $_POST['cmnd'];
		$ngaysinh = $_POST['ngaysinh'];
		$luong = $_POST['luong'];
		$loaibang = $_POST['loaibang'];
		$matuyen = $_POST['matuyen'];
		$anhtx = $_POST['anhtx'];
		
		$sql = "UPDATE  taixe   SET tentx = '$tentx', 
									diachi = '$diachi', 
									sdt = '$sdt',
									cmnd = '$cmnd',
									ngaysinh = '$ngaysinh',
									luong = '$luong',
									loaibang = '$loaibang',
									matuyen = '$matuyen',
									anhtx = '$anhtx'  						 
							   	WHERE matx = $matx";
		$ns->query($sql);
		
		$ns->disconnect();
	}
	
?>