@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection


@section('active-dashbord')
    active
@endsection

@section('content')

<style>
  .widget-user-2 .widget-user-image > img{
    width: 80px;
    height: 80px;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        پروفایل
        <small>اطلاعات شخصی شما</small>
      </h1>
      <ol class="breadcrumb">
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="col-md-2"><!-- کناره --></div>
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            @foreach (session('user'); as $item)
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="img_admins/{{ $item->image }}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{ $item->name }}</h3>
              <h5 class="widget-user-desc"> مدیر کل سایت </h5>

              @if ($item->image == 0)
              <article class="form-label-news-write" for="customFile">
                عکس پروفایل خود را آپلود کنید 
                <span class="pull-left badge bg-red">ضروری</span>
              </article>
              @endif


            </div>
            <?php
             $id = $item->id;
            ?>
            @endforeach
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li>
                  <form action="profile-edit" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $id }}" name="id">
                    <div class="input-group margin" >
                      <label for="image">انتخاب عکس پروفایل</label>
                      <input type="file" class="form-control" name="image" id="customFile">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-flat">ارسال</button>
                          </span>
                    </div>
                  </form>
                </li>
                {{-- <li>
                  <b>شماره خود را تایید کنید</b>
                  <div class="form-group">
                    <label>موبایل</label>
    
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" placeholder="09123456789">
                    </div>
                    <!-- /.input group -->
                  </div>
                </li> --}}
                {{-- <li><a href="#">کار <span class="pull-left badge bg-aqua">5</span></a></li>
                <li><a href="#">هدف <span class="pull-left badge bg-green">12</span></a></li>
                <li><a href="#">فالوور <span class="pull-left badge bg-red">842</span></a></li> --}}
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-2"><!-- کناره --></div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @endsection