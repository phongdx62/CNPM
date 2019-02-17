<?php  
    include("../../../../models/m-nhansu.php");
    $nvbvt = new m_nhansu();

    $key = $_POST["key"];
    $sql = "SELECT nvbvt.*, tendbvt FROM nhanvienbvt nvbvt
            INNER JOIN diembvt dbvt
            ON nvbvt.madbvt = dbvt.madbvt 
            WHERE tennvbvt LIKE '%$key%' OR nvbvt.sdt = '%$key%' OR cmnd = '%$key%' OR tendbvt LIKE '%$key%' ";
    $nvbvt->query($sql);
    $num = $nvbvt->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-nvbvt.php");
        while($row = $nvbvt->fetch_assoc())
        {
            include("show-nvbvt.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>