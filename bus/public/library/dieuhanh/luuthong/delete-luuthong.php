<?php 
    include("../../../../models/m-dieuhanh/m-tuyenxe.php");

    if(isset($_POST["matuyen"]))
    {
        $matuyen = addslashes(stripslashes($_POST["matuyen"]));
        $tx = new m_tuyenxe();
        $tx->m_del_tuyenxe($matuyen);
    }
        
?>