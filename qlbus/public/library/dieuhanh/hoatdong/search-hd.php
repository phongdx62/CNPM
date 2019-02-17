<?php  
    include("../../../../models/m-dieuhanh.php");
    $hd = new m_dieuhanh();

    $key = $_POST["key"];
    $sql = "SELECT hd.*, bienso, tentuyen, tentx, tenpx FROM hoatdong hd
            INNER JOIN tuyen t ON hd.matuyen = t.matuyen
            INNER JOIN taixe tx ON hd.matx = tx.matx
            INNER JOIN phuxe px ON hd.mapx = px.mapx
            WHERE ngay LIKE '%$key%' OR ca LIKE '%$key%' OR bienso LIKE '%$key%' OR tentuyen LIKE '%key%' OR tentx LIKE '%key%' OR tenpx LIKE '%key%' ";
    $hd->query($sql);
    $num = $hd->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-hd.php");
        while($row = $hd->fetch_assoc())
        {
            include("show-hd.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>