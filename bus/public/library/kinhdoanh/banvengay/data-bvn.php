<?php
	include("../../../../models/m-kinhdoanh/m-banvengay.php");
	$bvn = new m_banvengay();
	if(ISSET($_POST['res']))
	{
		include("table-bvn.php");
		$bvn->m_list_bvn();
	}	
?> 