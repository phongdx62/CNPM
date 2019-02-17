<?php
	include("../../../../models/m-dieuhanh/m-xe.php");
	$xe = new m_xe();
	if(ISSET($_POST['res']))
	{
		include("table-xe.php");
		$xe->m_list_xe();
	}	
?> 