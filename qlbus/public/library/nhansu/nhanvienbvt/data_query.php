<?php
	include("../../../../models/m-nhansu.php");
	$ns = new m_nhansu();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT nvbvt.*, tendbvt FROM nhanvienbvt nvbvt INNER JOIN diembvt t ON nvbvt.madbvt = t.madbvt ";
		$ns->query($sql);
		include("table-nvbvt.php");
    
	    while($row = $ns->fetch_assoc())
	    {
			include("show-nvbvt.php");
		}	
	}	
?> 