<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-kinhdoanh/m-banvethang.php");
	$bvt = new m_banvethang();		
	$bvt->m_search_bvt($key);
?>