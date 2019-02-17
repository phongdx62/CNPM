<?php  
    echo 
        "
            <tr style='height: 100px;'>
                <td>$row[mavn]</td>
                <td>$row[tenvn]</td>
                <td>$row[dongia]</td>
                <td>$row[matuyen]</td>
            
                <td><button class='btn btn-warning edit-vn' name='".$row['mavn']."'><a href='#'><span class='glyphicon glyphicon-edit'></span>Sửa</a></button></td>

                <td><button class='btn btn-danger delete-vn' name='".$row['mavn']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></td>                   
            </tr>
        ";
?>