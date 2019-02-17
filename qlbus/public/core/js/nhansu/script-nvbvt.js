$(document).ready(function(){
	var nvbvt_id;
	
	DisplayData();
	
	$('#update-nvbvt').hide();
	
	$('#save-nvbvt').on('click', function(){
		if($('#tennvbvt').val() == "" || $('#diachi').val() == "" || $('#sdt').val() == "" || $('#cmnd').val() == "" || $('#ngaysinh').val() == "" || $('#luong').val() == "" || $('#madbvt').val() == "" || $('#anhnvbvt').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tennvbvt = $('#tennvbvt').val();
			var diachi = $('#diachi').val();
			var sdt = $('#sdt').val();
			var cmnd = $('#cmnd').val();
			var ngaysinh = $('#ngaysinh').val();
			var luong = $('#luong').val();
			var madbvt = $('#madbvt').val();
			var anhnvbvt = $('#anhnvbvt').val();
			
			$.ajax({
				url: 'public/library/nhansu/nhanvienbvt/save_query.php',
				type: 'POST',
				data: {
					tennvbvt: tennvbvt,
					diachi: diachi,
					sdt: sdt,
					cmnd: cmnd,
					ngaysinh: ngaysinh,
					luong: luong,
					madbvt: madbvt,
					anhnvbvt: anhnvbvt
				},
				success: function(data){
					$('#tennvbvt').val('');
					$('#diachi').val('');
					$('#sdt').val('');
					$('#cmnd').val('');
					$('#ngaysinh').val('');
					$('#luong').val('');
					$('#madbvt').val('');
					$('#anhnvbvt').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-nvbvt', function(){
		var cmnd = $('#cmnd').val();
		
		$.ajax({
			url: 'public/library/nhansu/nhanvienbvt/add.php',
			type: 'POST',
			data: {
				cmnd: cmnd
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				if($('#tennvbvt').val() != "" && $('#diachi').val() != "" && $('#sdt').val() != "" && $('#cmnd').val() != "" && $('#ngaysinh').val() != "" && $('#luong').val() != "" && $('#madbvt').val() != "" && $('#anhnvbvt').val() != "")
				{
					var check_cmnd = getArray.cmnd;
					if(check_cmnd != cmnd)
					{
						alert("Thêm nhân viên bvt thành công");
					}
					else
					{
						alert("Nhân viên bvt đã tồn tại");
					}	
				}	
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/nhansu/nhanvienbvt/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-nvbvt', function(){
		var manvbvt = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
			{
				$.ajax({
					url: 'public/library/nhansu/nhanvienbvt/delete_query.php',
					type: 'POST',
					data: {
						manvbvt: manvbvt
					},
					success: function(data){
						DisplayData();
						$('#update-nvbvt').hide();
						$('#save-nvbvt').show();	
						$('#tennvbvt').val('');
						$('#diachi').val('');
						$('#sdt').val('');
						$('#cmnd').val('');
						$('#ngaysinh').val('');
						$('#luong').val('');
						$('#madbvt').val('');
						$('#anhnvbvt').val('');
					}
				});
			}
	})
	
	$(document).on('click', '.edit-nvbvt', function(){
		var manvbvt = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/nhansu/nhanvienbvt/edit.php',
			type: 'POST',
			data: {
				manvbvt: manvbvt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				nvbvt_id = getArray.manvbvt;
				
				$('#tennvbvt').val(getArray.tennvbvt);
				$('#diachi').val(getArray.diachi);
				$('#sdt').val(getArray.sdt);
				$('#cmnd').val(getArray.cmnd);
				$('#ngaysinh').val(getArray.ngaysinh);
				$('#luong').val(getArray.luong);
				$('#madbvt').val(getArray.madbvt);
				$('#anhnvbvt').val(getArray.anhnvbvt);
				
				$('#update-nvbvt').show();
				$('#save-nvbvt').hide();	
			}
		})
	});
	
	$('#update-nvbvt').on('click', function(){
		var tennvbvt = $('#tennvbvt').val();
		var diachi = $('#diachi').val();
		var sdt = $('#sdt').val();
		var cmnd = $('#cmnd').val();
		var ngaysinh = $('#ngaysinh').val();
		var luong = $('#luong').val();
		var madbvt = $('#madbvt').val();
		var anhnvbvt = $('#anhnvbvt').val();
		
		
		$.ajax({
			url: 'public/library/nhansu/nhanvienbvt/update_query.php',
			type: 'POST',
			data: {
				manvbvt: nvbvt_id,
				tennvbvt: tennvbvt,
				diachi: diachi,
				sdt: sdt,
				cmnd: cmnd,
				ngaysinh: ngaysinh,
				luong: luong,
				madbvt: madbvt,
				anhnvbvt: anhnvbvt	
			},
			success: function(){
				DisplayData();
				$('#tennvbvt').val('');
				$('#diachi').val('');
				$('#sdt').val('');
				$('#cmnd').val('');
				$('#ngaysinh').val('');
				$('#luong').val('');
				$('#madbvt').val('');
				$('#anhnvbvt').val('');
				
				alert("Hoàn thành sửa thông tin");
				
				$('#update-nvbvt').hide();
				$('#save-nvbvt').show();	
				
				nvbvt_id = "";
			}
		});
	});

});