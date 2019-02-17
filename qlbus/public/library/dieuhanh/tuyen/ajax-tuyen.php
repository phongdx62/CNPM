	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm tài xế">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_tx()">Tìm kiếm</a>
	        </div>
	    </div>
	</form>
		    <br>
	<div id="tt" style="color: #FF1493;"></div>	
	    
	<div id="add-data" style="margin-left: 300px; width: 500px;">
			<br>
		<form method="post">		
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Tên tuyến</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="tentuyen" class="form-control is-valid" placeholder="Tên tuyến" value required >
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Giờ bắt đầu</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="time"  id="giobd" class="form-control is-valid" placeholder="Giờ bắt đầu" value required >
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Giờ kết thúc</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputEmail" class="sr-only"></label>
						<input type="time"  id = "giokt" class="form-control is-valid" placeholder="Giờ kết thúc" value required autofocus>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Tần suất</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="tansuat" class="form-control is-valid" placeholder="Tần suất" value required >
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 8px;color: #993333;"><b>Số lượng xe</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<input type="text"  id="soluongxe" class="form-control is-valid" placeholder="Số lượng xe" value required >
					</div>
				</div>
			<br>
			<center><button type="button" id="save-t" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm tuyến xe</button><button type="button" id="update-t" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_tx(){
        $.ajax({
            url : "public/library/dieuhanh/tuyen/search-t.php",
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
<script src="public/core/js/dieuhanh/script-tuyen.js"></script>