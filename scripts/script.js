(function(){
    var $w = $(window);
	var $circ = $('.animated-circle');
	var $m = $('.letter-e');
	var $d = $('.letter-d');
	var $i = $('#letter-2');
	var $odd = $('.st0');
	var $even = $('.st1');
	var $progCount = $('.progress-count');
	var $prog2 = $('.progress-indicator-2');
 

	var wh, h, sHeight;

	function setSizes(){
		wh = $w.height() ;
		h = $('body').height() ;
		sHeight = h - wh;
	}

	setSizes();

	$w.on('scroll', function(){
		var perc = Math.max(0, Math.min(1, $w.scrollTop()/sHeight));
		updateProgress(perc);
	}).on('resize', function(){
		setSizes();
		$w.trigger('scroll');
	});



	function updateProgress(perc){
		var circle_offset = 126 * perc;
		$circ.css({
			"stroke-dashoffset" : 126 - circle_offset
		});
		$progCount.html(Math.round(perc * 100) + "%");

		$prog2.css({width : perc*100 + '%'});
		
		
		
		var circle_offset = 225 * perc;
		$m.css({"stroke-dashoffset" : 225 - circle_offset});

		
		
		
		
		
		var circle_offset = 233 * perc;
		$d.css({
			"stroke-dashoffset" : 233 - circle_offset
		});
		$progCount.html(Math.round(perc * 100) + "%");

		$prog2.css({width : perc*100 + '%'});
		
		
		var circle_offset = 160 * perc;
		$i.css({
			"stroke-dashoffset" : 160 - circle_offset
		});
		$progCount.html(Math.round(perc * 100) + "%");

		$prog2.css({width : perc*100 + '%'});

		
		var circle_offset = 80 * perc;
		$odd.css({
			"stroke-dashoffset" : 80 - circle_offset
		});
		$progCount.html(Math.round(perc * 100) + "%");

		$prog2.css({width : perc*100 + '%'});

		
		var circle_offset = 130 * perc;
		$even.css({
			"stroke-dashoffset" : 130 - circle_offset
		});
		$progCount.html(Math.round(perc * 100) + "%");

		$prog2.css({width : perc*100 + '%'});
	}


	
}());