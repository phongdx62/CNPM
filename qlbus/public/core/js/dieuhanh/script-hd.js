$(document).ready(function(){
	var hd_id;
	
	DisplayData();
	
	$('#update-hd').hide();
	
	$('#save-hd').on('click', function(){
		if($('#ngay').val() == "" || $('#ca').val() == "" || $('#bienso').val() == "" || $('#mahd').val() == "" || $('#matx').val() == "" || $('#mapx').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var ngay = $('#ngay').val();
			var ca = $('#ca').val();
			var bienso = $('#bienso').val();
			var matuyen = $('#matuyen').val();
			var matx = $('#matx').val();
			var mapx = $('#mapx').val();
				
			$.ajax({
				url: 'public/library/dieuhanh/hoatdong/save_query.php',
				type: 'POST',
				data: {
					ngay: ngay,
					ca: ca,
					bienso: bienso,
					matuyen: matuyen,
					matx: matx,
					mapx: mapx
				},
				success: function(data){
					$('#ngay').val('');
					$('#ca').val('');
					$('#bienso').val('');
					$('#matuyen').val('');
					$('#matx').val('');
					$('#mapx').val('');
				
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-hd', function(){
		var ngay = $('#ngay').val();
		var bienso = $('#bienso').val();
		var ca = $('#ca').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/hoatdong/add.php',
			type: 'POST',
			data: {
				ngay: ngay,
				bienso: bienso,
				ca: ca
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_ngay = getArray.ngay;
				var check_bienso = getArray.bienso;
				var check_ca = getArray.ca;
				if($('#ngay').val() != "" && $('#ca').val() != "" && $('#bienso').val() != "" && $('#matuyen').val() != "" && $('#matx').val() != "" && $('#mapx').val() != "")
				{
					if(check_ngay == ngay && check_bienso == bienso && check_ca == ca)
					{
						alert("Hoạt động lưu thông đã tồn tại!");
					}
					else
					{
						alert("Thêm hoạt động lưu thông thành công");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/dieuhanh/hoatdong/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-hd', function(){
		var mahd = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/dieuhanh/hoatdong/delete_query.php',
				type: 'POST',
				data: {
					mahd: mahd
				},
				success: function(data){
					DisplayData();
					$('#update-hd').hide();
					$('#save-hd').show();

					$('#ngay').val('');
					$('#ca').val('');
					$('#bienso').val('');
					$('#matuyen').val('');
					$('#matx').val('');
					$('#mapx').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-hd', function(){
		var mahd = $(this).attr('name');
		alert(mahd);
		$.ajax({
			url: 'public/library/dieuhanh/hoatdong/edit.php',
			type: 'POST',
			data: {
				mahd: mahd
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				hd_id = getArray.mahd;
				
				$('#ngay').val(getArray.ngay);
				$('#ca').val(getArray.ca);
				$('#bienso').val(getArray.bienso);
				$('#matuyen').val(getArray.matuyen);
				$('#matx').val(getArray.matx);
				$('#mapx').val(getArray.mapx);
				
				$('#update-hd').show();
				$('#save-hd').hide();	
			}
		})
	});
	
	$('#update-hd').on('click', function(){
		var ngay = $('#ngay').val();
		var ca = $('#ca').val();
		var bienso = $('#bienso').val();
		var matuyen = $('#matuyen').val();
		var matx = $('#matx').val();
		var mapx = $('#mapx').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/hoatdong/update_query.php',
			type: 'POST',
			data: {
				mahd: hd_id,
				ngay: ngay,
				ca: ca,
				bienso: bienso,
				matuyen: matuyen,
				matx: matx,
				mapx: mapx
			},
			success: function(){
				DisplayData();
				$('#ngay').val('');
				$('#ca').val('');
				$('#bienso').val('');
				$('#matuyen').val('');
				$('#matx').val('');
				$('#mapx').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-hd').hide();
				$('#save-hd').show();	
				
				hd_id = "";
			}
		});
	});

});