$(document).ready(function () {

	$('#js-main-slider').pogoSlider({
		autoplay: false,
		autoplayTimeout: 5000,
		displayProgess: false,
		preserveTargetSize: false,
		targetWidth: 1000,
		targetHeight: 300,
		responsive: false
	}).data('plugin_pogoSlider');

	var transitionDemoOpts = {
		displayProgess: false,
		generateNav: false,
		generateButtons: false
	}

	        // PARALLAX JS
			function initParallax() {
				$('#home').parallax("60%", 100);
				$('#about').parallax("100%", 80);
				$('#project').parallax("80%", 60);
				$('#team').parallax("40%", 40);
				$('#contact').parallax("20%", 20);
				}
			  initParallax();

});