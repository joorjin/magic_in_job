


@extends('layouts.master')
@section('title')
نمایش پست
@endsection

@section('style')
<link rel="stylesheet" href="css/insta-slide.css?=v=1.1.3">
@endsection




@section('content')

 <br><br><br><br><br><br><br>
<!-- section -->



<div class="section layout_padding insta-post-all">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <div class="left">
                         <p class="section_count"><i class="fa fa-instagram"></i></p>
                       </div>
                       <div class="right">
                        <p class="small_tag"> <br>
                            در این صفحه میتونی بدون وارد شدن به اینستاگرام</p>
                        <h2><span class="theme_color">پست ها و مطالب آموزشی  که  در اینستاگرام منتشر میکنیم رو مطالعه کنی</span> </h2>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

@foreach ($instagram as $item)
<div class="insta-post-show">
    <div class="slide-insta">


      <?php if($item->image1 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image1 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image2 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image2 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image3 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image3 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image4 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image4 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image5 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image5 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image6 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image6 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image7 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image7 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image8 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image8 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image9 != ""){ ?> <img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image9 !!}" style="width:100%"> <?php } ?>
      <?php if($item->image10 != ""){ ?><img class="sslides" alt="{{ $item->title }}" src="instagram_files/img_instagram/{!! $item->image10 !!}" style="width:100%"> <?php } ?>

        <button class="left-btn" onclick="plusDivs(-1)">&#10094;</button>
        <button class="right-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <div class="text">
      <p>
      {!! $item->text !!}
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      </p>
    </div>
</div>
@endforeach
<hr>


<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("sslides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
    </script>
    <script src="js/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        var bodysize= $("body").css("height");
        var textboxsiz= $(".text").css("height");

        if (bodysize < "1250px") {
          if (textboxsiz > "415px") {
          $(".insta-post-show").css("height", textboxsiz);
          }
        }

      });
    </script>

@endsection
