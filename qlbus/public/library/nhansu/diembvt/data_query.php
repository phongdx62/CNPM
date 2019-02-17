<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT * FROM diembvt";
		$ns->query($sql);
		include("table-dbvt.php");
    
	    while($row = $ns->fetch_assoc())
	    {
			include("show-dbvt.php");
		}	
	}	
?> 