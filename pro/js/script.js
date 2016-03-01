$(document).ready(function(){
	$('.bteam').hide();
	$('.dteam').hide();
	$('.fteam').hide();
	$('.hteam').hide();
	$('.jteam').hide();
	$('.lteam').hide();
	
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
	});
	$('.poolx').click(function(){
		$('.active2').attr('class', 'pooly');
		$(this).attr('class', 'active2');
		$('.bteam').hide();
		$('.ateam').show();
	});
	$('.pooly').click(function(){
		$('.active2').attr('class', 'poolx');
		$(this).attr('class', 'active2');
		$('.ateam').hide();
		$('.bteam').show();
	});
	$('.poolc').click(function(){
		$('.active3').attr('class', 'poold');
		$(this).attr('class', 'active3');
		$('.dteam').hide();
		$('.cteam').show();
	});
	$('.poold').click(function(){
		$('.active3').attr('class', 'poolc');
		$(this).attr('class', 'active3');
		$('.cteam').hide();
		$('.dteam').show();
	});
	$('.poole').click(function(){
		$('.active4').attr('class', 'poolf');
		$(this).attr('class', 'active4');
		$('.fteam').hide();
		$('.eteam').show();
	});
	$('.poolf').click(function(){
		$('.active4').attr('class', 'poole');
		$(this).attr('class', 'active4');
		$('.eteam').hide();
		$('.fteam').show();
	});
	$('.poolg').click(function(){
		$('.active5').attr('class', 'poolh');
		$(this).attr('class', 'active5');
		$('.hteam').hide();
		$('.gteam').show();
	});
	$('.poolh').click(function(){
		$('.active5').attr('class', 'poolg');
		$(this).attr('class', 'active5');
		$('.gteam').hide();
		$('.hteam').show();
	});
		$('.pooli').click(function(){
		$('.active6').attr('class', 'poolj');
		$(this).attr('class', 'active6');
		$('.jteam').hide();
		$('.iteam').show();
	});
	$('.poolj').click(function(){
		$('.active6').attr('class', 'pooli');
		$(this).attr('class', 'active6');
		$('.iteam').hide();
		$('.jteam').show();
	});
	$('.poolk').click(function(){
		$('.active7').attr('class', 'pooll');
		$(this).attr('class', 'active7');
		$('.lteam').hide();
		$('.kteam').show();
	});
	$('.pooll').click(function(){
		$('.active7').attr('class', 'poolk');
		$(this).attr('class', 'active7');
		$('.kteam').hide();
		$('.lteam').show();
	});
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
	$('a').click(function(){
		$('x').show();
		$('y').hide();
		
	});
	
	$('b').click(function(){
		$('y').show();
		$('x').hide();
		
	});
	$('.yo').css('opacity', '0.6');
	$('.yo').mouseover(function(){
		$(this).fadeTo(100, 1, function(){
			$('.yo').not(this).fadeTo(100, 0.6);
		});
		$(this).css('transition', ': .5s ease-in');
		$(this).css('transform', 'scale(1.1)');
		$('.yo').not(this).css('transition', '');
		$('.yo').not(this).css('transform', '');
	});
	
	$('#qry').html('<?php echo $ans ?>');
	$('.in1').show();
	$('.in2').hide();
	
		$('.re1').css('background-color', 'blue');
		$('.re2').css('background-color', '#2b2937');
	$('.re1').click(function(){
		$('.in1').show();
		$('.in2').hide();
		$('.re2').css('background-color', '#2b2937');
		$('.re1').css('background-color', 'blue');
	});
	
	$('.re2').click(function(){
		$('.in2').show();
		$('.in1').hide();
		$('.re1').css('background-color', '#2b2937');
		$('.re2').css('background-color', 'blue');
		
	});
	$("#bars li .bar").each( function( key, bar ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});