<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	if(ISSET($_POST['matuyen']))
	{
		$matuyen = $_POST['matuyen'];
		$tentuyen = $_POST['tentuyen'];
		$chieudi = $_POST['chieudi'];
		$chieuve = $_POST['chieuve'];
		
		$sql = "UPDATE  tuyen   SET tentuyen = '$tentuyen', 
									chieudi = '$chieudi', 
									chieuve = '$chieuve'						 
							   	WHERE matuyen = $matuyen";
		$dh->query($sql);
		
		$dh->disconnect();
	}
	
?>