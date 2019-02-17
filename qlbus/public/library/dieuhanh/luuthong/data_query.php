<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT matuyen, tentuyen, chieudi, chieuve FROM tuyen ";
		$dh->query($sql);
		include("table-lt.php");
    
	    while($row = $dh->fetch_assoc())
	    {
			include("show-lt.php");
		}	
	}	
?> 