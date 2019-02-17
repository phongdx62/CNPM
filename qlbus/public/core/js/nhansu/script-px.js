$(document).ready(function(){
	var px_id;
	
	DisplayData();
	
	$('#update-px').hide();
	
	$('#save-px').on('click', function(){
		if($('#tenpx').val() == "" || $('#diachi').val() == "" || $('#sdt').val() == "" || $('#cmnd').val() == "" || $('#ngaysinh').val() == "" || $('#luong').val() == "" || $('#matuyen').val() == "" || $('#anhpx').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tenpx = $('#tenpx').val();
			var diachi = $('#diachi').val();
			var sdt = $('#sdt').val();
			var cmnd = $('#cmnd').val();
			var ngaysinh = $('#ngaysinh').val();
			var luong = $('#luong').val();
			var matuyen = $('#matuyen').val();
			var anhpx = $('#anhpx').val();
			
			$.ajax({
				url: 'public/library/nhansu/phuxe/save_query.php',
				type: 'POST',
				data: {
					tenpx: tenpx,
					diachi: diachi,
					sdt: sdt,
					cmnd: cmnd,
					ngaysinh: ngaysinh,
					luong: luong,
					matuyen: matuyen,
					anhpx: anhpx
				},
				success: function(data){
					$('#tenpx').val('');
					$('#diachi').val('');
					$('#sdt').val('');
					$('#cmnd').val('');
					$('#ngaysinh').val('');
					$('#luong').val('');
					$('#matuyen').val('');
					$('#anhpx').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-px', function(){
		var cmnd = $('#cmnd').val();
		
		$.ajax({
			url: 'public/library/nhansu/phuxe/add.php',
			type: 'POST',
			data: {
				cmnd: cmnd
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_cmnd = getArray.cmnd;
				if($('#tenpx').val() != "" && $('#diachi').val() != "" && $('#sdt').val() != "" && $('#cmnd').val() != "" && $('#ngaysinh').val() != "" && $('#luong').val() != "" && $('#matuyen').val() != "" && $('#anhpx').val() != "")
				{
					if(check_cmnd != cmnd)
					{
						alert("Thêm phụ xe thành công");
					}
					else
					{
						alert("Phụ xe đã tồn tại");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/nhansu/phuxe/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-px', function(){
		var mapx = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
			{
				$.ajax({
					url: 'public/library/nhansu/phuxe/delete_query.php',
					type: 'POST',
					data: {
						mapx: mapx
					},
					success: function(data){
						DisplayData();
						$('#update-px').hide();
						$('#save-px').show();	
						$('#tenpx').val('');
						$('#diachi').val('');
						$('#sdt').val('');
						$('#cmnd').val('');
						$('#ngaysinh').val('');
						$('#luong').val('');
						$('#matuyen').val('');
						$('#anhpx').val('');
					}
				});
			}
	})
	
	$(document).on('click', '.edit-px', function(){
		var mapx = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/nhansu/phuxe/edit.php',
			type: 'POST',
			data: {
				mapx: mapx
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				px_id = getArray.mapx;
				
				$('#tenpx').val(getArray.tenpx);
				$('#diachi').val(getArray.diachi);
				$('#sdt').val(getArray.sdt);
				$('#cmnd').val(getArray.cmnd);
				$('#ngaysinh').val(getArray.ngaysinh);
				$('#luong').val(getArray.luong);
				$('#matuyen').val(getArray.matuyen);
				$('#anhpx').val(getArray.anhpx);
				
				$('#update-px').show();
				$('#save-px').hide();	
			}
		})
	});
	
	$('#update-px').on('click', function(){
		var tenpx = $('#tenpx').val();
		var diachi = $('#diachi').val();
		var sdt = $('#sdt').val();
		var cmnd = $('#cmnd').val();
		var ngaysinh = $('#ngaysinh').val();
		var luong = $('#luong').val();
		var matuyen = $('#matuyen').val();
		var anhpx = $('#anhpx').val();
		
		$.ajax({
			url: 'public/library/nhansu/phuxe/update_query.php',
			type: 'POST',
			data: {
				mapx: px_id,
				tenpx: tenpx,
				diachi: diachi,
				sdt: sdt,
				cmnd: cmnd,
				ngaysinh: ngaysinh,
				luong: luong,
				matuyen: matuyen,
				anhpx: anhpx	
			},
			success: function(){
				DisplayData();
				$('#tenpx').val('');
				$('#diachi').val('');
				$('#sdt').val('');
				$('#cmnd').val('');
				$('#ngaysinh').val('');
				$('#luong').val('');
				$('#matuyen').val('');
				$('#anhpx').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-px').hide();
				$('#save-px').show();	
				
				px_id = "";
			}
		});
	});

});