<?php  
    include("../../../../models/m-kinhdoanh.php");
    $vn = new m_kinhdoanh();

    $key = $_POST["key"];
    $sql = "SELECT * FROM vengay 
            WHERE tenvn LIKE '%$key%' OR dongia = '%$key%' OR matuyen = '%$key%' ";
    $vn->query($sql);
    $num = $vn->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-vn.php");
        while($row = $vn->fetch_assoc())
        {
            include("show-vn.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>