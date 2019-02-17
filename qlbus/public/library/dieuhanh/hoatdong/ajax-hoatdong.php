	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm thông tin hoạt động">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_hd()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		<br>
	<div id="tt" style="color: #FF1493;"></div>

	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Ngày</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="date"  id="ngay" class="form-control is-valid" placeholder="Ngày" value required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Ca</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="ca" class="form-control is-valid" placeholder="Ca" value required >
				</div>
			</div>
			<div class="row">
				<tr>
					<div class="col-md-4 mb-3" style="color: #993333;">
						<td><b>Biển số xe</b></td>
					</div>
					<div class="col-md-8 mb-3">
						<td>
							<select id="bienso">
								<option></option>
								<?php
									include("../../../../models/m-dieuhanh.php");
									$hd1 = new m_dieuhanh();
									$sql1 = "SELECT bienso FROM xe";
									$hd1->query($sql1);
									while ($row1 = $hd1->fetch_assoc()) 
									{
										echo "<option value='$row1[bienso]'>$row1[bienso]</option>";
									}
									$hd1->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>
			<div class="row">
				<tr>
					<div class="col-md-4 mb-3" style="color: #993333;">
						<td><b>Mã tuyến</b></td>
					</div>
					<div class="col-md-8 mb-3">
						<td>
							<select id="matuyen">
								<option></option>
								<?php
									$hd2 = new m_dieuhanh();
									$sql2 = "SELECT matuyen, tentuyen FROM tuyen";
									$hd2->query($sql2);  
									while ($row2 = $hd2->fetch_assoc()) 
									{
										echo "<option value='$row2[matuyen]'>$row2[matuyen] - $row2[tentuyen]</option>";
									}
									$hd2->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>
			<div class="row">
				<tr>
					<div class="col-md-4 mb-3" style="color: #993333;">
						<td><b>Mã tài xế</b></td>
					</div>
					<div class="col-md-8 mb-3">
						<td>
							<select id="matx">
								<option></option>
								<?php
									$hd3 = new m_dieuhanh();
									$sql3 = "SELECT matx, tentx FROM taixe";
									$hd3->query($sql3);  
									while ($row3 = $hd3->fetch_assoc()) 
									{
										echo "<option value='$row3[matx]'>$row3[matx] - $row3[tentx]</option>";
									}
									$hd3->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>
			<div class="row">
				<tr>
					<div class="col-md-4 mb-3" style="color: #993333;">
						<td><b>Mã phụ xe</b></td>
					</div>
					<div class="col-md-8 mb-3">
						<td>
							<select id="mapx">
								<option></option>
								<?php
									$hd4 = new m_dieuhanh();
									$sql4 = "SELECT mapx, tenpx FROM phuxe";
									$hd4->query($sql4);  
									while ($row4 = $hd4->fetch_assoc()) 
									{
										echo "<option value='$row4[mapx]'>$row4[mapx] - $row4[tenpx]</option>";
									}
									$hd4->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>
			<br>
			<center><button type="button" id="save-hd" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm hd</button><button type="button" id="update-hd" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
			<br>
		</form>
	</div>
		<br>
	    <br>
	                    
    <div id="duoi">
    	<table id="data">
    		
    	</table>
    </div>
	

<script type="text/javascript">
    function search_hd(){
        $.ajax({
            url : "public/library/dieuhanh/hoatdong/search-hd.php",
            type : "post",
            dataType:"text",
            data : {
                key : $('#key').val()
            },
            success : function (result){
                $('#duoi').html(result);
            }
        });
    }
</script>
<script src="public/core/js/dieuhanh/script-hd.js"></script>