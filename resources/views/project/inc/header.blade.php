<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lost and Found Portal</title>

        <!-- Bootstrap -->
        <link href="{{ URL::asset('frontendadmin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{ URL::asset('frontendadmin/css/custom.css') }}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::asset('frontendadmin/font-awesome-4.0.3/css/font-awesome.min.css') }}">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/style.css') }}" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/rs-plugin/css/settings.css') }}" media="screen" />

    </head>
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>  
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('frontendadmin/images/slide.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="{{URL::to('/project/index') }}"><img src="{{asset('frontendadmin/images/logo.jpg') }}" alt=""  /></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="stnt pull-left"> 
                                <a data-toggle="dropdown" href="#" >Found & Lost Portal</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/project/postlostItem') }}">Post Lost Item</a> </li>                           
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/project/postfoundItem') }}">Post Found Item</a></li>
                                 
                            </ul>

                                
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">

                            <div class="wrap">

                                <form action="search" method="post" class="form" enctype="multipart/form-data">
                                     {{ csrf_field() }}

                                    <div class="pull-left txt"><input type="text" placeholder="search by category" class="form-control" name="s"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></div>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                       <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                           
                           

                            <div class="avatar pull-left dropdown">
                                <a data-toggle="dropdown" href="#"><img src="{{asset('/images/'.Auth::user()->image) }}" alt="" style="border-radius: 50%;height: 50px;width: 50px;" /><b class="caret"></b>
                                <div class="status green">&nbsp;</div>
                                <ul class="dropdown-menu" role="menu">
                                      <li role="presentation"><a role="menuitem" tabindex="-4" href="{{URL::to('/createAccount') }}">Create profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('/project/showProfile') }}">My Profile</a></li>
                                   
                                    <li role="presentation"> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                  
                                </ul>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
          @yield('content')
 @include('project/inc/footer')