<?php
	include("../../../../models/m-dieuhanh.php");
	$hd = new m_dieuhanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT hd.*, bienso, tentuyen, tentx, tenpx FROM hoatdong hd
				INNER JOIN tuyen t ON hd.matuyen = t.matuyen
				INNER JOIN taixe tx ON hd.matx = tx.matx
				INNER JOIN phuxe px ON hd.mapx = px.mapx";
		$hd->query($sql);
		include("table-hd.php");
    
	    while($row = $hd->fetch_assoc())
	    {
			include("show-hd.php");
		}	
	}	
?> 