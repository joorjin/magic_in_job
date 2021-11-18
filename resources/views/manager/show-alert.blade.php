@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection

@section('active-blog')
    active
@endsection

@section('content')






            <script>
                randomNumber = 2000 + Math.floor(Math.random() * 8000);
                setTimeout(function(){
                  
                  window.location="manager";
                }, randomNumber)
               
              </script>
              <div class="content-wrapper">
                  <!-- Content Header (Page header) -->
                  <section class="content-header">
                    <h1>
                      عملیات موفق
                    </h1>
                  </section>
              
                  <!-- Main content -->
                  <section class="content container-fluid">
              
              
                  <div class="small-box bg-green">
                      <div class="inner">
                      <h3><i class="fa fa-refresh fa-spin"></i><sup style="font-size: 20px">{!! $message !!}</sup></h3>
                      <br>
                      <b>درحال انتقال به صفحه اصلی</b>
                      <p>لطفا منتظر بمانید</p>
                      <br>
                      </div>
                      <div class="icon">
                      <i class="fas fa-check-circle"></i>
                      </div>
                      
                  </div>






        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection