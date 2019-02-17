<?php  
    include("../../../../models/m-kinhdoanh.php");
    $bvn = new m_kinhdoanh();

    $key = $_POST["key"];
    $sql = "SELECT bvn.*,tenpx, dongia FROM banvengay bvn
            INNER JOIN phuxe px ON bvn.mapx = px.mapx
            INNER JOIN vengay vn ON bvn.mavn = vn.mavn 
            WHERE ngay LIKE '%$key%' OR bvn.mapx LIKE '%$key%' OR dongia LIKE '%$key%' OR tenpx like '%$key%' ";
    $bvn->query($sql);
    $num = $bvn->num_rows();
    if ($num > 0 && $key != "") 
    {
        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
        echo '<table border="1" cellspacing="0" cellpadding="10">';      
        include("table-bvn.php");
        while($row = $bvn->fetch_assoc())
        {
            include("show-bvn.php");
        }       
    } 
    else 
    {
        echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
    }
?>