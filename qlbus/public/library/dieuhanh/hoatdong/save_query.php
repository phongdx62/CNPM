<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();
	
	$ngay = $_POST['ngay'];
	$ca = $_POST['ca'];
	$bienso = $_POST['bienso'];
	$matuyen = $_POST['matuyen'];
	$matx = $_POST['matx'];
	$mapx = $_POST['mapx'];

	$sql = "SELECT mahd FROM hoatdong  WHERE ngay = '$ngay' AND bienso = '$bienso' AND ca = '$ca' ";
	$hd->query($sql);
	$num = $hd->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO hoatdong   (ngay,
						  				ca,
							  			bienso,
							  			matuyen,
							  			matx,
							  			mapx) VALUES   ('$ngay',
							   							'$ca',
							   							'$bienso',
							   							'$matuyen',
							   							'$matx',
							   							'$mapx')";
		$hd->query($sql);
	}
	$hd->disconnect();
		
?>