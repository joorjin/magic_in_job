






<!-- Start Footer -->
<footer class="footer-box" id="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-bottom_30">
                <div class=" logo-footer" style="background: #00000000">
                    <img id="logoforter" src="img/logo.png" alt="magic in job"  />
                    <div class="text">
                        <b>جادو در کسب و کار</b>
                        <p style="color: #0062BA;"> خدمات و پشتیبانی وب </p>
                    </div>
                </div>
            </div>
           <div class="col-xl-6 white_fonts">
                <div class="row">
                <div class="col-md-12 white_fonts margin-bottom_30">
                   <h3>ما کجا هستیم؟</h3>
                </div>
                    <div class="col-md-4">
                        <div class="full icon">
                            <img src="images/social1.png" alt="مکان">
                        </div>
                        <div class="full white_fonts">
                            <p>ما در تمام نقاط دنیا با شما هستیم</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="full icon">
                            <img src="images/social2.png" alt="ایمیل">
                        </div>
                        <div class="full white_fonts">
                            <p>info@ariawebgostar.ir</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="full icon">
                            <img src="images/social3.png" alt="تلفن">
                        </div>
                        <div class="full white_fonts">
                            <p style="direction:ltr;"><a style="color: #0062ff;" href="tel:+989150567825">+989150567825</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <ul class="full social_icon margin-top_20">
                            <li><a href="https://www.instagram.com/magic_in_job"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/magic_in_job"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/azimi-dev"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://t.me/azimi_dev"><i class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

             <div class="col-xl-6 white_fonts">
                <div class="row">
                   <div class="col-md-6">
                     <div class="footer_blog footer_menu">
                        <h3>منو</h3>
                        <ul>
                          <li><a href="/">صفحه اصلی</a></li>
                          <br>
                          <li><a href="/blog">بلاگ</a></li>
                          <br>
                          <li><a href="/insta"> اینستاگرام ما</a></li>
                          <br>
                          <li><a href="/about">درباره ما</a></li>
                        </ul>
                     </div>
                     <br>

                   </div>
                   <div class="col-md-6">
                     <div class="footer_blog full">
                         <h3>عضویت در خبر نامه</h3>
                         <div class="newsletter_form">
                            <form action="newsletters" method="POST">
                                @csrf
                                @error('email')
                                <small class="label pull-left bg-red" style="text-align: right;"> {{$message}} </small>
                                @enderror
                               <input type="email" placeholder="ایمیل شما" name="email" required />
                               <button>ارسال</button>
                            </form>
                         </div>
                     </div>
                   </div>
                </div>
             </div>

        </div>

    </div>
</footer>
<!-- End Footer -->

<div class="footer_bottom" style="text-align: center;" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp" "> تمامی حقوق محفوظ است. <i class="fa fa-copyright"></i></p>
                <ul class="bottom_menu" >
                    <!-- <li><a style="color: #f2184f;" href="#"> قوانین و مقررات</a></li>
                    <li><a style="color: #f2184f;" href="#">حریم خصوصی</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
    <a href="#" id="scroll-to-top" class="hvr-radial-out" style="z-index: 5;"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/logo.js"></script>


    <script>
        setInterval(function(){
            var i = $("#artic").scrollLeft();
            i--;
            $("#artic").scrollLeft(i);
            if (i < $("#artic").scrollLeft()) {
                $("#artic").scrollLeft(0);
            }
            }, 30);

    </script>
<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>




@yield('script')





	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H65XZC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


</div>
</body>

</html>
