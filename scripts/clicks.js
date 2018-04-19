$(document).ready(function() {
	
	var clicks = 0;

	$("#show-gadgets").click(function(event){
		event.stopPropagation();
		if(clicks == 0){
			$(this).data('clicked', true);
			if($('#show-gadgets').data('clicked')) {
				$("#adrenalin, #concerts, #fun, #restaurants, #vouchers").css('opacity', '.3');
			};
	   		$("#toggle-gadgets").slideToggle();
			clicks++;
			console.log("open");
		}else{
			
			$("#toggle-gadgets").slideToggle();
			$("#adrenalin, #concerts, #fun, #restaurants, #vouchers").css('opacity', '1');
	
			clicks--;
			console.log("closed");
		}
		console.log(clicks);
	});
});
