<?php 
    include("../../../../models/m-kinhdoanh/m-banvethang.php");

    if(isset($_POST["magdvt"]))
    {
        $magdvt = addslashes(stripslashes($_POST["magdvt"]));
        $bvt = new m_banvethang();
        $bvt->m_del_bvt($magdvt);
    }
        
?>