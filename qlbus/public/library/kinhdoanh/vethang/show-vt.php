<?php  
    echo 
        "
            <tr style='height: 100px;'>
                <td>$row[mavt]</td>
                <td>$row[tenvt]</td>
                <td>$row[dongia]</td>
                <td>$row[ghichu]</td>
            
                <td><button class='btn btn-warning edit-vt' name='".$row['mavt']."'><a href='#'><span class='glyphicon glyphicon-edit'></span>Sửa</a></button></td>

                <td><button class='btn btn-danger delete-vt' name='".$row['mavt']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></td>                   
            </tr>
        ";
?>