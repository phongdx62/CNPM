<?php
	include("../../../../models/m-kinhdoanh.php");
	$vt = new m_kinhdoanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT * FROM vethang";
		$vt->query($sql);
		include("table-vt.php");
    
	    while($row = $vt->fetch_assoc())
	    {
			include("show-vt.php");
		}	
	}	
?> 