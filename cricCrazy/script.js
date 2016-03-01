( function( $ ) {
$( document ).ready(function() {
$('#header1').prepend('<div id="menu-button">Menu</div>');
	$('#header1 #menu-button').on('click', function(){
		
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );

$(document).ready(function(){
	$('.bteam').hide();
	$('.cteam').hide();
	$('.poola').click(function(){
		$('.active2').attr('class', 'poolb');
		$(this).attr('class', 'active2');
		$('.bteam').hide();
		$('.ateam').show();
	});
	$('.poolb').click(function(){
		$('.active2').attr('class', 'poola');
		$(this).attr('class', 'active2');
		$('.ateam').hide();
		$('.bteam').show();
	})
	$('.table tr:even').addClass('highlight');
	$('.table tr:odd').addClass('highlight2');
	
	$('#top').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 'normal');
	});
	$('.fix').click(function(){
		$('.active').removeClass('active');
		$(this).attr('class', 'active');
		
	});
	$('.fix2').click(function(){
		$('.active').removeClass('active');
		$('.has-sub').attr('class', 'active has-sub');
		
	});
})