	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm vé ngày">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_vn()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		<br>
	<div id="tt" style="color: #FF1493;"></div>

	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Tên vé ngày</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="tenvn" class="form-control is-valid" placeholder="Tên vé ngày" required >
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Đơn giá</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="dongia" class="form-control is-valid" placeholder="Đơn giá" required >
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
			<br>
			<center><button type="button" id="save-vn" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm vé ngày</button><button type="button" id="update-vn" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_vn(){
        $.ajax({
            url : "public/library/kinhdoanh/vengay/search-vn.php",
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
<script src="public/core/js/kinhdoanh/script-vn.js"></script>