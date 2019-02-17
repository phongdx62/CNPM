<?php
	include("../../../../models/m-nhansu/m-nvbvt.php");
	$nvbvt = new m_nhanvienbvt();
	if(ISSET($_POST['res']))
	{
		include("table-nvbvt.php");
		$nvbvt->m_list_nvbvt();
	}	
?> 