<?php  
    include("../../../../models/m-kinhdoanh.php");
    $vt = new m_kinhdoanh();

    $key = $_POST["key"];
    $sql = "SELECT * FROM vethang 
            WHERE tenvt LIKE '%$key%' OR dongia = '%$key%' OR ghichu LIKE '%$key%' ";
    $vt->query($sql);
    $num = $vt->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-vt.php");
        while($row = $vt->fetch_assoc())
        {
            include("show-vt.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>