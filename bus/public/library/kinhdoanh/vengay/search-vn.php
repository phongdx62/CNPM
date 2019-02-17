<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-kinhdoanh/m-vengay.php");
	$vn = new m_vengay();		
	$vn->m_search_vn($key);
?>