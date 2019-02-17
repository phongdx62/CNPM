<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT tx.*, tentuyen FROM taixe tx INNER JOIN tuyen t ON tx.matuyen = t.matuyen ";
		$ns->query($sql);
		include("table-tx.php");
    
	    while($row = $ns->fetch_assoc())
	    {
			include("show-tx.php");
		}	
	}	
?> 