<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>هشدار</title>
    <link rel="stylesheet" href="dist/css/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="dist/css/rtl.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">







    <style>
        @font-face {
            font-family: irsens;
            src: url(font/IRANSansWeb.woff);
        }
        body{
            background:#f0f0f0;
            font-family: irsens;
        }
        .all{
            position: relative;
            width: 100%;
            top: calc(50% - 100px);
        }
        .all .boxx{
            position: relative;
            width:600px;
            height: 200px;
            right: calc(50% - 300px);
        }
        @media(max-width:600px){
            body{
                background: #fff;
            }
            .all .boxx{
                width: 100%;
                right:0;
            }
        }
    </style>
</head>
<body>
    <div class="all">
        <div class="boxx">




            @if ($_GET['mass'] == 0)
                                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>مسدود شده اید</h3>
      
                    <p>مدیر وب سایت حساب کاربری شما را مسدود کرده است</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-ban"></i>
                  </div>
                  <a href="tel:09150567825" class="small-box-footer">
                    برای رفع مسدودیت کلیک کنید <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
            @endif
            
            @if ($_GET['mass'] == 1)
                                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>در انتظار تایید </h3>
      
                    <p>مدیریت وبسایت درحال برسی اطلاعات شما میباشد</p>
                  </div>
                  <div class="icon">
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                      </div>
                  </div>
                </div>
            @endif

            @if ($_GET['mass'] == 3)
            <div class="small-box bg-red">
              <div class="inner">
                <h3>دسترسی غیر مجاز</h3>
  
                <p> شما اجازه دسترسی به این صفحه را ندارید </p>
              </div>
              <div class="icon">
                <i class="fa fa-ban"></i>
              </div>
              <a href="/log-in" class="small-box-footer">
                برای انتقال به صفحه ورود کلیک کنید <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
            @endif



        </div>
    </div>
</body>
</html>