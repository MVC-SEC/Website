$(window).scroll(function() {
	if($(this).scrollTop() > 350) {
		$("#headerID").css('background-color', 'rgba(0, 0, 0, 0.60)');
	}
	else {
		console.log('there');
		$("#headerID").css('background-color', '#000000');
	}
});