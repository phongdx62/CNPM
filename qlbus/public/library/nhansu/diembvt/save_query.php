<?php
	include("../../../../models/m-nhansu.php");
	$dbvt = new m_nhansu();
	
	$tendbvt = $_POST['tendbvt'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];

	$sql = "SELECT madbvt FROM diembvt WHERE tendbvt = '$tendbvt' ";
	$dbvt->query($sql);
	$num = $dbvt->num_rows();
	if($num == 0)
	{
		$sql = "INSERT INTO diembvt(tendbvt,
						  			diachi,
							  		sdt) VALUES('$tendbvt',
							   					'$diachi',
							   					'$sdt')";
		$dbvt->query($sql);
	}
	$dbvt->disconnect();
		
?>