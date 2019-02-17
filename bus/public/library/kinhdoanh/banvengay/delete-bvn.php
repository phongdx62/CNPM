<?php 
    include("../../../../models/m-kinhdoanh/m-banvengay.php");

    if(isset($_POST["magdvn"]))
    {
        $magdvn = addslashes(stripslashes($_POST["magdvn"]));
        $bvn = new m_banvengay();
        $bvn->m_del_bvn($magdvn);
    }
        
?>