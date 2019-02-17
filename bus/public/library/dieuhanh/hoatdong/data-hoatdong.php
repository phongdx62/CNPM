<?php
	include("../../../../models/m-dieuhanh/m-hoatdong.php");
	$hd = new m_hoatdong();
	if(ISSET($_POST['res']))
	{
		include("table-hoatdong.php");
		$hd->m_list_hoatdong();
	}	
?> 