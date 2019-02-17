$(document).ready(function(){
	var tx_id;
	
	DisplayData();
	
	$('#update-tx').hide();
	
	$('#save-tx').on('click', function(){
		if($('#tentx').val() == "" || $('#diachi').val() == "" || $('#sdt').val() == "" || $('#cmnd').val() == "" || $('#ngaysinh').val() == "" || $('#luong').val() == "" || $('#loaibang').val() == "" || $('#matuyen').val() == "" || $('#anhtx').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tentx = $('#tentx').val();
			var diachi = $('#diachi').val();
			var sdt = $('#sdt').val();
			var cmnd = $('#cmnd').val();
			var ngaysinh = $('#ngaysinh').val();
			var luong = $('#luong').val();
			var loaibang = $('#loaibang').val();
			var matuyen = $('#matuyen').val();
			var anhtx = $('#anhtx').val();
			
			$.ajax({
				url: 'public/library/nhansu/taixe/save_query.php',
				type: 'POST',
				data: {
					tentx: tentx,
					diachi: diachi,
					sdt: sdt,
					cmnd: cmnd,
					ngaysinh: ngaysinh,
					luong: luong,
					loaibang: loaibang,
					matuyen: matuyen,
					anhtx: anhtx
				},
				success: function(data){
					$('#tentx').val('');
					$('#diachi').val('');
					$('#sdt').val('');
					$('#cmnd').val('');
					$('#ngaysinh').val('');
					$('#luong').val('');
					$('#loaibang').val('');
					$('#matuyen').val('');
					$('#anhtx').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-tx', function(){
		var cmnd = $('#cmnd').val();
		
		$.ajax({
			url: 'public/library/nhansu/taixe/add.php',
			type: 'POST',
			data: {
				cmnd: cmnd
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_cmnd = getArray.cmnd;
				if($('#tentx').val() != "" && $('#diachi').val() != "" && $('#sdt').val() != "" && $('#cmnd').val() != "" && $('#ngaysinh').val() != "" && $('#luong').val() != "" && $('#loaibang').val() != "" && $('#matuyen').val() != "" && $('#anhtx').val() != "")
				{
					if(check_cmnd != cmnd)
					{
						alert("Thêm tài xế thành công");
						// document.getElementById("tt").innerHTML = "Thêm tài xế thành công";
					}
					else
					{
						alert("Tài xế đã tồn tại!");
						// document.getElementById("tt").innerHTML = "Tài xế đã tồn tại!";
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/nhansu/taixe/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-tx', function(){
		var matx = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/nhansu/taixe/delete_query.php',
				type: 'POST',
				data: {
					matx: matx
				},
				success: function(data){
					DisplayData();
					$('#update-tx').hide();
					$('#save-tx').show();	
					$('#tentx').val('');
					$('#diachi').val('');
					$('#sdt').val('');
					$('#cmnd').val('');
					$('#ngaysinh').val('');
					$('#luong').val('');
					$('#loaibang').val('');
					$('#matuyen').val('');
					$('#anhtx').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-tx', function(){
		var matx = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/nhansu/taixe/edit.php',
			type: 'POST',
			data: {
				matx: matx
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				tx_id = getArray.matx;
				
				$('#tentx').val(getArray.tentx);
				$('#diachi').val(getArray.diachi);
				$('#sdt').val(getArray.sdt);
				$('#cmnd').val(getArray.cmnd);
				$('#ngaysinh').val(getArray.ngaysinh);
				$('#luong').val(getArray.luong);
				$('#loaibang').val(getArray.loaibang);
				$('#matuyen').val(getArray.matuyen);
				$('#anhtx').val(getArray.anhtx);
				
				$('#update-tx').show();
				$('#save-tx').hide();	
			}
		})
	});
	
	$('#update-tx').on('click', function(){
		var tentx = $('#tentx').val();
		var diachi = $('#diachi').val();
		var sdt = $('#sdt').val();
		var cmnd = $('#cmnd').val();
		var ngaysinh = $('#ngaysinh').val();
		var luong = $('#luong').val();
		var loaibang = $('#loaibang').val();
		var matuyen = $('#matuyen').val();
		var anhtx = $('#anhtx').val();
		
		
		$.ajax({
			url: 'public/library/nhansu/taixe/update_query.php',
			type: 'POST',
			data: {
				matx: tx_id,
				tentx: tentx,
				diachi: diachi,
				sdt: sdt,
				cmnd: cmnd,
				ngaysinh: ngaysinh,
				luong: luong,
				loaibang: loaibang,
				matuyen: matuyen,
				anhtx: anhtx	
			},
			success: function(){
				DisplayData();
				$('#tentx').val('');
				$('#diachi').val('');
				$('#sdt').val('');
				$('#cmnd').val('');
				$('#ngaysinh').val('');
				$('#luong').val('');
				$('#loaibang').val('');
				$('#matuyen').val('');
				$('#anhtx').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-tx').hide();
				$('#save-tx').show();	
				
				tx_id = "";
			}
		});
	});

});