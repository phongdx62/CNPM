<?php 
    include("../../../../models/m-nhansu/m-diembvt.php");

    if(isset($_POST["madbvt"]))
    {
        $madbvt = addslashes(stripslashes($_POST["madbvt"]));
        $dbvt = new m_diembvt();
        $dbvt->m_del_dbvt($madbvt);
    }
        
?>