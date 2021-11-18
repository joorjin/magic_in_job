@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection

@section('active-blog')
    active
@endsection

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        بلاگ
        <small>مدیریت بلاگ</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="manager"><i class="fas fa-tachometer-alt"></i> بلاگ</a></li>
        <li class="active"> <!-- صفحه --> </li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <h1>
            نوشتن مقاله جدید
            <small> میتوانید مقاله جدید را این جا بنویسید </small>
          </h1>
        </section>
    
        <!-- Main content -->
        <section class="content container-fluid">
    
          <!--------------------------
            | Your Page Content Here |
            -------------------------->

            <script src="bower_components/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
          tinymce.init({
          selector: "textarea",
          language : 'fa',
          extended_valid_elements : 'span',
        verify_html: true,
        height: 250,
        theme: 'modern',
        plugins: ['link emoticons image'],

        image_advtab: true,
        image_title: true,
        image_caption: true,
        relative_urls: false,
        theme_advanced_buttons1: "forecolor,backcolor,fontselect,fontsizeselect",

        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' },
        ],
    });
</script>
    
    
    <style>
        form{
            margin-top: -150px;

        }
      input[type="file"] {    
        display: none;
      }
      .form-label-news-write{
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        width: 100%;
        text-align: center;
        background: #009ece;
        color: #fff;
      }




      .insta-form{
              width: 100%;
              margin-top: -100px
            }
            .insta-form div{
              width: 33%;
              height: 120px;
              text-align: center;
              color: #ff5757;
              font-weight: bolder;
              float: right;
              margin-bottom: 20px;
            }
            .insta-form div span{
              display: block;
            }
            .insta-form div label input{
              display: none;
            }
            .insta-form div label img{
              width: 100px;
              height: 100px;
               
            }
    </style>



        @foreach ($instagram as $item)
        <form method="post" action="edite-update-instagram?save=1&id={!! $item->id !!}" enctype="multipart/form-data" class="insta-form ">
                @csrf

                <div>
                  <span>عکس اول</span>
                <label for="img1"><input type="file" num="1" name="img1" id="img1" class="imginsta" value="{{ $item->image1 }}"> <img id="imgshow1" src="instagram_files/img_instagram/{{ $item->image1 }}" alt=""> </label>  
              </div>
              
              <div>
                <span>عکس دوم</span>
                
                <label for="img2"><input type="file" num="2" name="img2" id="img2" class="imginsta"> <img id="imgshow2" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image2); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس سوم</span>
                <label for="img3"><input type="file" num="3" name="img3" id="img3" class="imginsta"> <img id="imgshow3" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image3); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس چهارم</span>
                <label for="img4"><input type="file" num="4" name="img4" id="img4" class="imginsta"> <img id="imgshow4" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image4); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس پنجم</span>
                <label for="img5"><input type="file" num="5" name="img5" id="img5" class="imginsta"> <img id="imgshow5" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image5); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس ششم</span>
                <label for="img6"><input type="file" num="6" name="img6" id="img6" class="imginsta"> <img id="imgshow6" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image6); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس هفتم</span>
                <label for="img7"><input type="file" num="7" name="img7" id="img7" class="imginsta"> <img id="imgshow7" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');}else{echo($item->image7); } ?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس هشتم</span>
                <label for="img8"><input type="file" num="8" name="img8" id="img8" class="imginsta"> <img id="imgshow8" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');} else{echo($item->image8); }?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس نهم</span>
                <label for="img9"><input type="file" num="9" name="img9" id="img9" class="imginsta"> <img id="imgshow9" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');} else{echo($item->image9); }?>" alt=""> </label>  
              </div>

              <div>
                <span>عکس دهم</span>
                <label for="img10"><input type="file" num="10" name="img10" id="img10" class="imginsta"> <img id="imgshow10" src="instagram_files/img_instagram/<?php if($item->image2 == ""){echo('emp.png');} else{echo($item->image10); }?>" alt=""> </label>  
              </div>
  
        
                <input value="{!! $item->text !!}" name="text" type="text" placeholder="تیتر خبر" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #414141; font-weight: bold;">
                <code>شروع نقل قول با {و آخرش } </code>
                <input type="submit" class="btn btn-block btn-success btn-sm" value="انتشار خبر">
          </form>
        @endforeach
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
        
        
        
          $(".imginsta").change( function() {
            //Get count of selected files
            var numimg = $(this).attr("num");
            var countFiles = $(this)[0].files.length;
            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                //loop for each file selected for uploaded.
                for (var i = 0; i < countFiles; i++) 
                {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                    var img = e.target.result;
                    var idimg = "#imgshow"+numimg;
                    $(idimg).attr("src", img);
                  }
                  reader.readAsDataURL($(this)[0].files[i]);
                }
          });
        });
        
        </script>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection