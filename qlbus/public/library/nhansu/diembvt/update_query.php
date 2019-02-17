<?php
	include("../../../../models/m-nhansu.php");
	$dbvt = new m_nhansu();
	
	if(ISSET($_POST['madbvt']))
	{
		$madbvt = $_POST['madbvt'];
		$tendbvt = $_POST['tendbvt'];
		$diachi = $_POST['diachi'];
		$sdt = $_POST['sdt'];

		$sql = "UPDATE  diembvt SET tendbvt = '$tendbvt', 
									diachi = '$diachi', 
									sdt = '$sdt'  						 
							   	WHERE madbvt = $madbvt";
		$dbvt->query($sql);
	
		$dbvt->disconnect();
	}

?>