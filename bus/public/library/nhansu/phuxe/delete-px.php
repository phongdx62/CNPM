<?php 
    include("../../../../models/m-nhansu/m-phuxe.php");

    if(isset($_POST["mapx"]))
    {
        $mapx = addslashes(stripslashes($_POST["mapx"]));
        $px = new m_phuxe();
        $px->m_del_px($mapx);
    }
        
?>