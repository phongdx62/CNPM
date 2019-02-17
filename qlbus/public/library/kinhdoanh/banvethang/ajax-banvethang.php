	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm thông tin bán vé tháng">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_bvt()">Tìm kiếm</a>
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
						<td><b>Mã nvbvt</b></td>
					</div>
					<div class="col-md-9 mb-3">
						<td>
							<select id="manvbvt">
								<option value="manvbvt"></option>
								<?php 
									include("../../../../models/m-kinhdoanh.php");
									$kd1 = new m_kinhdoanh();
									$sql1 = "SELECT manvbvt, tennvbvt FROM nhanvienbvt";
									$kd1->query($sql1); 
									while ($row1 = $kd1->fetch_assoc()) 
									{
										echo "<option value='$row1[manvbvt]'>$row1[manvbvt] - $row1[tennvbvt]</option>";
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
						<td><b>Mã vé tháng</b></td>
					</div>
					<div class="col-md-9 mb-3">
						<td>
							<select id="mavt">
								<option value="mavt"></option>
								<?php
									$kd2 = new m_kinhdoanh();
									$sql2 = "SELECT mavt, dongia FROM vethang";
									$kd2->query($sql2);  
									while ($row2 = $kd2->fetch_assoc()) 
									{
										echo "<option value='$row2[mavt]'>$row2[mavt] - $row2[dongia]</option>";
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
			<center><button type="button" id="save-bvt" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm bvt</button><button type="button" id="update-bvt" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_bvt(){
        $.ajax({
            url : "public/library/kinhdoanh/banvethang/search-bvt.php",
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
<script src="public/core/js/kinhdoanh/script-bvt.js"></script>