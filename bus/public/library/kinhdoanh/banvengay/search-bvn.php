<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-kinhdoanh/m-banvengay.php");
	$bvn = new m_banvengay();		
	$bvn->m_search_bvn($key);
?>