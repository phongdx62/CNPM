<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	if(ISSET($_POST['matuyen']))
	{
		$matuyen = $_POST['matuyen'];
		$tentuyen = $_POST['tentuyen'];
		$giobd = $_POST['giobd'];
		$giokt = $_POST['giokt'];
		$tansuat = $_POST['tansuat'];
		$soluongxe = $_POST['soluongxe'];
		
		$sql = "UPDATE  tuyen   SET tentuyen = '$tentuyen', 
									giobd = '$giobd', 
									giokt = '$giokt',
									tansuat = '$tansuat',
									soluongxe = '$soluongxe'						 
							   	WHERE matuyen = $matuyen";
		$dh->query($sql);
		
		$dh->disconnect();
	}
	
?>