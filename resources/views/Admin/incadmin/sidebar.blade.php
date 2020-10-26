
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

       @foreach($input1 as $found)
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/images/'.$found->image) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$found->f_name }} {{$found->l_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       @endforeach
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
         
       
         
        <li class="treeview">
          
            
             <li><a href="{{ URL::to('/project/memberrequest') }}"><i class="fa fa-files-o"></i> Member Request <span class="label label-primary pull-right">{{($count9)}}</span> </a>  </li>
            <li><a href="{{ URL::to('/project/foundnotification') }}"><i class="fa fa-files-o"></i> Found Item Notification <span class="label label-primary pull-right">{{($count7)}}</span> </a>  </li>
            <li><a href="{{ URL::to('/project/lostnotification') }}"><i class="fa fa-files-o"></i>Lost Item Notification  <span class="label label-primary pull-right">{{($count8)}}</span></a> </li>
           
            <li><a href="{{ URL::to('/project/adminindex') }}"><i class="fa fa-edit"></i>View Post</a></li>
        </li>
       
        <li class="treeview">
          
        </li>
         </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>