<?php
	include("../../../../models/m-nhansu/m-diembvt.php");
	$dbvt = new m_diembvt();
	if(ISSET($_POST['res']))
	{
		include("table-dbvt.php");
		$dbvt->m_list_dbvt();
	}	
?> 