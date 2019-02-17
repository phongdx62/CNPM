<?php
	include("../../../../models/m-kinhdoanh.php");
	$kd = new m_kinhdoanh();
	if(ISSET($_POST['res']))
	{
		$sql = "SELECT bvt.*, tennvbvt, dongia FROM banvethang bvt
				INNER JOIN nhanvienbvt nvbvt ON bvt.manvbvt = nvbvt.manvbvt
				INNER JOIN vethang vt ON bvt.mavt = vt.mavt";
		$kd->query($sql);
		include("table-bvt.php");
    
	    while($row = $kd->fetch_assoc())
	    {
			include("show-bvt.php");
		}	
	}	
?> 