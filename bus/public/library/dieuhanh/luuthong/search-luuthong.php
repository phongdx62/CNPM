<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-dieuhanh/m-luuthong.php");
	$lt = new m_luuthong();		
	$lt->m_search_luuthong($key);
?>