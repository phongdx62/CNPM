$(document).ready(function(){
	var bvn_id;
	
	DisplayData();
	
	$('#update-bvn').hide();
	
	$('#save-bvn').on('click', function(){
		if($('#ngay').val() == "" || $('#mapx').val() == "" || $('#mavn').val() == "" || $('#sovephatra').val() == "" || $('#sovethuve').val() == "" || $('#sovebanduoc').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var ngay = $('#ngay').val();
			var mapx = $('#mapx').val();
			var mavn = $('#mavn').val();
			var sovephatra = $('#sovephatra').val();
			var sovethuve = $('#sovethuve').val();
			var sovebanduoc = $('#sovebanduoc').val();
			
			$.ajax({
				url: 'public/library/kinhdoanh/banvengay/save_query.php',
				type: 'POST',
				data: {
					ngay: ngay,
					mapx: mapx,
					mavn: mavn,
					sovephatra: sovephatra,
					sovethuve: sovethuve,
					sovebanduoc: sovebanduoc	
				},
				success: function(data){
					$('#ngay').val('');
					$('#mapx').val('');
					$('#mavn').val('');
					$('#sovephatra').val('');
					$('#sovethuve').val('');
					$('#sovebanduoc').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-bvn', function(){
		var mapx = $('#mapx').val();
		var mavn = $('#mavn').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvengay/add.php',
			type: 'POST',
			data: {
				mapx: mapx,
				mavn: mavn
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_mapx = getArray.mapx;
				var check_mavn = getArray.mavn;
				if($('#ngay').val() != "" && $('#mapx').val() != "" && $('#mavn').val() != "" && $('#sovephatra').val() != "" && $('#sovethuve').val() != "" && $('#sovebanduoc').val() != "")
				{
					if( check_mavn == mavn)
					{
						//alert("Thông tin bán vé ngày đã tồn tại!");
						document.getElementById("tt").innerHTML = "Thông tin bán vé ngày đã tồn tại!";
					}
					else
					{
						//alert("Thêm thông tin bán vé ngày thành công");
						document.getElementById("tt").innerHTML = "Thêm thông tin bán vé ngày thành công";
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/kinhdoanh/banvengay/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-bvn', function(){
		var magdvn = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/kinhdoanh/banvengay/delete_query.php',
				type: 'POST',
				data: {
					magdvn: magdvn
				},
				success: function(data){
					DisplayData();
					$('#update-bvn').hide();
					$('#save-bvn').show();	
					$('#ngay').val('');
					$('#mapx').val('');
					$('#mavn').val('');
					$('#sovephatra').val('');
					$('#sovethuve').val('');
					$('#sovebanduoc').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-bvn', function(){
		var magdvn = $(this).attr('name');
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvengay/edit.php',
			type: 'POST',
			data: {
				magdvn: magdvn
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				bvn_id = getArray.magdvn;
				
				$('#ngay').val(getArray.ngay);
				$('#mapx').val(getArray.mapx);
				$('#mavn').val(getArray.mavn);
				$('#sovephatra').val(getArray.sovephatra);
				$('#sovethuve').val(getArray.sovethuve);
				$('#sovebanduoc').val(getArray.sovebanduoc);
				
				$('#update-bvn').show();
				$('#save-bvn').hide();	
			}
		})
	});
	
	$('#update-bvn').on('click', function(){
		var ngay = $('#ngay').val();
		var mapx = $('#mapx').val();
		var mavn = $('#mavn').val();
		var sovephatra = $('#sovephatra').val();
		var sovethuve = $('#sovethuve').val();
		var sovebanduoc = $('#sovebanduoc').val();
		
		$.ajax({
			url: 'public/library/kinhdoanh/banvengay/update_query.php',
			type: 'POST',
			data: {
				magdvn: bvn_id,
				ngay: ngay,
				mapx: mapx,
				mavn: mavn,
				sovephatra: sovephatra,
				sovethuve: sovethuve,
				sovebanduoc: sovebanduoc		
			},
			success: function(){
				DisplayData();
				$('#ngay').val('');
				$('#mapx').val('');
				$('#mavn').val('');
				$('#sovephatra').val('');
				$('#sovethuve').val('');
				$('#sovebanduoc').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-bvn').hide();
				$('#save-bvn').show();	
				
				bvn_id = "";
			}
		});
	});

});