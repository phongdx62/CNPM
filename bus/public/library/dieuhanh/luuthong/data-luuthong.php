<?php
	include("../../../../models/m-dieuhanh/m-luuthong.php");
	$lt = new m_luuthong();
	if(ISSET($_POST['res']))
	{
		include("table-luuthong.php");
		$lt->m_list_luuthong();
	}	
?> 