<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @include('layout.admin.headcontent')
        

     
        <style type="text/css">
                  .jumbotron {
                    background-color: #337ab7;
                    color: #ffffff;
                    padding: 100px 25px;
                  }
                  .bg-grey {
                    background-color: #f6f6f6;
                    }
                    .container-fluid {
                    padding: 60px 50px;
                    }
                    .logo {
                      font-size: 100px;
                    }
                    @media screen and (max-width: 768px) {
                        .col-sm-4 {
                            text-align: center;
                            margin: 25px 0;
                        }
                    }

                .navbar {
                    margin-bottom: 0;
                    background-color: #337ab7;
                    z-index: 9999;
                    border: 0;
                    font-size: 12px !important;
                    line-height: 1.42857143 !important;
                    letter-spacing: 4px;
                    border-radius: 0;
                }

                .navbar li a, .navbar .navbar-brand {
                    color: #fff !important;
                }

                .navbar-nav li a:hover, .navbar-nav li.active a {
                    color: #f4511e !important;
                    background-color: #fff !important;
                }

                .navbar-default .navbar-toggle {
                    border-color: transparent;
                    color: #fff !important;
                } 
                .headbar {
                  
                    margin-bottom: 20px;
                    background-color: #ffffff;
                    border: 1px solid transparent;
                    padding: 0px 0px;
                    margin-top: 20px;
                }
                .mid-container {
                    padding:47px 16px;
                }
                .chart-report {
                    padding: 17px 28px;
                    padding-right: 20px !important;
                    padding-left: 20px !important;
                }
                .mid-row {
                        margin-right: -213px;
                        margin-left: -15px;
                }
               

</style>
    </head>
    <body>

<div class="container-fluid">

<!-- header section -->
<div class="row">
@include('layout.admin.header')
</div>
<!-- header end -->




<div class="row">
        <div class="col-md-2" style="padding-left: 0px;">
            @include('layout.admin.sidebar')
        </div>

        <div class="col-md-10">
        <section>
            @yield('content')
        </section>
        </div>
</div>
</div>

   


<div class="row">
<footer>
    @include('layout.admin.footer')
</footer>      
</div>
</div>