	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm thông tin bán vé ngày">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_bvn()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		<br>
	<div id="tt" style="color: #FF1493;"></div>

	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
				<div class="col-md-3 mb-3" style="color: #993333; margin-top: 10px;">
					<td><b>Ngày</b></td>
				</div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="date"  id="ngay" class="form-control is-valid" placeholder="Ngày" required >
				</div>
			</div>
			<div class="row">
				<tr>
					<div class="col-md-3 mb-3" style="color: #993333;">
						<td><b>Mã phụ xe</b></td>
					</div>
					<div class="col-md-9 mb-3">
						<td>
							<select id="mapx">
								<option value="mapx"></option>
								<?php 
									include("../../../../models/m-kinhdoanh.php");
									$kd1 = new m_kinhdoanh();
									$sql1 = "SELECT mapx, tenpx FROM phuxe";
									$kd1->query($sql1); 
									while ($row1 = $kd1->fetch_assoc()) 
									{
										echo "<option value='$row1[mapx]'>$row1[mapx] - $row1[tenpx]</option>";
									}
									$kd1->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>	
			<div class="row">
				<tr>
					<div class="col-md-3 mb-3" style="color: #993333;">
						<td><b>Mã vé ngày</b></td>
					</div>
					<div class="col-md-9 mb-3">
						<td>
							<select id="mavn">
								<option value="mavn"></option>
								<?php
									$kd2 = new m_kinhdoanh();
									$sql2 = "SELECT mavn, dongia FROM vengay";
									$kd2->query($sql2);  
									while ($row2 = $kd2->fetch_assoc()) 
									{
										echo "<option value='$row2[mavn]'>$row2[mavn] - $row2[dongia]</option>";
									}
									$kd2->disconnect();
								?>			
							</select>
						</td>
					</div>	
				</tr>		
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Số vé phát</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="sovephatra" class="form-control is-valid" placeholder="Số vé phát ra" required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Số vé thu</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="sovethuve" class="form-control is-valid" placeholder="Số vé thu về" required >
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Vé bán được</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="sovebanduoc" class="form-control is-valid" placeholder="Số vé bán được" required >
				</div>
			</div>
			<br>
			<center><button type="button" id="save-bvn" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm bvn</button><button type="button" id="update-bvn" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_bvn(){
        $.ajax({
            url : "public/library/kinhdoanh/banvengay/search-bvn.php",
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
<script src="public/core/js/kinhdoanh/script-bvn.js"></script>