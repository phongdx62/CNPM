<?php
	include("../../../../models/m-dieuhanh.php");
	$dh = new m_dieuhanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT x.*, tentuyen FROM xe x
				INNER JOIN tuyen t
				ON x.matuyen = t.matuyen";
		$dh->query($sql);
		include("table-xe.php");
    
	    while($row = $dh->fetch_assoc())
	    {
			include("show-xe.php");
		}	
	}	
?> 