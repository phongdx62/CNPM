<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT px.*, tentuyen FROM phuxe px INNER JOIN tuyen t ON px.matuyen = t.matuyen ";
		$ns->query($sql);
		include("table-px.php");
    
	    while($row = $ns->fetch_assoc())
	    {
			include("show-px.php");
		}	
	}	
?> 