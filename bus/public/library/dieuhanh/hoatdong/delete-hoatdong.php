<?php 
    include("../../../../models/m-dieuhanh/m-hoatdong.php");

    if(isset($_POST["mahd"]))
    {
        $mahd = addslashes(stripslashes($_POST["mahd"]));
        $hd = new m_hoatdong();
        $hd->m_del_hoatdong($mahd);
    }
        
?>