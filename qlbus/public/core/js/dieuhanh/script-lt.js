$(document).ready(function(){
	var lt_id;
	
	DisplayData();
	
	$('#update-lt').hide();
	
	$('#save-lt').on('click', function(){
		if($('#tentuyen').val() == "" || $('#chieudi').val() == "" || $('#chieuve').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tentuyen = $('#tentuyen').val();
			var chieudi = $('#chieudi').val();
			var chieuve = $('#chieuve').val();
				
			$.ajax({
				url: 'public/library/dieuhanh/luuthong/save_query.php',
				type: 'POST',
				data: {
					tentuyen: tentuyen,
					chieudi: chieudi,
					chieuve: chieuve
				},
				success: function(data){
					$('#tentuyen').val('');
					$('#chieudi').val('');
					$('#chieuve').val('');
				
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-lt', function(){
		var tentuyen = $('#tentuyen').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/luuthong/add.php',
			type: 'POST',
			data: {
				tentuyen: tentuyen
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_tentuyen = getArray.tentuyen;
				if($('#tentuyen').val() != "" && $('#chieudi').val() != "" && $('#chieuve').val() != "")
				{
					if(check_tentuyen != tentuyen)
					{
						alert("Thêm thông tin lưu thông thành công");
					}
					else
					{
						alert("Thông tin lưu thông đã tồn tại!");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/dieuhanh/luuthong/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-lt', function(){
		var matuyen = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/dieuhanh/luuthong/delete_query.php',
				type: 'POST',
				data: {
					matuyen: matuyen
				},
				success: function(data){
					DisplayData();
					$('#update-lt').hide();
					$('#save-lt').show();

					$('#tentuyen').val('');
					$('#chieudi').val('');
					$('#chieuve').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-lt', function(){
		var matuyen = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/dieuhanh/luuthong/edit.php',
			type: 'POST',
			data: {
				matuyen: matuyen
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				lt_id = getArray.matuyen;
				
				$('#tentuyen').val(getArray.tentuyen);
				$('#chieudi').val(getArray.chieudi);
				$('#chieuve').val(getArray.chieuve);

				$('#update-lt').show();
				$('#save-lt').hide();	
			}
		})
	});
	
	$('#update-lt').on('click', function(){
		var tentuyen = $('#tentuyen').val();
		var chieudi = $('#chieudi').val();
		var chieuve = $('#chieuve').val();

		$.ajax({
			url: 'public/library/dieuhanh/luuthong/update_query.php',
			type: 'POST',
			data: {
				matuyen: lt_id,
				tentuyen: tentuyen,
				chieudi: chieudi,
				chieuve: chieuve
			},
			success: function(){
				DisplayData();
				$('#tentuyen').val('');
				$('#chieudi').val('');
				$('#chieuve').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-lt').hide();
				$('#save-lt').show();	
				
				lt_id = "";
			}
		});
	});

});