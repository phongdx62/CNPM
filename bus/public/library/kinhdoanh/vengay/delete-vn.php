<?php 
    include("../../../../models/m-kinhdoanh/m-vengay.php");

    if(isset($_POST["mavn"]))
    {
        $mavn = addslashes(stripslashes($_POST["mavn"]));
        $vn = new m_vengay();
        $vn->m_del_vn($mavn);
    }
        
?>