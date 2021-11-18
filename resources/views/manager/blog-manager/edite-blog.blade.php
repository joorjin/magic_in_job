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
        ویرایش مقالات
        <small> مقاله ای که میخواهید به روزرسانی کنید انتخاب کنید </small>
      </h1>




    <style>
        a{
            color: #000;
        }
        .info-box{
            height: 200px;
        }
        .info-box img{
            width: 100%;
            height: 100%;
        }
        .info-box .info-box-icon{
            height: 200px;
            width: 200px;
        }
        .info-box-content h2 p{
            line-height: 30px;
            font-size: 18px;
            font-family: 'Courier New', Courier, monospace;
            text-align: center
        }
    </style>
    
    
    @foreach ($blog_list as $item )
        <a href="edite-update-blog?id={!! $item->id !!}&save=0">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><img src="blog_files/img_blog/{!! $item->image !!}" alt="df"></span>
                <div class="info-box-content">
                    <code>تیتر خبر:</code>
                <h2> <p> {!! $item->title !!} </p> </h2>
                </div>
            </div>
        </a>
    @endforeach




        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection