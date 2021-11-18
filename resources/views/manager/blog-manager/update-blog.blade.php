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



        @foreach ($blog as $item)
        <form method="post" action="edite-update?save=1&id={!! $item->id !!}" enctype="multipart/form-data" >
                @csrf
        
        
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i>توجه</h4>
                    امکان ویرایش عکس وجود ندارد
                    <br>
                    <p>در زمان انتشار پست دقت بیشتر برای انتخاب تصویر داشته باشید</p>
                  </div>
        
                <label for="title">موضوع خبر را وارد کنید</label>
                <input value="{!! $item->title !!}" name="title" type="text" placeholder="تیتر خبر" style="width: 100%; height: 60px; text-align: center; font-size: 20px; color: #414141; font-weight: bold;">
                <code>شروع نقل قول با {و آخرش } </code>
                <textarea id="mytextarea" name="mytextarea">
                    {!! $item->text !!}
                </textarea>
                <input type="submit" class="btn btn-block btn-success btn-sm" value="انتشار خبر">
          </form>
        @endforeach


        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection