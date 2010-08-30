jQuery(document).ready(function($){
	
	var data_via = '#tweetbutton-data-via';
	var at_via = '#twitterbutton-at-via';
	var data_count = '#tweetbutton-data-count';
	
	$( at_via ).html( $( data_via ).val() );
	
	// data-via keyup event.
	$( data_via ).keyup(function(event){
		var val = $(data_via).val();
		val = val.replace('@', '');
		
		$( at_via ).html( val );
		$(data_via).val( val );
	});
	
	// Count display change event.
	$( data_count ).change(function(){
		var val = $( this ).val();
		$( '#twitterbutton-visual img').each(function(){
			if($(this).hasClass(val)) {
				$(this).removeClass('hide');
			} else {
				$(this).addClass('hide');
			}
		});
	});
});