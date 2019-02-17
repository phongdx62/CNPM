<?php  
	echo
		"<tr style='height: 100px;'>
			<td>$stt</td>
			<td>$row[tentuyen]</td>
			<td>$row[chieudi]</td>
			<td>$row[chieuve]</td>
		
			<td><button class='btn btn-warning edit-luuthong' name='".$row['matuyen']."'><span class='glyphicon glyphicon-edit'></span>Sửa</button></td>

		        <td><button class='btn btn-danger delete-luuthong' name='".$row['matuyen']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></td>						
		</tr>";
?>
