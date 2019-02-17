	<form method="post">
	    <div class="row mb-2">
	        <div class="col-md-4">
	            <input class="form-control is-valid mt-4 w-80" type="text" id="key"  placeholder="Tìm kiếm lưu thông">
	        </div>
	        <div class="col-md-3">
	            <a href="#" class="btn btn-outline-success mt-4" type="submit" name="ok" onclick="search_lt()">Tìm kiếm</a>
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
					<div class="col-md-4 mb-3" style="margin-top: 17px;color: #993333;"><b>Chiều đi</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<textarea id="chieudi" class="form-control is-valid" required ></textarea>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 mb-3" style="margin-top: 17px;color: #993333;"><b>Chiều về</b></div>
					<div class="col-md-8 mb-3">
						<label for="inputPassword" class="sr-only"></label>
						<textarea id="chieuve" class="form-control is-valid" required ></textarea>
					</div>
				</div>
			<br>
			<center><button type="button" id="save-lt" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm lưu thông</button><button type="button" id="update-lt" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
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
    function search_lt(){
        $.ajax({
            url : "public/library/dieuhanh/luuthong/search-lt.php",
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
<script src="public/core/js/dieuhanh/script-lt.js"></script>