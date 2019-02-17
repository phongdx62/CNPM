<?php 
    include("../../../../models/m-kinhdoanh/m-vethang.php");

    if(isset($_POST["mavt"]))
    {
        $mavt = addslashes(stripslashes($_POST["mavt"]));
        $vt = new m_vethang();
        $vt->m_del_vt($mavt);
    }
        
?>