<?php 
    include("../../../../models/m-dieuhanh/m-xe.php");

    if(isset($_POST["bienso"]))
    {
        $bienso = addslashes(stripslashes($_POST["bienso"]));
        $xe = new m_xe();
        $xe->m_del_xe($bienso);
    }
        
?>