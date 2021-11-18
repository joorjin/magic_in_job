@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection


@section('active-dashbord')
    active
@endsection

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        داشبورد
        <small>نمای کلی</small>
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
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">اطلاعات آماری کل</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>

              <tr>
                <th>تاریخ</th>
                <th>بازدیدها</th>
                <th>بازدیدکنندگان</th>
              </tr>
              </thead>
              <tbody>
{{-- نمایش آمار --}}
               



            
              
              <?php
              $tedad = count($amar[3]);
              for ($i=0; $i < $tedad; $i++) { 

              
              ?>
              <tr>
                <td>{{ $amar[3][$i] }}</td>
                <td>{{ $amar[4][$i] }}</td>
                <td>{{ $amar[5][$i] }}</td>
              </tr>
              <?php
              }
              ?>


              {{-- <td>{{ $item->view}}</td>
              <td>{{ $item->token }}</td> --}}
            



              </tbody>
              
              <tfoot>
                <tr>
                  <th>کل</th>
                  <th>{{ $amar[2] }}</th>
                  <th>{{ $amar[1] }}</th>
                </tr>
              <tr>
                <th>تاریخ</th>
                <th>بازدیدها</th>
                <th>بازدیدکنندگان</th>
              </tr>
              </tfoot>


              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">اطلاعات هر بازدید کننده</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>تاریخ</th>
                <th>بازدیدها</th>
                <th>بازدیدکنندگان</th>
              </tr>
              </thead>
              <tbody>
{{-- نمایش آمار --}}
              


            @foreach ($amar[0] as $item)
            <tr>
              <td>{{ $item->created_zamanfa }}</td>
              <td>{{ $item->token}}</td>
              <td>{{ $item->view }}</td>
            </tr>
            @endforeach


              </tbody>
              
              <tfoot>
              <tr>
                <th>تاریخ</th>
                <th>بازدیدها</th>
                <th>بازدیدکنندگان</th>
              </tr>
              </tfoot>


              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  @endsection