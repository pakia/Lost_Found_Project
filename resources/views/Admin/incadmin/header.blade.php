<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2019 18:50:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ URL::asset('adminfrontend/dist/css/skins/_all-skins.min.css') }}">

 

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ URL::to('/project/adminindex') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
             @foreach($input1 as $found)
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('/images/'.$found->image) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Sohana Kabir</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('/images/'.$found->image) }}" class="img-circle" alt="User Image">

                <p>
                 {{$found->f_name }} {{$found->l_name }} - {{$found->about }}
                  <small>Member since {{date('F d,Y',strtotime($found->created_at))}}</small>
                </p>
              </li>
              
             @endforeach
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ URL::to('/admin/createProfile') }}" class="btn btn-default btn-flat">Create Profile</a>
                </div>
                <div class="pull-left">
                  <a href="{{ URL::to('/admin/showadminprofile') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right"> 
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat"><i class="ti-power-off"></i> Sign out</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  
@include('Admin/incadmin/sidebar')

 
  @yield('content')
   @include('Admin/incadmin/footer')