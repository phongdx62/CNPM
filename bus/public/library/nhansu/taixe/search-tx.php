<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-nhansu/m-taixe.php");
	$tx = new m_taixe();		
	$tx->m_search_tx($key);
?>