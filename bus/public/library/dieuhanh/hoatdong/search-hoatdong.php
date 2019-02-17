<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-dieuhanh/m-hoatdong.php");
	$hd = new m_hoatdong();		
	$hd->m_search_hoatdong($key);
?>