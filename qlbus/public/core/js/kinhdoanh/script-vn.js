$(document).ready(function(){
	var vn_id;
	
	DisplayData();
	
	$('#update-vn').hide();
	
	$('#save-vn').on('click', function(){
		if($('#tenvn').val() == "" || $('#dongia').val() == "" || $('#matuyen').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tenvn = $('#tenvn').val();
			var dongia = $('#dongia').val();
			var matuyen = $('#matuyen').val();
			
			$.ajax({
				url: 'public/library/kinhdoanh/vengay/save_query.php',
				type: 'POST',
				data: {
					tenvn: tenvn,
					dongia: dongia,
					matuyen: matuyen
				},
				success: function(data){
					$('#tenvn').val('');
					$('#dongia').val('');
					$('#matuyen').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-vn', function(){
		var matuyen = $('#matuyen').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/vengay/add.php',
			type: 'POST',
			data: {
				matuyen: matuyen
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_mt = getArray.matuyen;
				if($('#tenvn').val() != "" && $('#dongia').val() != ""  && $('#matuyen').val() != "")
				{
					if(check_mt != matuyen)
					{
						alert("Thêm vé ngày thành công");
						// document.getElementById("tt").innerHTML = "Thêm vé ngày thành công";
					}
					else
					{
						alert("Vé ngày đã tồn tại!");
						// document.getElementById("tt").innerHTML = "Vé ngày đã tồn tại!";
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/kinhdoanh/vengay/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-vn', function(){
		var mavn = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/kinhdoanh/vengay/delete_query.php',
				type: 'POST',
				data: {
					mavn: mavn
				},
				success: function(data){
					DisplayData();
					$('#update-vn').hide();
					$('#save-vn').show();	
					$('#tenvn').val('');
					$('#dongia').val('');
					$('#matuyen').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-vn', function(){
		var mavn = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/kinhdoanh/vengay/edit.php',
			type: 'POST',
			data: {
				mavn: mavn
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				vn_id = getArray.mavn;
				
				$('#tenvn').val(getArray.tenvn);
				$('#dongia').val(getArray.dongia);
				$('#matuyen').val(getArray.matuyen);
				
				$('#update-vn').show();
				$('#save-vn').hide();	
			}
		})
	});
	
	$('#update-vn').on('click', function(){
		var tenvn = $('#tenvn').val();
		var dongia = $('#dongia').val();
		var matuyen = $('#matuyen').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/vengay/update_query.php',
			type: 'POST',
			data: {
				mavn: vn_id,
				tenvn: tenvn,
				dongia: dongia,
				matuyen: matuyen	
			},
			success: function(){
				DisplayData();
				$('#tenvn').val('');
				$('#dongia').val('');
				$('#matuyen').val('');
				

				alert("Hoàn thành sửa thông tin");
				
				$('#update-vn').hide();
				$('#save-vn').show();	
				
				vn_id = "";
			}
		});
	});

});