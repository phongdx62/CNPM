$(document).ready(function(){
	var bvt_id;
	
	DisplayData();
	
	$('#update-bvt').hide();
	
	$('#save-bvt').on('click', function(){
		if($('#ngay').val() == "" || $('#manvbvt').val() == "" || $('#mavt').val() == "" || $('#sovephatra').val() == "" || $('#sovethuve').val() == "" || $('#sovebanduoc').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var ngay = $('#ngay').val();
			var manvbvt = $('#manvbvt').val();
			var mavt = $('#mavt').val();
			var sovephatra = $('#sovephatra').val();
			var sovethuve = $('#sovethuve').val();
			var sovebanduoc = $('#sovebanduoc').val();
			
			$.ajax({
				url: 'public/library/kinhdoanh/banvethang/save_query.php',
				type: 'POST',
				data: {
					ngay: ngay,
					manvbvt: manvbvt,
					mavt: mavt,
					sovephatra: sovephatra,
					sovethuve: sovethuve,
					sovebanduoc: sovebanduoc	
				},
				success: function(data){
					$('#ngay').val('');
					$('#manvbvt').val('');
					$('#mavt').val('');
					$('#sovephatra').val('');
					$('#sovethuve').val('');
					$('#sovebanduoc').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-bvt', function(){
		var manvbvt = $('#manvbvt').val();
		var mavt = $('#mavt').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvethang/add.php',
			type: 'POST',
			data: {
				manvbvt: manvbvt,
				mavt: mavt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_manvbvt = getArray.manvbvt;
				var check_mavt = getArray.mavt;
				if($('#ngay').val() != "" && $('#manvbvt').val() != "" && $('#mavt').val() != "" && $('#sovephatra').val() != "" && $('#sovethuve').val() != "" && $('#sovebanduoc').val() != "")
				{
					if(check_manvbvt == manvbvt && check_mavt == mavt)
					{
						lert("Thông tin bán vé tháng đã tồn tại!");
					}
					else
					{
						alert("Thêm thông tin bán vé tháng thành công");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/kinhdoanh/banvethang/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-bvt', function(){
		var magdvt = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/kinhdoanh/banvethang/delete_query.php',
				type: 'POST',
				data: {
					magdvt: magdvt
				},
				success: function(data){
					DisplayData();
					$('#update-bvt').hide();
					$('#save-bvt').show();	
					$('#ngay').val('');
					$('#manvbvt').val('');
					$('#mavt').val('');
					$('#sovephatra').val('');
					$('#sovethuve').val('');
					$('#sovebanduoc').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-bvt', function(){
		var magdvt = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvethang/edit.php',
			type: 'POST',
			data: {
				magdvt: magdvt
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				bvt_id = getArray.magdvt;
				
				$('#ngay').val(getArray.ngay);
				$('#manvbvt').val(getArray.manvbvt);
				$('#mavt').val(getArray.mavt);
				$('#sovephatra').val(getArray.sovephatra);
				$('#sovethuve').val(getArray.sovethuve);
				$('#sovebanduoc').val(getArray.sovebanduoc);
				
				$('#update-bvt').show();
				$('#save-bvt').hide();	
			}
		})
	});
	
	$('#update-bvt').on('click', function(){
		var ngay = $('#ngay').val();
		var manvbvt = $('#manvbvt').val();
		var mavt = $('#mavt').val();
		var sovephatra = $('#sovephatra').val();
		var sovethuve = $('#sovethuve').val();
		var sovebanduoc = $('#sovebanduoc').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvethang/update_query.php',
			type: 'POST',
			data: {
				magdvt: bvt_id,
				ngay: ngay,
				manvbvt: manvbvt,
				mavt: mavt,
				sovephatra: sovephatra,
				sovethuve: sovethuve,
				sovebanduoc: sovebanduoc		
			},
			success: function(){
				DisplayData();
				$('#ngay').val('');
				$('#manvbvt').val('');
				$('#mavt').val('');
				$('#sovephatra').val('');
				$('#sovethuve').val('');
				$('#sovebanduoc').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-bvt').hide();
				$('#save-bvt').show();	
				
				bvt_id = "";
			}
		});
	});

});