	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm vé tháng">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_vt()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		<br>
	<div id="tt" style="color: #FF1493;"></div>

	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Tên vé tháng</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="tenvt" class="form-control is-valid" placeholder="Tên vé tháng" value required >
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Đơn giá</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="dongia" class="form-control is-valid" placeholder="Đơn giá" value required >
					</div>
				</div>			
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Ghi chú</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="ghichu" class="form-control is-valid" placeholder="Ghi chú" value required >
					</div>
				</div>
			<br>
			<center><button type="button" id="save-vt" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm vé tháng</button><button type="button" id="update-vt" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_vt(){
        $.ajax({
            url : "public/library/kinhdoanh/vethang/search-vt.php",
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
<script src="public/core/js/kinhdoanh/script-vt.js"></script>