	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm điểm bvt">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_dbvt()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		    <br>
	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
			<div class="row">
				<div class="col-md-3 mb-3" style="margin-top: 8px;color: #993333;"><b>Tên điểm bvt</b></div>
				<div class="col-md-9 mb-3">
					<label for="inputPassword" class="sr-only"></label>
					<input type="text"  id="tendbvt" class="form-control is-valid" placeholder="Tên điểm bán vé tháng" required >
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
			<br>
			<center><button type="button" id="save-dbvt" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm dbvt</button><button type="button" id="update-dbvt" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_dbvt(){
        $.ajax({
            url : "public/library/nhansu/diembvt/search-dbvt.php",
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
<script src="public/core/js/nhansu/script-dbvt.js"></script>