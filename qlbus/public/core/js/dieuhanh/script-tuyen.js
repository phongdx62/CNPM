$(document).ready(function(){
	var t_id;
	
	DisplayData();
	
	$('#update-t').hide();
	
	$('#save-t').on('click', function(){
		if($('#tentuyen').val() == "" || $('#giobd').val() == "" || $('#giokt').val() == "" || $('#tansuat').val() == "" || $('#soluongxe').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var tentuyen = $('#tentuyen').val();
			var giobd = $('#giobd').val();
			var giokt = $('#giokt').val();
			var tansuat = $('#tansuat').val();
			var soluongxe = $('#soluongxe').val();
				
			$.ajax({
				url: 'public/library/dieuhanh/tuyen/save_query.php',
				type: 'POST',
				data: {
					tentuyen: tentuyen,
					giobd: giobd,
					giokt: giokt,
					tansuat: tansuat,
					soluongxe: soluongxe
				},
				success: function(data){
					$('#tentuyen').val('');
					$('#giobd').val('');
					$('#giokt').val('');
					$('#tansuat').val('');
					$('#soluongxe').val('');
				
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-t', function(){
		var tentuyen = $('#tentuyen').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/tuyen/add.php',
			type: 'POST',
			data: {
				tentuyen: tentuyen
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_tentuyen = getArray.tentuyen;
				if($('#tentuyen').val() != "" && $('#giobd').val() != "" && $('#giokt').val() != "" && $('#tansuat').val() != "" && $('#soluongxe').val() != "")
				{
					if(check_tentuyen != tentuyen)
					{
						alert("Thêm tuyến xe thành công");
					}
					else
					{
						alert("Tuyến xe đã tồn tại!");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/dieuhanh/tuyen/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-t', function(){
		var matuyen = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/dieuhanh/tuyen/delete_query.php',
				type: 'POST',
				data: {
					matuyen: matuyen
				},
				success: function(data){
					DisplayData();
					$('#update-t').hide();
					$('#save-t').show();

					$('#tentuyen').val('');
					$('#giobd').val('');
					$('#giokt').val('');
					$('#tansuat').val('');
					$('#soluongxe').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-t', function(){
		var matuyen = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/dieuhanh/tuyen/edit.php',
			type: 'POST',
			data: {
				matuyen: matuyen
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				t_id = getArray.matuyen;
				
				$('#tentuyen').val(getArray.tentuyen);
				$('#giobd').val(getArray.giobd);
				$('#giokt').val(getArray.giokt);
				$('#tansuat').val(getArray.tansuat);
				$('#soluongxe').val(getArray.soluongxe);
				
				$('#update-t').show();
				$('#save-t').hide();	
			}
		})
	});
	
	$('#update-t').on('click', function(){
		var tentuyen = $('#tentuyen').val();
		var giobd = $('#giobd').val();
		var giokt = $('#giokt').val();
		var tansuat = $('#tansuat').val();
		var soluongxe = $('#soluongxe').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/tuyen/update_query.php',
			type: 'POST',
			data: {
				matuyen: t_id,
				tentuyen: tentuyen,
				giobd: giobd,
				giokt: giokt,
				tansuat: tansuat,
				soluongxe: soluongxe
			},
			success: function(){
				DisplayData();
				$('#tentuyen').val('');
				$('#giobd').val('');
				$('#giokt').val('');
				$('#tansuat').val('');
				$('#soluongxe').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-t').hide();
				$('#save-t').show();	
				
				t_id = "";
			}
		});
	});

});