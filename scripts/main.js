//search slideToggle
$( document ).ready(function() {
	$('#search-icon').click(function(){
		$('#search-area').slideToggle('slow');
	});

	$('#close-search-icon').click(function(){
		$('#search-area').slideToggle('slow');
	});
});

