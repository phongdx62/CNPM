<?php
	include("../../../../models/m-kinhdoanh/m-banvethang.php");
	$bvt = new m_banvethang();
	if(ISSET($_POST['res']))
	{
		include("table-bvt.php");
		$bvt->m_list_bvt();
	}	
?> 