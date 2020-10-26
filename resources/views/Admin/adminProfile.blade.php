<!-- Content Wrapper. Contains page content -->
 @extends('Admin/incadmin/header')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Admin Profile
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->





                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">


                                 @foreach($input as $data)
                            <!-- POST -->
                            <div class="post">
                                
                                    <div class="userinfo pull-left">
                                                <div class="avatar">
                                                    <img src="{{asset('/images/'.$data->image) }}" alt="" style="border-radius: 50%;height: 60px;width: 60px;" /><a class="" href="editadminimage&{{$data->id}}" title="" data-ripple=""><i class="fa fa-pencil" style="color:#008CBA;" ></i></a>
                                                  

                                                    <div class="status green">&nbsp;</div>
                                                </div>
                                                
                                            </div>
                                             <div class="posttext pull-left">

                                            <a class="" href="editadmin&{{$data->id}}" title="" data-ripple=""><i class="fa fa-pencil" style="color:#008CBA;" ></i></a>

                                     <div class="posttext pull-left">

                                      
                                        
                                        <p><font color="black">First Name: </font>{{$data->f_name  }}</p>
                                        <p><font color="black"> Last Name:</font>{{$data->l_name  }}</p>
                                        <p><font color="black"> About:</font> {{$data->about  }}</p>
                                         <p><font color="black">  Email: </font> {{$data->email  }}</p>
                                    </div>
                                      
                                         </div>  
                                          </div>  
                                     @endforeach
                                    </div><!-- acc section END -->


   </div>
 </div>
      </section>
    <!-- /.content -->
     
  
  <!-- /.content-wrapper -->

 

 
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('adminfrontend/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('adminfrontend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('adminfrontend/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('adminfrontend/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('adminfrontend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('adminfrontend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('adminfrontend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('adminfrontend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('adminfrontend/bower_components/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('adminfrontend/dist/js/pages/dashboard2.js') }}"></script>

</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2019 18:51:13 GMT -->
</html>
 @stop   