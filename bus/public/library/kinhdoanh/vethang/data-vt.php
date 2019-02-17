<?php
	include("../../../../models/m-kinhdoanh/m-vethang.php");
	$vt = new m_vethang();
	if(ISSET($_POST['res']))
	{
		include("table-vt.php");
		$vt->m_list_vt();
	}	
?> 