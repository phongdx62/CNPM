	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm xe">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_xe()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		    <br>
	<div id="tt" style="color: #FF1493;"></div>	
	    
	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Biển số xe</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="bienso" class="form-control is-valid" placeholder="Biển số xe" value required >
				</div>	
			</div>		
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Hãng sản xuất</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="hangsx" class="form-control is-valid" placeholder="Hãng sản xuất" value required >
				</div>	
			</div>
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Năm sản xuất</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="namsx" class="form-control is-valid" placeholder="Năm sản xuất" value required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Nhà cung cấp</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputEmail" class="sr-only"></label>
					<input type="text"  id = "nhacc" class="form-control is-valid" placeholder="Nhà cung cấp" value required autofocus>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Số ghế</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="soghe" class="form-control is-valid" placeholder="Số ghế" value required >
				</div>
			</div>
			<div class="row">
				<tr>
					<div class="col-md-4 mb-3" style="color: #993333;">
						<td><b>Mã tuyến</b></td>
					</div>
					<div class="col-md-8 mb-3">
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
				<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Link hình ảnh</b></div>
				<div class="col-md-8 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="anhxe" class="form-control is-valid" placeholder="Link hình ảnh" value required >
				</div>
			</div>
			<br>
			<center><button type="button" id="save-xe" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm xe</button><button type="button" id="update-xe" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_xe(){
        $.ajax({
            url : "public/library/dieuhanh/xe/search-xe.php",
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
<script src="public/core/js/dieuhanh/script-xe.js"></script>