<?php  
    include("../../../../models/m-dieuhanh.php");
    $dh = new m_dieuhanh();

    $key = $_POST["key"];
    $sql = "SELECT x.*, tentuyen FROM xe x
            INNER JOIN tuyen t
            ON x.matuyen = t.matuyen 
            WHERE bienso LIKE '%$key%' OR hangsx LIKE '%$key%' OR nhacc LIKE '%$key%' OR tentuyen LIKE '%$key%' ";
    $dh->query($sql);
    $num = $dh->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-xe.php");
        while($row = $dh->fetch_assoc())
        {
            include("show-xe.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>