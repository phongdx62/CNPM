<?php  
    echo 
        "
            <tr style='height: 100px;'>
                <td>$row[matuyen]</td>
                <td>$row[tentuyen]</td>
                <td>$row[chieudi]</td>
                <td>$row[chieuve]</td>
            
                <td><button class='btn btn-warning edit-lt' name='".$row['matuyen']."'><a href='#'><span class='glyphicon glyphicon-edit'></span>Sửa</a></button></td>

                <td><button class='btn btn-danger delete-lt' name='".$row['matuyen']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></td>                   
            </tr>
        ";
?>