sliderInt = 1;
sliderNext = 2;

$(document).ready(function(){
	$('#imagg >img#1').fadeIn(500);
	
	$('#imgl').hide();
	$('#imgr').hide();
	startSlider();
});

function startSlider(){
	count=$('#imagg>img').size();
	loop=setInterval(function(){
		$('#imagg>img').fadeOut(500);
		if(sliderNext > count ){
			$('#imagg>img').fadeOut(500);
			sliderNext = 1;
			sliderInt = 1;
		}
		$('#imagg>img#' + sliderNext).fadeIn(1000);
		sliderInt = sliderNext;
		sliderNext = sliderNext + 1;
	}, 4000);
};

function prev(){
	newSlide = sliderInt - 1;
	showSlide(newSlide);
	
};

function next(){
	newSlide = sliderInt + 1;
	showSlide(newSlide);
};
function showSlide(id){
	stopLoop();
	if(id > count ){
			id = 1;
		}
		else if(id<1)
			id=count;
		$('#imagg>img').fadeOut(500);
		$('#imagg>img#' + id).fadeIn(1000);
		sliderInt = id;
		sliderNext = id + 1;
	startSlider();
};


function stopLoop(){
	window.clearInterval(loop);
	
};
$('#imagg>img').hover(function(){
	stopLoop();
}, function(){
	startSlider();
});