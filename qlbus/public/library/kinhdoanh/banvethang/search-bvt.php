<?php  
    include("../../../../models/m-kinhdoanh.php");
    $bvt = new m_kinhdoanh();

    $key = $_POST["key"];
    $sql = "SELECT bvt.*, tennvbvt, dongia FROM banvethang bvt
            INNER JOIN nhanvienbvt nvbvt ON bvt.manvbvt = nvbvt.manvbvt
            INNER JOIN vethang vt ON bvt.mavt = vt.mavt 
            WHERE ngay = '%$key%' OR bvt.manvbvt = '%$key%' OR dongia = '%$key%' OR tennvbvt LIKE '%$key%' ";
    $bvt->query($sql);
    $num = $bvt->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-bvt.php");
        while($row = $bvt->fetch_assoc())
        {
            include("show-bvt.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>