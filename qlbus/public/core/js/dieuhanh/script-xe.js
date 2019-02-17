$(document).ready(function(){
	var xe_id;
	
	DisplayData();
	
	$('#update-xe').hide();
	
	$('#save-xe').on('click', function(){
		if($('#bienso').val() == "" || $('#hangsx').val() == "" || $('#namsx').val() == "" || $('#nhacc').val() == "" || $('#soghe').val() == "" || $('#matuyen').val() == "" || $('#anhxe').val() == ""){
			alert("Bạn phải điền đầy đủ thông tin");
		}else{
			var bienso = $('#bienso').val();
			var hangsx = $('#hangsx').val();
			var namsx = $('#namsx').val();
			var nhacc = $('#nhacc').val();
			var soghe = $('#soghe').val();
			var matuyen = $('#matuyen').val();
			var anhxe = $('#anhxe').val();
			
			$.ajax({
				url: 'public/library/dieuhanh/xe/save_query.php',
				type: 'POST',
				data: {
					bienso: bienso,
					hangsx: hangsx,
					namsx: namsx,
					nhacc: nhacc,
					soghe: soghe,
					matuyen: matuyen,
					anhxe: anhxe
				},
				success: function(data){
					$('#bienso').val('');
					$('#hangsx').val('');
					$('#namsx').val('');
					$('#nhacc').val('');
					$('#soghe').val('');
					$('#matuyen').val('');
					$('#anhxe').val('');
					DisplayData();		
				}
			});	
		}	
	});

	$(document).on('click', '#save-xe', function(){
		var bienso = $('#bienso').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/xe/add.php',
			type: 'POST',
			data: {
				bienso: bienso
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				var check_bienso = getArray.bienso;
				if($('#bienso').val() != "" && $('#hangsx').val() != "" && $('#namsx').val() != "" && $('#nhacc').val() != "" && $('#soghe').val() != ""  && $('#matuyen').val() != "" && $('#anhxe').val() != "")
				{
					if(check_bienso != bienso)
					{
						alert("Thêm xe thành công");
					}
					else
					{
						alert("Xe đã tồn tại");
					}		
				}
			}
		})
	});
	
	function DisplayData(){
		$.ajax({
			url: 'public/library/dieuhanh/xe/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete-xe', function(){
		var bienso = $(this).attr('name');
		if(confirm("Bạn có thực sự muốn xóa không?"))
		{
			$.ajax({
				url: 'public/library/dieuhanh/xe/delete_query.php',
				type: 'POST',
				data: {
					bienso: bienso
				},
				success: function(data){
					DisplayData();
					$('#update-xe').hide();
					$('#save-xe').show();
					$('#bienso').val('');	
					$('#hangsx').val('');
					$('#namsx').val('');
					$('#nhacc').val('');
					$('#soghe').val('');
					$('#matuyen').val('');
					$('#anhxe').val('');
				}
			});
		}
	})
	
	$(document).on('click', '.edit-xe', function(){
		var bienso = $(this).attr('name');
	
		$.ajax({
			url: 'public/library/dieuhanh/xe/edit.php',
			type: 'POST',
			data: {
				bienso: bienso
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				xe_id = getArray.bienso;

				$('#bienso').val(bienso);
				$('#hangsx').val(getArray.hangsx);
				$('#namsx').val(getArray.namsx);
				$('#nhacc').val(getArray.nhacc);
				$('#soghe').val(getArray.soghe);
				$('#matuyen').val(getArray.matuyen);
				$('#anhxe').val(getArray.anhxe);
				
				$('#update-xe').show();
				$('#save-xe').hide();	
			}
		})
	});
	
	$('#update-xe').on('click', function(){
		var biensomoi = $('#bienso').val();
		var hangsx = $('#hangsx').val();
		var namsx = $('#namsx').val();
		var nhacc = $('#nhacc').val();
		var soghe = $('#soghe').val();
		var matuyen = $('#matuyen').val();
		var anhxe = $('#anhxe').val();
		
		$.ajax({
			url: 'public/library/dieuhanh/xe/update_query.php',
			type: 'POST',
			data: {
				bienso: xe_id,
				biensomoi: biensomoi,
				hangsx: hangsx,
				namsx: namsx,
				nhacc: nhacc,
				soghe: soghe,
				matuyen: matuyen,
				anhxe: anhxe	
			},
			success: function(){
				DisplayData();
				$('#bienso').val('');
				$('#hangsx').val('');
				$('#namsx').val('');
				$('#nhacc').val('');
				$('#soghe').val('');
				$('#matuyen').val('');
				$('#anhxe').val('');

				alert("Hoàn thành sửa thông tin");
				
				$('#update-xe').hide();
				$('#save-xe').show();	
				
				xe_id = "";
			}
		});
	});

});