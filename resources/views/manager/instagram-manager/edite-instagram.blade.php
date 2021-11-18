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
        ویرایش پست های اینستاگرام
        <small> پستی ای که میخواهید به روزرسانی کنید انتخاب کنید </small>
      </h1>




    <style>
        a{
            color: #000;
        }
        a .info-box{
            width: 200px;
            height: 200px;
            float: left;
            margin: 20px
        }
        a .info-box img{
            width: 100%;
            height: 100%;
        }
        .info-box .info-box-icon{
            height: 200px;
            width: 200px;
        }
    </style>
    
    
    @foreach ($instagram_list as $item )
        <a href="edite-update-instagram?id={!! $item->id !!}&save=0">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><img src="instagram_files/img_instagram/{!! $item->image1 !!}" alt="df"></span>
            </div>
        </a>
    @endforeach




        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection