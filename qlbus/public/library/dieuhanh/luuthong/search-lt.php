<?php  
    include("../../../../models/m-dieuhanh.php");
    $dh = new m_dieuhanh();

    $key = $_POST["key"];
    $sql = "SELECT matuyen, tentuyen, chieudi, chieuve FROM tuyen
            WHERE tentuyen LIKE '%$key%' OR chieudi LIKE '%$key%' OR chieuve LIKE '%$key%' ";
    $dh->query($sql);
    $num = $dh->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-lt.php");
        while($row = $dh->fetch_assoc())
        {
            include("show-lt.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>