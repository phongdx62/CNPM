<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	
	if(ISSET($_POST['bienso']))
	{
		$bienso = $_POST['bienso'];
		$biensomoi = $_POST['biensomoi'];
		$hangsx = $_POST['hangsx'];
		$namsx = $_POST['namsx'];
		$nhacc = $_POST['nhacc'];
		$soghe = $_POST['soghe'];
		$matuyen = $_POST['matuyen'];
		$anhxe = $_POST['anhxe'];
		
		$sql = "UPDATE xe  SET  bienso = '$biensomoi',
								hangsx = '$hangsx', 
								namsx = '$namsx', 
								nhacc = '$nhacc',
								soghe = '$soghe',
								matuyen = '$matuyen',
								anhxe = '$anhxe'  						 
				WHERE bienso = '$bienso' ";
		$dh->query($sql);
		
		$dh->disconnect();
	}
	
?>