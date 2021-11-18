@extends('layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection

@section('style')
<link rel="stylesheet" href="css/gallery.css">
@endsection

@section('content')


<!-- Start Banner -->
 <div class="ulockd-home-slider">
     <div class="container-fluid">
         <div class="row">
             <div class="pogoSlider" id="js-main-slider">
                 <div class="pogoSlider-slide">
<!-- HOME -->
                     <section id="homeback" class="parallax-section">
                         <div class="overlay">
                             <div class="container">
                                 <div class="row">
                                         <div class="col-md-8 col-sm-12">
                                             <div class="homeback-text">
                                                 <h1 >همه چی از یه وبسایت خوب شروع میشه!</h1>
                                                 <p>وبسایت مثل یک کارمند میمونه که نه حقوق میگیره و نه خسته میشه!</p>
                                             </div>
                                         </div>
                                 </div>
                             </div>
                         </div>
<!-- Video -->
                            <video controls autoplay loop muted preload="auto" autoplay="autoplay" loop="loop" webkit-playsinline="" id="videoHeader" class="videoHeader" >
                                <source  src="videos/video.mp4" type="video/mp4">
                            </video>
                     </section>
                 </div>
             </div>
<!-- .pogoSlider -->
         </div>
     </div>
 </div>
<!-- End Banner -->
<!-- end heder -->


<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">چرا به وبسایت نیاز داریم؟</p>
                            <h2><span class="theme_color">پاسخ همین الان تو دستاته!</span> تعجب کردی ؟ </h2>
                            <p class="large"> همین گوشی که تو دستته رو میگم.</p>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section dark_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 text_align_center padding_0">
                    <div class="full">
                        <img class="img-responsive" src="images/loading.gif" alt="برنامه نویسی" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 white_fonts layout_padding padding_left_right">
                    <h3 class="small_heading"> در عصری زندگی میکنیم که<br>تکنولوژی جزء جدایی ناپذیر از زندگیمون شده</h3>
                    <p style="line-height: 25px;"> همه ما به نوعی از تکنولوژی استفاده می کنیم ؛ خرید میکنیم ، پول انتقال میدیم و <b style="color: #f2184f;">بعضیامون هم پول در میاریم!</b>
                        <br>  جالب شد نه؟ خب! با همه این صحبتا متوجه میشیم که <b style="color: #f2184f;">اگر کسب و کار شما اینترنتی نیست ، متاسفانه شما صاحب
                             یک کسب و کار  از رده خارج و رو به زوال هستید ، اگر کسب و کارتان در اینترنت نباشد به زودی از بازار هم حذف خواهد شد !</b> اما جای نگرانی نیست من با هزینه بسیار مناسب و
                              کمترین زمان ممکن بهت کمک میکنم تا کسب و کار اینترنی موفقی داشته باشی . </p>
                </div>
            </div>
        </div>
    </div>



    <!-- end section -->

    <!-- مکان اسکرول خدمات -->
	<div id="Services">
        <br>
        <br>
    </div>
	<!-- section -->
    <div class="section layout_padding" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">02</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">خدمات ما</p>
                            <h2><span class="theme_color">چه کمکی میتونم بهت بکنم؟</span>لیست زیر بهت کمک میکنه تا کسب و کارت رو شروع کنی یا بهبود ببخشی .</h2>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
<a href="about.html#hamkari">
			<div class="row margin-top_30">

			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img class="gif1" width="75" height="75" src="images/loading.gif" alt="طراحی سایت">
					</div>
					<div class="full">
					   <h4>طراحی سایت</h4>
					</div>
					<div class="full">
					  <p>
                        <b style="color: #0062ff;">اگر هنوز وبسایت ندارین و میخواین کسب و کاری رو را اندازی کنید این قسمت مناسب شماست  </b>
                        <br>
                          طراحی سایت با بهترین کیفیت و جدید ترین تکنولوژیهای روز دنیا
                        به همراه ظاهر جذاب و سرعت فوقالعاده.
                        <hr>
                        <b style="color: #f2184f;">به همراه یک ماه پشتیبانی فنی و بهینه سازی (سئو) رایگان </b>
                      </p>
					</div>
				 </div>
			   </div>

			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img class="gif2" width="75" height="75" src="images/loading.gif" alt="سئو و بهینه سازی">
					</div>
					<div class="full">
                        <h4>سئو و بهینه سازی</h4>
					</div>
					<div class="full">
                        <p>
                            <b style="color: #0062ff;">اگر وبسایت دارین ، ولی بازدیدکننده و مشتری کم یا رتبه گوگل نا مناسبی دارین این قسمت مناسب شماست  </b>
                            <br>
                             بهینه سازی وبسایت و بهبود رتبه گوگل که باعث افزایش مستمر ترافیک وبسایت شما خواهد شد
                            <hr>
                            <b style="color: #f2184f;">  در کم ترین  زمان  و بازدهی فوقالعاده به همراه ماندگاری  مناسب</b>
                          </p>
					</div>
				 </div>
			   </div>


			   <div class="col-sm-6 col-md-4">
                <div class="service_blog">
                   <div class="service_icons">
                      <img class="gif3" width="75" height="75" src="images/loading.gif" alt="خدمات و پشتیبانی سایت">
                   </div>
                   <div class="full">
                       <h4>خدمات و  پشتیبانی  سایت</h4>
                   </div>
                   <div class="full">
                       <p>
                           <b style="color: #0062ff;"> اگر وب سایت دارید و به نگهداری نیاز این قسمت مناسب شماست </b>
                           <br>
                            بعد از پباده سازی سایت، نیاز به پشتیبانی سایت هم خواهید داشت.
                            زیرا اگر وب سایت دچار مشکل شود ارائه خدمات هم با مشکل مواجه میشود    .
                           <hr>
                           <b style="color: #f2184f;">پشتیبانی سایت خود را بدون هیچ گونه نگرانی تماما به ما بسپارید      . </b>

                         </p>
                   </div>
                </div>
              </div>



<!--
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/learn.gif" alt="#">
                    </div>
                    <div class="full">
                        <h4>آموزش بازاریابی  و فروش</h4>
					</div>
					<div class="full">
                        <p>
                            <b style="color: #0062ff;"> اگر میخوای در مورد دیجیتال مارکتینگ چیزی هم یاد بگیری این قسمت مناسب شماست </b>
                            <br>
                                مطالبی که هر فروشنده ای باید بداند تا به فروش خوب برسد
                                بهت یاد میدم از جملات و کلمات جادویی استفاده کنی که تو فروش بترکونی .
                            <hr>
                            <b style="color: #f2184f;">  به یک بیزینسمن خوب تبدیل شو و خودت محصولت رو بفروش   . </b>

                          </p>
					</div>
				 </div>
			   </div>

			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="img/digital-marketing.gif" alt="#">
					</div>
					<div class="full">
                        <h4>دیجیتال مارکتینگ</h4>
					</div>
					<div class="full">
                        <p>
                            <b style="color: #0062ff;"> اگر کسب و کار آنلاینی داری که فروش و درآمد خوبی نداره این قسمت مناسب شماست </b>
                            <br>
                                 بهت کمک میکنم در زمان کمی از رقیبات جلو بزنی و یک غول در کسب و کار خودت بشی همچنین فروشت رو متحول کنی.
                            <hr>
                            <b style="color: #f2184f;">  به یک بیزینسمن خوب تبدیل شو و خودت محصولت رو بفروش   . </b>

                          </p>
					</div>
				 </div>
               </div>



               <div class="col-sm-6 col-md-4">
                <div class="service_blog">
                   <div class="service_icons">
                      <img width="75" height="75" src="img/image_processing20200306-6046-1kqzncv.gif" alt="#">
                   </div>
                   <div class="full">
                       <h4>مشاوره ی کسب و کار های آنلاین</h4>
                   </div>
                   <div class="full">
                       <p>
                           <b style="color: #0062ff;"> اگر نیاز به هر گونه مشاوره در حوزه کسب و کار های آنلاین  و یا درباره خدمات مادارین این قسمت مناسب شماست </b>
                           <br>
                           به عنوان کارآفرین، مدیر و یا فرد علاقمند به توسعه کسب کار (اینترنتی) میتوانید 30 دقیقه مشاوره تلفنی رایگان با پر کردن فرم مربوطه دریافت کنید.
                           <hr>
                           <b style="color: #f2184f;">بدون هزینه و در تمام ساعات شبانه روز

                         </p>
                   </div>
                </div>
              </div> -->


      </div>
</a>
        </div>
    </div>
	<!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">03</p>
						   </div>
						   <div class="right">
                            <h2><span class="theme_color">آخرین مقالات منتشر شده</span> در وبسایت </h2>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="artic" id="artic">

        <div class="posts">
            <?php $i=0; ?>
            @foreach ($index['blog'] as $item)
            <a href="blog-post?id={{ $item->id }}">
                <article>
                    <img srchide="{{ $item->image }}" id="imgblog-{{ $i }}" src="images/loading.gif" alt="{{ $item->title }}">
                    <h2> {{ $item->title }} </h2>
                </article>
            </a>
            <?php $i++; ?>
            @endforeach
        </div>
    </section>


	<div id="insat">
        <br>
    </div>

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">04</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">در پیج اینستاگرام ما چه؟</p>
                            <h2><span class="theme_color">آخرین پست های ما</span> در اینستاگرام </h2>
                            <p class="large"> به همراه لینک مستقیم</p>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram">
        <div class="gallery">
            <?php $i=0; ?>
            @foreach ($index['instagram'] as $item)
                <a href="insta-post?id={{ $item->id }}">
                    <section class="post">
                        <article id="gallery-art1">
                            <div class="hover">
                                <div class="hover">
                                <img srchide="{{ $item->image1 }}" id="imginsta-{{ $i }}" src="images/loading.gif" alt="{{ $item->title }}">
                            </div>
                        </article>
                    </section>
                </a>
                <?php $i++; ?>
            @endforeach

        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <!-- <div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <div class="left">
                         <p class="section_count">03</p>
                       </div>
                       <div class="right">
                        <p class="small_tag">  نمونه کار های ما</p>
                        <h2><span class="theme_color"> نمونه ای از خدمات  </span> و محصولاتی که به سرانجام رسانده ایم .  </h2>
                        <p class="large">  موفقیت شما باعث افتخار و خرسندی ماست.  </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-top_30">
            <div class="col-lg-12 margin-top_30">
                <div id="demo" class="carousel slide" data-ride="carousel">


                    <div class="w3-content w3-display-container">
                        <img class="mySlides" src="nemoone/unnamed.gif" style="width:100%">
                        <img class="mySlides" src="nemoone/icon-repair.gif" style="width:100%">


                                         <a class="carousel-control-prev" href="#demo" data-slide="prev" onclick="plusDivs(-1)">
                                            <span class="carousel-control-prev-icon" ></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span class="carousel-control-next-icon" onclick="plusDivs(1)"></span>
                                        </a>
                      </div>


                      <script>
                      var slideIndex = 1;
                      showDivs(slideIndex);

                      function plusDivs(n) {
                        showDivs(slideIndex += n);
                      }

                      function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        if (n > x.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = x.length}
                        for (i = 0; i < x.length; i++) {
                          x[i].style.display = "none";
                        }
                        x[slideIndex-1].style.display = "block";
                      }
                      </script>




                </div>
            </div>

            <div class="col-lg-12">
                <p style="text-align: center; font-size: 30px;"> برای مشاهده و توضیحات بیشتر کلیک کنید.<br>
                    <br> </p>
            </div>

            <div class="col-lg-12">
                <div class="full center">
                    <a href="about.html" class="hvr-radial-out button-theme">دیدن ادامه ></a>
                </div>
            </div>

        </div>
    </div>
