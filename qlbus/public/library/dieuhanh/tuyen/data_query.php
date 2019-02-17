<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT matuyen, tentuyen, giobd, giokt, tansuat, soluongxe FROM tuyen ";
		$dh->query($sql);
		include("table-t.php");
    
	    while($row = $dh->fetch_assoc())
	    {
			include("show-t.php");
		}	
	}	
?> 