//TODO fenrirAB - awwwwww yeeeeaaaahhhh!
$(window).scroll(function() {
	if($(this).scrollTop() > 40) {
		//when you scroll down
		$("#headerID").css('background-color', 'rgba(35,35,35,.97)');
		//$("#clubLogo").fadeIn(function() {
		//	$(this).attr('src','display/media/images/logo2.png');
		$("#clubLogo").fadeOut(1000);
		//});
	}
	else {
		//when you scroll up
		console.log('there');
		$("#headerID").css('background-color', 'rgba(35,35,35,0.0)');
		//$("#clubLogo").fadeOut(function() {
		//	$(this).attr('src','display/media/images/logo1.png').fadeIn();
		$("#clubLogo").fadeIn(1000);
		//});
	
	}
});



//Google Maps API
 function initializeMap() {
	var mapCanvas = document.getElementById('map_canvas');
	var mapOptions = {
	  center: new google.maps.LatLng(33.887228, -117.203350),
	  zoom: 15,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
  }

//Join Us button
function join(){
	document.getElementById("joinUs").style.display = "inline-block";
}
function joinClose(){
	document.getElementById("joinUs").style.display = "none";
}