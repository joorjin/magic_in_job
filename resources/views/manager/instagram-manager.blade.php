@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection

@section('active-instagram')
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
        <div class="small-box bg-green">
            <div class="inner">
              <h3>انتشار پست جدید</h3>
              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-plus-square"></i>
            </div>
            <a href="/write-instagram" class="small-box-footer">
              <i class="fa fa-arrow-circle"></i>  نوشتن پست
            </a>
          </div>
    
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>ویرایش پست ها ها</h3>
              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-edit"></i>
            </div>
            <a href="/edite-instagram" class="small-box-footer">
              <i class="fa fa-arrow-circle-right"></i>  ویرایش پست 
            </a>
          </div>
    
          <div class="small-box bg-red">
            <div class="inner">
              <h3>حذف پست ها</h3>
              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-backspace"></i>
            </div>
            <a href="/delete-list-instagram?save=0" class="small-box-footer">
              <i class="fa fa-arrow-circle-right"></i>  حذف پست ها 
            </a>
          </div>

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  @endsection