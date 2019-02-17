<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-nhansu/m-diembvt.php");
	$dbvt = new m_diembvt();		
	$dbvt->m_search_dbvt($key);
?>