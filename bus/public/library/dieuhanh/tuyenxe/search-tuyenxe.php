<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-dieuhanh/m-tuyenxe.php");
	$tx = new m_tuyenxe();		
	$tx->m_search_tuyenxe($key);
?>