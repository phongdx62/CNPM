$(document).ready(function(){
	var vt_id;
	
	DisplayData();
	
	$('#update-vt').hide();
	
	$('#save-vt').on('click', function(){
		if($('#tenvt').val() == "" || $('#dongia').val() == "" || $('#ghichu').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tenvt = $('#tenvt').val();
			var dongia = $('#dongia').val();
			var ghichu = $('#ghichu').val();
			
			$.ajax({
				url: 'public/library/kinhdoanh/vethang/save_query.php',
				type: 'POST',
				data: {
					tenvt: tenvt,
					dongia: dongia,
					ghichu: ghichu
				},
				success: function(data){
					$('#tenvt').val('');
					$('#dongia').val('');
					$('#ghichu').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-vt', function(){
		var tenvt = $('#tenvt').val();
		var dongia = $('#dongia').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/vethang/add.php',
			type: 'POST',
			data: {
				tenvt: tenvt,
				dongia: dongia
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_tenvt = getArray.tenvt;
				var check_dongia = getArray.dongia;
				if($('#tenvt').val() != "" && $('#dongia').val() != ""  && $('#ghichu').val() != "")
				{
					if(check_tenvt == tenvt && check_dongia == dongia)
					{
						alert("Vé tháng đã tồn tại!");
					}
					else
					{
						alert("Thêm vé tháng thành công");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/kinhdoanh/vethang/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-vt', function(){
		var mavt = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/kinhdoanh/vethang/delete_query.php',
				type: 'POST',
				data: {
					mavt: mavt
				},
				success: function(data){
					DisplayData();
					$('#update-vt').hide();
					$('#save-vt').show();	
					$('#tenvt').val('');
					$('#dongia').val('');
					$('#ghichu').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-vt', function(){
		var mavt = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/kinhdoanh/vethang/edit.php',
			type: 'POST',
			data: {
				mavt: mavt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				vt_id = getArray.mavt;
				
				$('#tenvt').val(getArray.tenvt);
				$('#dongia').val(getArray.dongia);
				$('#ghichu').val(getArray.ghichu);
				
				$('#update-vt').show();
				$('#save-vt').hide();	
			}
		})
	});
	
	$('#update-vt').on('click', function(){
		var tenvt = $('#tenvt').val();
		var dongia = $('#dongia').val();
		var ghichu = $('#ghichu').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/vethang/update_query.php',
			type: 'POST',
			data: {
				mavt: vt_id,
				tenvt: tenvt,
				dongia: dongia,
				ghichu: ghichu	
			},
			success: function(){
				DisplayData();
				$('#tenvt').val('');
				$('#dongia').val('');
				$('#ghichu').val('');
				

				alert("Hoàn thành sửa thông tin");
				
				$('#update-vt').hide();
				$('#save-vt').show();	
				
				vt_id = "";
			}
		});
	});

});