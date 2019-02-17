<?php
	include("../../../../models/m-kinhdoanh.php");
	$vn = new m_kinhdoanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT * FROM vengay";
		$vn->query($sql);
		include("table-vn.php");
    
	    while($row = $vn->fetch_assoc())
	    {
			include("show-vn.php");
		}	
	}	
?> 