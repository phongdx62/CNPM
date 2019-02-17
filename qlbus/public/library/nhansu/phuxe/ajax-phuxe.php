	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm phụ xe">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_px()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		<br>
	<div id="tt" style="color: #FF1493;"></div>	
		
	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Tên phụ xe</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="tenpx" class="form-control is-valid" placeholder="Tên phụ xe" required >
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Địa chỉ</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="diachi" class="form-control is-valid" placeholder="Địa chỉ" required >
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Số điện thoại</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="sdt" class="form-control is-valid" placeholder="Số điện thoại" required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Số CMND</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="cmnd" class="form-control is-valid" placeholder="Số CMND" required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Ngày sinh</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="date"  id="ngaysinh" class="form-control is-valid" placeholder="Ngày sinh" required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Lương</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="luong" class="form-control is-valid" placeholder="Lương" required >
				</div>
			</div>
			<div class="row">
				<tr>
					<div class="col-md-3 mb-3" style="color: #993333;">
						<td><b>Mã tuyến</b></td>
					</div>
					<div class="col-md-9 mb-3">
						<td>
							<select id="matuyen">
								<option value="matuyen"></option>
								<?php 
									include("../../../../models/m-nhansu.php");
									$ns = new m_nhansu();
									$ns->tuyen(); 
									while ($row = $ns->fetch_assoc()) 
									{
										echo "<option value='$row[matuyen]'>$row[matuyen] - $row[tentuyen]</option>";
									}
									$ns->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>	
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Link hình ảnh</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="anhpx" class="form-control is-valid" placeholder="Link hình ảnh" required >
				</div>
			</div>
			<br>
			<center><button type="button" id="save-px" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm phụ xe</button><button type="button" id="update-px" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
			<br>
			<div>
				<?php  
					if(isset($msg))
					{
						echo $msg;
					}
				?>
			</div>
		</form>
	</div>
		<br>
	    <br>
	                    
    <div id="duoi">
    	<table id="data">
    		
    	</table>
    </div>

<script type="text/javascript">
    function search_px(){
        $.ajax({
            url : "public/library/nhansu/phuxe/search-px.php",
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
<script src="public/core/js/nhansu/script-px.js"></script>