$(function() {
	slideshow(0);

	$(window).resize(function() {
		$('img', '.g-slideshow, .g-header').each(function() {
			$(this).css( {
				'margin-top': -($(this).height() / 2)
			});
		});
	}).resize();
});

function slideshow(i) {
	$slideshow = $('.g-slideshow', '#page-home');
	var length = $('img', $slideshow).length;
	if(i >= length)
		i = 0;
	if(Modernizr.csstransitions) {
		$('img.shown', $slideshow).removeClass('shown');
		$('img:eq(' + i + ')', $slideshow).addClass('shown');
	} else {
		var prev = i - 1;
		if(prev < 0)
			prev = length - 1;
		$('img:eq(' + prev + ')', $slideshow).css( {
			'z-index': 0
		});
		//$('img:eq(' + prev + ')', $slideshow).fadeOut(5000);
		$('img:eq(' + i + ')', $slideshow).hide();
		$('img:eq(' + i + ')', $slideshow).css( {
			'z-index': 1
		});
		$('img:eq(' + i + ')', $slideshow).addClass('shown');
		$('img:eq(' + i + ')', $slideshow).fadeIn(5000, function() {
			$('img:eq(' + prev + ')', $slideshow).hide();
		});
	}
	i++;
	setTimeout(function() {
		slideshow(i);
	}, 10000);

}
