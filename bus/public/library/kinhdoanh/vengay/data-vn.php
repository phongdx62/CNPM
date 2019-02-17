<?php
	include("../../../../models/m-kinhdoanh/m-vengay.php");
	$vn = new m_vengay();
	if(ISSET($_POST['res']))
	{
		include("table-vn.php");
		$vn->m_list_vn();
	}	
?> 