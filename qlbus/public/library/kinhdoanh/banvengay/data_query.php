<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT bvn.*,tenpx, dongia FROM banvengay bvn
				INNER JOIN phuxe px ON bvn.mapx = px.mapx
				INNER JOIN vengay vn ON bvn.mavn = vn.mavn";
		$kd->query($sql);
		include("table-bvn.php");
    
	    while($row = $kd->fetch_assoc())
	    {
			include("show-bvn.php");
		}	
	}	
?> 