</div>	end section -->


  <div id="honor">

  </div> <br>
	<!-- section -->
    <!-- <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left white_fonts">
						   <div class="left">
						     <p class="section_count">04</p>
						   </div>
						   <div class="right">
						    <h2> تعداد پروژه های انجام شده <span class="theme_color">به همراه آمار ها دیگر</h2>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30 white_fonts">
                    <p>آمار های زیر تنها بخشی از افتخارات ما می باشد.
                         احتمالا این جا هستی چون به دنبال ساختن آینده ای بهتر و درآمد های بالاتر از چیزی که الان داری
                        هستی. درست است که سخت کوشی مهم است اما این همه ماجرا نیست. مردم شبانه روز در تلاش هستند اما پایان سال اگر اوضاع مالی وخیم تر نشده باشد قطعا بهتر نیز نشده است. یک تکه از پازل ظاهرا گم شده است. مگرنه؟

                        احتمالا بله چون برای رسیدن به موفقیت های مالی سطح بالا به یک استراتژی بهتر و دقیق تر نیازمندیم.</p>
                </div>

            </div>
			<div class="row margin-top_30 counter_section">
			   <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">

      <h2 class="timer count-title count-number" data-to="1" data-speed="1500"></h2>
       <p class="count-text">تعداد وب سایت های تولید شده</p>
    </div>
	        </div>
              <div class="col-sm-12 col-md-4">
               <div class="counter margin-top_30">

      <h2 class="timer count-title count-number" data-to="1" data-speed="1500"></h2>
      <p class="count-text">تعداد خدمات و پشتیبانی وب</p>
    </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="counter margin-top_30">

      <h2 class="timer count-title count-number" data-to="0" data-speed="1500"></h2>
      <p class="count-text">تعداد بهینه سازی و سئو</p>
    </div></div>

    <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">

      <h2 class="timer count-title count-number" data-to="6" data-speed="2500"></h2>
       <p class="count-text">سال های فعالیت </p>
    </div>
	        </div>

			</div>

        </div>
    </div> -->
	<!-- end section -->

    <!-- section -->
    <!-- <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">05</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">لورم ایپسوم</p>
                            <h2><span class="theme_color">لورم ایپسوم متن ساختگی</span> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h2>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="team_slider" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center">
										     <h3>لورم ایپسوم متن</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
										   </div>
										</div>
                                    </div>

                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center">
										     <h3>لورم ایپسوم متن</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
										   </div>
										</div>
                                    </div>

                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center">
										     <h3>لورم ایپسوم متن</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
										   </div>
										</div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>

                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>

                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center">
										      <img src="img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>
										   </div>
										   <div class="full text_align_center"></div>
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>

                                </div
                            </div>
                        </div>

                        <div class="bullets">

  <ul class="carousel-indicators">
    <li data-target="#team_slider" data-slide-to="0" class="active"></li>
    <li data-target="#team_slider" data-slide-to="1"></li>
  </ul>
						</div>

                    </div>
                </div>

            </div>
        </div> -->

	<!-- end section -->

@endsection

@section('script')
{{-- LOADE SCRIPT --}}
 <script>
    $(document).ready(function () {
        var video = document.getElementById("videoHeader");
        video.onloadeddata = function() {
                    $('.gif1').attr("src","img/web-disain.gif");
                    $('.gif2').attr("src","img/SEO.gif");
                    $('.gif3').attr("src","img/WEBSITE-DEVELOPMENT.gif");
                    $('.img-responsive').attr("src","img/img5.jpg");


                // blog load

                    for (let i = 0; i < 10; i++) {
                            var srchide = $('#imgblog-'+i).attr("srchide");
                            $('#imgblog-'+i).attr("src","blog_files/img_blog/"+srchide);
                    }
                    for (let i = 0; i < 6; i++) {
                                var srchide = $('#imginsta-'+i).attr("srchide");
                                $('#imginsta-'+i).attr("src","instagram_files/img_instagram/"+srchide);
                    }



        };


        });

    // $('#imginsta').attr("src","";
</script>
@endsection
