<?php  
    include("../../../../models/m-nhansu.php");
    $ns = new m_nhansu();

    $key = $_POST["key"];
    $sql = "SELECT tx.*, tentuyen FROM taixe tx
            INNER JOIN tuyen t
            ON tx.matuyen = t.matuyen 
            WHERE tentx LIKE '%$key%' OR diachi LIKE '%$key%' OR sdt = '%$key%' OR cmnd = '%$key%' OR tentuyen LIKE '%$key%' ";
    $ns->query($sql);
    $num = $ns->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-tx.php");
        while($row = $ns->fetch_assoc())
        {
            include("show-tx.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>