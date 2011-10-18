$(document).ready( function() {				
	$(".colors").miniColors();

	$(".imageupload a").twipsy({ 'placement': 'right' });

	$(".imageupload a").click(function(){
		$(this).parent().siblings('input').trigger('click');
	});

	$(".imageupload input").live('change', function(e){

		e.preventDefault();

		var elementID = $(this).attr('id');
		var fieldName = $(this).attr('name');
		var urlHolder = $(this).next();
		var imageContainer = $(this).parent().children('.media-grid').children().children();
		var imageField = $(this).siblings('.disabled');

		console.log(urlHolder);

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
			      urlHolder.val(data.filename);
			   }
			}
		});
		return false;
	});


	$(".multiplechoice a").click(function(e){
		e.preventDefault();
		var  e = $(this);
		var choice = e.attr('id');
		e.parent().parent().children('li').each(function(){
			$(this).children('a').removeClass('selected');
		});
		e.addClass('selected');
		$(this).parent().parent().siblings('input').val(choice);

		return false;
	});
});