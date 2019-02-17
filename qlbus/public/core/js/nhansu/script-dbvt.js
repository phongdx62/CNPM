$(document).ready(function(){
	var dbvt_id;
	
	DisplayData();
	
	$('#update-dbvt').hide();
	
	$('#save-dbvt').on('click', function(){
		if($('#tendbvt').val() == "" || $('#diachi').val() == "" || $('#sdt').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tendbvt = $('#tendbvt').val();
			var diachi = $('#diachi').val();
			var sdt = $('#sdt').val();
			
			$.ajax({
				url: 'public/library/nhansu/diembvt/save_query.php',
				type: 'POST',
				data: {
					tendbvt: tendbvt,
					diachi: diachi,
					sdt: sdt
				},
				success: function(data){
					$('#tendbvt').val('');
					$('#diachi').val('');
					$('#sdt').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-dbvt', function(){
		var tendbvt = $('#tendbvt').val();
		
		$.ajax({
			url: 'public/library/nhansu/diembvt/add.php',
			type: 'POST',
			data: {
				tendbvt: tendbvt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_dbvt = getArray.tendbvt;
				if($('#tendbvt').val() != "" && $('#diachi').val() != "" && $('#sdt').val() != "")
				{
					if(check_dbvt != tendbvt)
					{
						alert("Thêm điểm bán vé tháng thành công");
					}
					else
					{
						alert("Điểm bán vé tháng đã tồn tại");
					}	
				}	
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/nhansu/diembvt/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-dbvt', function(){
		var madbvt = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
			{
				$.ajax({
					url: 'public/library/nhansu/diembvt/delete_query.php',
					type: 'POST',
					data: {
						madbvt: madbvt
					},
					success: function(data){
						DisplayData();
						$('#update-dbvt').hide();
						$('#save-dbvt').show();	
						$('#tendbvt').val('');
						$('#diachi').val('');
						$('#sdt').val('');
					}
				});
			}
	})
	
	$(document).on('click', '.edit-dbvt', function(){
		var madbvt = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/nhansu/diembvt/edit.php',
			type: 'POST',
			data: {
				madbvt: madbvt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				dbvt_id = getArray.madbvt;
				
				$('#tendbvt').val(getArray.tendbvt);
				$('#diachi').val(getArray.diachi);
				$('#sdt').val(getArray.sdt);
				
				$('#update-dbvt').show();
				$('#save-dbvt').hide();	
			}
		})
	});
	
	$('#update-dbvt').on('click', function(){
		var tendbvt = $('#tendbvt').val();
		var diachi = $('#diachi').val();
		var sdt = $('#sdt').val();
		
		$.ajax({
			url: 'public/library/nhansu/diembvt/update_query.php',
			type: 'POST',
			data: {
				madbvt: dbvt_id,
				tendbvt: tendbvt,
				diachi: diachi,
				sdt: sdt
			},
			success: function(){
				DisplayData();
				$('#tendbvt').val('');
				$('#diachi').val('');
				$('#sdt').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-dbvt').hide();
				$('#save-dbvt').show();	
				
				dbvt_id = "";
			}
		});
	});
});