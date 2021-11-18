
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ثبت نام | کنترل پنل</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <style>
    @font-face {
      font-family: Vazir;
      src: url('manager_filesdist/fonts/Vazir-FD-WOL.eot');
      src: url('manager_filesdist/fonts/Vazir-FD-WOL.eot?#iefix') format('embedded-opentype'),
      url('dist/fonts/Vazir-FD-WOL.woff') format('woff'),
      url('dist/fonts/Vazir-FD-WOL.ttf') format('truetype');
      font-weight: normal;
    }
    @font-face {
      font-family: Vazir;
      src: url('dist/fonts/Vazir-Bold-FD-WOL.eot');
      src: url('dist/fonts/Vazir-Bold-FD-WOL.eot?#iefix') format('embedded-opentype'),
      url('dist/fonts/Vazir-Bold-FD-WOL.woff') format('woff'),
      url('dist/fonts/Vazir-Bold-FD-WOL.ttf') format('truetype');
      font-weight: bold;
    }
  </style>
  <link rel="stylesheet" href="dist/css/bootstrap-theme.css">
  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="dist/css/rtl.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>




<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>
  


      @isset($done)
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> ثبت نام با موفقیت انجام شد</h4>
      برای ادامه وارد شوید
      </div>
      @endisset

      @isset($no_login)
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i>توجه</h4>
        {{ $no_login }}
      </div>
      @endisset



      <form action="log-in-check" method="post">
        @csrf


        @error('email')
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
          {{$message}}
        </div>
        @enderror
        @if(isset($mass_em))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
          {{$mass_em}}
        </div>
        @endif
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="ایمیل">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        @error('pass')
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
          {{$message}}
        </div>
        @enderror

        @if(isset($mass_pass))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
          {{$mass_pass}}
        </div>
        @endif

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="pass" placeholder="رمز عبور">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          {{-- <div class="col-xs-12">
            <div class="checkbox icheck">
              <label class="">
                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> مرا به خاطر بسپار
              </label>
            </div>
          </div> --}}
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
      <!-- /.social-auth-links -->
  
      {{-- <a href="#">رمز عبورم را فراموش کرده ام.</a><br> --}}
      <a href="sign-in" class="text-center">ثبت نام</a>
  
    </div>
    <!-- /.login-box-body -->
  </div>





<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>