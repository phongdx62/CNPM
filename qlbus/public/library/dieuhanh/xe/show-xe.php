<?php  
    echo 
        "
            <tr style='height: 100px;'>
                <td>$row[bienso]</td>
                <td>$row[hangsx]</td>
                <td>$row[namsx]</td>
                <td>$row[nhacc]</td>
                <td>$row[soghe]</td>
                <td>$row[tentuyen]</td>
                <td><img src='public/core/image/$row[anhxe]' style='width: 140px; height: 100px;'></td>
            
                <td><button class='btn btn-warning edit-xe' name='".$row['bienso']."'><a href='#'><span class='glyphicon glyphicon-edit'></span>Sửa</a></button></td>

                <td><button class='btn btn-danger delete-xe' name='".$row['bienso']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></td>                   
            </tr>
        ";
?>