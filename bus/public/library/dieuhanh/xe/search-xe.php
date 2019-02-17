<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-dieuhanh/m-xe.php");
	$xe = new m_xe();		
	$xe->m_search_xe($key);
?>