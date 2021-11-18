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
        اینستاگرام
        <small>مدیریت اینستاگرام</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="manager"><i class="fas fa-tachometer-alt"></i> داشبورد</a></li>
        <li class="active"> <!-- صفحه --> </li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <h1>
            نوشتن پست جدید
            <small> میتوانید پست جدید را این جا بنویسید </small>
          </h1>
        </section>
    
        <!-- Main content -->
        <section class="content container-fluid">
    

          <style>
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












          <!--------------------------
            | Your Page Content Here |
            -------------------------->
            <form action="save-insta" method="post" class="insta-form" enctype="multipart/form-data">
              @csrf
              

              <div>
                <span>
                  عکس اول
                  @error('img1')
                  <code> {{$message}} </code>
                  @enderror
                </span>

                <label for="img1"><input type="file" num="1" name="img1" id="img1" class="imginsta"> <img id="imgshow1" src="img/upload.png" alt=""> </label>  
              </div>
              
              <div>
                <span>عکس دوم</span>
                <label for="img2"><input type="file" num="2" name="img2" id="img2" class="imginsta"> <img id="imgshow2" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس سوم</span>
                <label for="img3"><input type="file" num="3" name="img3" id="img3" class="imginsta"> <img id="imgshow3" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس چهارم</span>
                <label for="img4"><input type="file" num="4" name="img4" id="img4" class="imginsta"> <img id="imgshow4" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس پنجم</span>
                <label for="img5"><input type="file" num="5" name="img5" id="img5" class="imginsta"> <img id="imgshow5" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس ششم</span>
                <label for="img6"><input type="file" num="6" name="img6" id="img6" class="imginsta"> <img id="imgshow6" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس هفتم</span>
                <label for="img7"><input type="file" num="7" name="img7" id="img7" class="imginsta"> <img id="imgshow7" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس هشتم</span>
                <label for="img8"><input type="file" num="8" name="img8" id="img8" class="imginsta"> <img id="imgshow8" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس نهم</span>
                <label for="img9"><input type="file" num="9" name="img9" id="img9" class="imginsta"> <img id="imgshow9" src="img/upload.png" alt=""> </label>  
              </div>

              <div>
                <span>عکس دهم</span>
                <label for="img10"><input type="file" num="10" name="img10" id="img10" class="imginsta"> <img id="imgshow10" src="img/upload.png" alt=""> </label>  
              </div>

              <hr>
              <label for="caption">
              @error('caption')
              <small class="label pull-left bg-red" style="text-align: right; margin-top:120px;"> {{$message}} </small>
              @enderror
            </label>
              <input id="title" name="title" type="text" placeholder=" موضوع" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #0c8f00; font-weight: bold;">

              <input id="caption" name="caption" type="text" placeholder=" کپشن پست" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #414141; font-weight: bold;">

              <input type="submit" class="btn btn-block btn-success btn-sm" value="انتشار مقاله">
            </form>
      

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