<?php
	$key = addslashes(stripslashes($_POST["key"]));
	include("../../../../models/m-nhansu/m-nvbvt.php");
	$nvbvt = new m_nhanvienbvt();		
	$nvbvt->m_search_nvbvt($key);
?>