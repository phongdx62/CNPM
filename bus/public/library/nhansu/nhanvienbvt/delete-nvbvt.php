<?php 
    include("../../../../models/m-nhansu/m-nvbvt.php");

    if(isset($_POST["manvbvt"]))
    {
        $manvbvt = addslashes(stripslashes($_POST["manvbvt"]));
        $nvbvt = new m_nhanvienbvt();
        $nvbvt->m_del_nvbvt($manvbvt);
    }
        
?>