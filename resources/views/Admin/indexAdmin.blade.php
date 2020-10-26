    

  <!-- Content Wrapper. Contains page content -->
 @extends('Admin/incadmin/header')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
       
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
              <h3 class="box-title">Approved</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                    <div class="box-footer clearfix">
             
              
                 <h3 class="box-title">Approved Member </h3>
                  <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    
                    <th>Status</th>
                  
                  </tr>
                  </thead>
                    @foreach($memb as $members)
                    @if($members->status==1)
                  <tbody>
                 
                 
                  
                  <tr>
                    <td>{{$members->id  }}</td>
                    <td>{{$members->name  }}</td>
                    <td>{{$members->email  }}</td>
                     <td><span class="label label-info">Approved</span></td>
                  </tr>
                  </tbody>
                     @endif
                  @endforeach
                 
                 
                </table>
                </div>
                
                <div class="box-footer clearfix">
             
              
                 <h3 class="box-title">Approved Lost Items Posts </h3>
                  <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>post ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Date</th>
                     <th>Location</th>
                    <th>Status</th>
                  
                  </tr>
                  </thead>
                   @foreach($input as $data)
                    @if($data->status==1)
                  <tbody>
                 
                 
                  
                  <tr>
                    <td>{{$data->id  }}</td>
                    <td>{{$data->category }}</td>
                    <td>{{$data->l_description }}</td>
                    <td>{{$data->l_date }}</td>
                    <td>{{$data->l_location}}</td>
                     <td><span class="label label-info">Approved</span></td>
                  </tr>
                  </tbody>
                     @endif
                  @endforeach
                 
                 
                </table>
                </div>

                  <div class="box-footer clearfix">
                <h3 class="box-title">Approved Found Items Posts </h3>
                 <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>post ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Date</th>
                     <th>Location</th>
                    <th>Status</th>
                  
                  </tr>
                  </thead>
                   
                 @foreach($founds as $found)
                 @if($found->status==1)
                
                   <tbody>
                  <tr>
                    <td>{{$found->id  }}</td>
                    <td>{{$found->category }}</td>
                    <td>{{$found->f_i_description }}</td>
                    <td>{{$found->f_i_date }}</td>
                    <td>{{$found->f_location }}</td>
                    <td><img src="{{asset('/images/'.$found->f_image) }}" alt="" style="border-radius: 50%;height: 100px;width: 80px;"/></td>
                    <td><span class="label label-info">Approved</span></td>
                   
                  </tr>
                  </tbody>
                       @endif
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


</html>
 @stop   