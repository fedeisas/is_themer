$(document).ready( function() {				
	$(".colors").miniColors();

	$(".imageupload input").change(function(){
		var elementID = $(this).attr('id');
		var fieldName = $(this).attr('name');
		var imageContainer = $(this).parent().children('.media-grid').children().children();

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
			   }
			}
		});
		return false;
	});
});