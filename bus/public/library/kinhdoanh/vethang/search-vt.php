<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-kinhdoanh/m-vethang.php");
	$vt = new m_vethang();		
	$vt->m_search_vt($key);
?>