<!-- Content Wrapper. Contains page content -->
 @extends('Admin/incadmin/header')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Create Profile
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->


 


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                               <form action="createProfile" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                                   

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                           
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                      <label>Name:</label>
                                                        <input type="text" placeholder="First Name" class="form-control"  name="f_name"/>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                      <label></label>
                                                        <input type="text" placeholder="Last Name" class="form-control" name="l_name" />
                                                    </div>
                                                </div>
                                               
                                                 <br>
                                                 <div>
                                                  <label>About:</label>
                                                    <input type="text" placeholder="About" class="form-control" name="about"/>
                                                </div>
                                                <br>
                                                 <div>
                                                  <label>Email:</label>
                                                    <input type="text" placeholder="Email" class="form-control" name="email"/>
                                                </div>
                                                 <br>
                                                 <div>
                                                  <label>Image:</label>
                                                  <input type="file" name="image"/>
                                                 </div>
                                                 <br>
                                                  <input type="submit" name="submit" Value="Save" />

                                            </div>
                                             <br>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->

                                </form>
                            </div><!-- POST -->






                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            

                           
                            


                        </div>
                    </div>
                </div>



      </section>
    <!-- /.content -->
  </div>
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