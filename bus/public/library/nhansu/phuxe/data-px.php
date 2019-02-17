<?php
	include("../../../../models/m-nhansu/m-phuxe.php");
	$px = new m_phuxe();
	if(ISSET($_POST['res']))
	{
		include("table-px.php");
		$px->m_list_px();
	}	
?> 