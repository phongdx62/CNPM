<?php  
    include("../../../../models/m-nhansu.php");
    $dbvt = new m_nhansu();

    $key = $_POST["key"];
    $sql = "SELECT * FROM diembvt 
            WHERE tendbvt LIKE '%$key%' OR diachi LIKE '%$key%' OR sdt = '%$key%' ";
    $dbvt->query($sql);
    $num = $dbvt->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-dbvt.php");
        while($row = $dbvt->fetch_assoc())
        {
            include("show-dbvt.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>