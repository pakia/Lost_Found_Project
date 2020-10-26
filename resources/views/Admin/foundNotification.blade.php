    

  <!-- Content Wrapper. Contains page content -->
 @extends('Admin/incadmin/header')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Found Item Post Approve Request
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      

      <div class="row">
        <div class="col-md-12">
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            
            <div class="box-body no-padding">
              <div class="row">
                
                
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="row">
            <div class="col-md-6">
              
            </div>
            <!-- /.col -->

            
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Found Item Post Request</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                   

                
                 
                 <table class="table no-margin">
                 
                  
                  
                   <thead>
                  <tr>
                    <th>post ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Date</th>
                     <th>Location</th>
                     <th>Image</th>
                    <th>Status</th>
                  
                  </tr>
                  </thead>
                 
                 
                  @foreach($founds as $found)
                   <tbody>
                  <tr>
                    <td>{{$found->id  }}</td>
                    <td>{{$found->category }}</td>
                    <td>{{$found->f_i_description }}</td>
                    <td>{{$found->f_i_date }}</td>
                    <td>{{$found->f_location }}</td>
                    <td><img src="{{asset('/images/'.$found->f_image) }}" alt="" style="border-radius: 50%;height: 100px;width: 80px;"/></td>
                    <td><span class="label label-info"><a href="approve&{{$found->id}}"> Approve </a>|<a onclick="return confirm('Are you sure to delete this post?')" href="removefound&{{$found->id}}"> Remove </a></span></td>
                   
                  </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
         
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        
      </div>
      <!-- /.row -->
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