<?php
	include("../../../../models/m-nhansu/m-taixe.php");
	$tx = new m_taixe();
	if(ISSET($_POST['res']))
	{
		include("table-tx.php");
		$tx->m_list_tx();
	}	
?> 