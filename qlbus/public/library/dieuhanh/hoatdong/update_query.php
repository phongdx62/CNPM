<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();
	
	if(ISSET($_POST['mahd']))
	{
		$ngay = $_POST['ngay'];
		$ca = $_POST['ca'];
		$bienso = $_POST['bienso'];
		$matuyen = $_POST['matuyen'];
		$matx = $_POST['matx'];
		$mapx = $_POST['mapx'];

		$sql = "UPDATE hoatdong SET ngay = '$ngay', 
									ca = '$ca',
									bienso = '$bienso',
									matuyen = '$matuyen',
									matx = '$matx',
									mapx = '$mapx'  						 
				WHERE mahd = '$mahd' ";
		$hd->query($sql);
	
		$hd->disconnect();
	}

?>