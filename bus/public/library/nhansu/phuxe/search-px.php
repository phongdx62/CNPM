<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-nhansu/m-phuxe.php");
	$px = new m_phuxe();		
	$px->m_search_px($key);
?>