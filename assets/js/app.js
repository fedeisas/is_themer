$(document).ready( function() {				
	$(".colors").miniColors();

	$(".imageupload a").twipsy({ 'placement': 'right' });

	$(".imageupload a").click(function(){
		$(this).parent().siblings('input').trigger('click');
	});

	$(".imageupload input").live('change', function(e){

		console.log('change');

		e.preventDefault();

		var elementID = $(this).attr('id');
		var fieldName = $(this).attr('name');
		var imageContainer = $(this).parent().children('.media-grid').children().children();
		var imageField = $(this).siblings('.disabled');

		$.ajaxFileUpload({
			url: './upload/upload_file/' + fieldName,
			secureuri: false,
			fileElementId: elementID,
			dataType: 'json',
			data: {
				'fieldName': fieldName
			},
			success  : function (data, status)
			{
			   if(data.status == 'ok')
			   {
			      imageContainer.attr('src',data.url);
			      imageField.val(data.filename);
			   }
			}
		});
		return false;
	});
});