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
        حذف خبر
        <small> خبری که میخواهید به حذف کنید انتخاب کنید </small>
      </h1>




      <!-- Main content -->

    <style>
        a{
            color: #000;
        }
        .info-box{
            width: 200px;
            height: 200px;
            float: left;
            margin: 20px
        }
        .info-box img{
            width: 100%;
            height: 100%;
        }
        .info-box .info-box-icon{
            height: 200px;
            width: 200px;
        }

    </style>


    <script type="text/javascript">
    function confirmed(id){
        var check = confirm("آیا از حذف این پست اطمینان دارید ؟ | این یک عملیات غیر قابل بازگشت میباشد");
        if (check == 1){
            window.location="delete-list-instagram?id="+id+"&save=1";

        }
        else{
            alert("حذف پیام لغو شد");
        }
    }
    </script>

    <section class="content container-fluid">
        @foreach ($instagram_list as $item )
    <a href="#" onclick="confirmed({!! $item->id !!})">
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