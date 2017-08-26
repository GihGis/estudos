jQuery(document).ready( function($){
$( ".sortable" ).sortable({
      tolerance: 'pointer',
        revert: 'true',
        placeholder: 'remove_this_image col-md-3 sortable1',
        forceHelperSize: true
    });
	
		var custom_uploader;
		  $('#my_upl_button').click(function(e) {
			e.preventDefault();
			//If the uploader object has already been created, reopen the dialog
			if (custom_uploader) {
			  custom_uploader.open();
			  return;
			}
			//Extend the wp.media object
			custom_uploader = wp.media.frames.file_frame = wp.media({
			  title: 'Escolha as imagens do Slider da sua pagina ou postagem',
			  button: {
				text: 'Escolher Imagens'
			  },
			  multiple: true
			});
			custom_uploader.on('select', function() {
			  var selection = custom_uploader.state().get('selection');
			  selection.map( function( attachment ) {
				attachment = attachment.toJSON();
				$("#exibe").append("<span class='remove_this_image col-md-3 galery_metaboxes'><span class='dashicons dashicons-no' style='float: right;'></span><img src='" +attachment.url+"' alt='"+attachment.alt+"' title='"+attachment.title+"' description='"+attachment.caption+"' class='img-responsive img-thumbnail'/><input type='hidden'  name='my_image_URL[]' value='"+attachment.url+"'></span>");
								
			  });
			});
			custom_uploader.open();
		  });
		  
		$(document).on( 'click', '.dashicons', function(e){
                e.preventDefault();
                $(this).closest('.remove_this_image').remove();
        });
});
