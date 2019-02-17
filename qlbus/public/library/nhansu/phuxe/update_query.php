<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	
	if(ISSET($_POST['mapx']))
	{
		$mapx = $_POST['mapx'];
		$tenpx = $_POST['tenpx'];
		$diachi = $_POST['diachi'];
		$sdt = $_POST['sdt'];
		$cmnd = $_POST['cmnd'];
		$ngaysinh = $_POST['ngaysinh'];
		$luong = $_POST['luong'];
		
		$matuyen = $_POST['matuyen'];
		$anhpx = $_POST['anhpx'];
		
		$sql = "UPDATE  phuxe   SET tenpx = '$tenpx', 
									diachi = '$diachi', 
									sdt = '$sdt',
									cmnd = '$cmnd',
									ngaysinh = '$ngaysinh',
									luong = '$luong',
									matuyen = '$matuyen',
									anhpx = '$anhpx'  						 
							   	WHERE mapx = $mapx";
		$ns->query($sql);
		
		$ns->disconnect();
	}
?>