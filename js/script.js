jQuery(document).ready(function(){

 	var idd = jQuery('.postbox input[name="post_format"]:checked').attr('id');

 	if(  idd == 'post-format-gallery'){
 		 jQuery('.cmb2-id--galley').show();
 	}else{
 		jQuery('.cmb2-id--galley').hide();
 	}

 	if(  idd == 'post-format-audio'){
 		 jQuery('.cmb2-id--audio').show();
 	}else{
 		jQuery('.cmb2-id--audio').hide();
 	}

 	if(  idd == 'post-format-video'){
 		 jQuery('.cmb2-id--video').show();
 	}else{
 		jQuery('.cmb2-id--video').hide();
 	}



 	jQuery('.postbox input[name="post_format"]').change(function(){
 		jQuery('.cmb2-id--galley').hide();
 		jQuery('.cmb2-id--audio').hide();
 		jQuery('.cmb2-id--video').hide();

 		var idd = jQuery('.postbox input[name="post_format"]:checked').attr('id');

 		if(  idd == 'post-format-gallery'){
 		 jQuery('.cmb2-id--galley').show();
 	}else{
 		jQuery('.cmb2-id--galley').hide();
 	}

 	if(  idd == 'post-format-audio'){
 		 jQuery('.cmb2-id--audio').show();
 	}else{
 		jQuery('.cmb2-id--audio').hide();
 	}

 	if(  idd == 'post-format-video'){
 		 jQuery('.cmb2-id--video').show();
 	}else{
 		jQuery('.cmb2-id--video').hide();
 	}

 	});


 	
 	

})







