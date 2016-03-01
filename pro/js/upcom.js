$(document).ready(function(){;
	alert(current_page);
	eventTime =  Date.parse(current_page)/1000;
	currentTime = Math.floor(jQuery.now()/1000);
	seconds = eventTime - currentTime;
	days = Math.floor(seconds/(60*60*24));
	$('#upcom').text(days + 'remaining');
});