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
            margin-top: -150px
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
    </style>
      <form method="post" action="save-blog" enctype="multipart/form-data" >
        @csrf
        <label class="form-label-news-write" for="customFile">
          عکس برای مقاله انتخاب کنید <i class="fas fa-cloud-upload-alt"></i>
              <label for="title">
          @error('image')
          <small class="label pull-left bg-red" style="text-align: right;"> {{$message}} </small>
          @enderror
        </label>
        </label>
        <input type="file" name="image" id="customFile" />
    
    
    
        <label for="title">موضوع مقاله را وارد کنید 
          @error('title')
          <small class="label pull-left bg-red" style="text-align: right;"> {{$message}} </small>
          @enderror
        </label>
        <input name="title" type="text" placeholder="تیتر مقاله" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #414141; font-weight: bold;">

        <label for="mytextarea">
          @error('mytextarea')
          <small class="label pull-left bg-red" style="text-align: right;"> {{$message}} </small>
          @enderror
          <code>شروع نقل قول با {و آخرش } </code>
        </label>
        <textarea id="mytextarea" name="mytextarea"></textarea>

        <label for="title">دسته بندی های مقاله را انتخاب کنید 
          @error('tag')
          <small class="label pull-left bg-red" style="text-align: right;"> {{$message}} </small>
          @enderror
        </label>
        <input name="tag" type="text" placeholder="تگ مورد نظر" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #414141; font-weight: bold;">
        

        <input type="submit" class="btn btn-block btn-success btn-sm" value="انتشار مقاله">
      </form>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  @endsection