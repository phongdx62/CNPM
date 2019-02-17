<?php 
    include("../../../../models/m-nhansu/m-taixe.php");

    if(isset($_POST["matx"]))
    {
        $matx = addslashes(stripslashes($_POST["matx"]));
        $tx = new m_taixe();
        $tx->m_del_tx($matx);
    }
        
?>