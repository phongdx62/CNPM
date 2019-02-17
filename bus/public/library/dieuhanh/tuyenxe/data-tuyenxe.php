<?php
	include("../../../../models/m-dieuhanh/m-tuyenxe.php");
	$tx = new m_tuyenxe();
	if(ISSET($_POST['res']))
	{
		include("table-tuyenxe.php");
		$tx->m_list_tuyenxe();
	}	
?> 