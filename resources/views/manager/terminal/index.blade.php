@extends('manager.layouts.master')
@section('title')
جادو در کسب و کار | پشتیبانی و خدمات وب
@endsection

@section('active-terminal')
    active
@endsection

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ترمینال
        <small>ترمینال</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="manager"><i class="fas fa-tachometer-alt"></i> ترمینال</a></li>
        <li class="active"> <!-- صفحه --> </li>
      </ol>
    </section>

    <!-- Main content -->

    <style>
        .all{
            background: #000;
            color: #22ff00;
            direction: ltr;
            width: 100%;
            height: 350px;
        }
        .all input{
            background: #000;
            color: #22ff00;
            direction: ltr;
            width: 100%;
            border: 0;
        }
        label{
            width: 100%;
        }
        input:focus {
    outline: none !important;
}
    </style>

    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <label for="text">
        <div class="all">
            @isset($command)
                <p>{{ $command }}</p>
                <br>
                <p><b style="color: #f00;">{{$response}}</b> {{ $buffer }}</p>
                <br>
            @endisset
            <form method="POST">
                @csrf
                <input type="text" id="text" name="command">
            </form>
        </div>
    </label>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
