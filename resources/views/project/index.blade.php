@extends('project/inc/header')



  @section('content')

            <section class="content">
               


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                          
                            <!-- POST -->
                             @foreach($input as $data)
                              @if($data->status==1)
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="{{asset('/images/'.$data->usr_image) }}" alt="" style="border-radius: 50%;height: 30px;width: 30px;" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div>
                                            <font color="black">{{$data->usr_name}}</font>
                                        </div>
                                    </div>
                                      
                                    <div class="posttext pull-left">
                                        <h2><a href="#"><font color="black">{{$data->category }}</font></a></h2>
                                        <p><font color="black">Description:{{$data->l_description }}</font></p>
                                        <p><font color="black">Date:{{$data->l_date }}</font></p>
                                        <p><font color="black">Location:{{$data->l_location}}</font></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    
                                     <div class="views">
                                   <div><a class="" href="editlostitem&{{$data->id}}" title="" data-ripple=""><i class="fa fa-pencil" style="color:#008CBA;" ></i></a></div>
                               </div>

                                <div class="views">
                                   <div><a onclick="return confirm('Are you sure to delete this post?')" class="" href="deletelostitem&{{ ($data->id)}}" title="" data-ripple=""><i class="fa fa-trash" style="color:#008CBA;"></i></a></div>
                               </div>
                                    
                                    <div class="time"><i class="fa fa-clock-o" style="color:#008CBA;"></i><font color="black"> {{Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</font></div> 

                                    <div class="time"><i class="fa fa-calender" style="color:#008CBA;"></i><font color="black"> {{date('F d,Y',strtotime($data->created_at))}}</font></div>
                                


                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                             @endif
                             @endforeach
                          
                       

                                  @foreach($founds as $found)
                                  @if($found->status==1)
                            <div class="post">


                              
                                <div class="wrap-ut pull-left">


                                    <div class="userinfo pull-left">

                                       <div class="avatar">
                                            <img src="{{asset('/images/'.$found->u_image) }}" alt="" style="border-radius: 50%;height: 30px;width: 30px;" />
                                            <div class="status green">&nbsp;</div>
                                             <font color="black">{{$found->u_name}}</font>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="posttext pull-left">
                                        <h2><a href="#">{{$found->category }}</a></h2>
                                        <p><font color="black">Description:{{$found->f_i_description }}</font></p>
                                        <p><font color="black">Date:{{$found->f_i_date }}</font></p>
                                        <p><font color="black">Description:{{$found->f_location }}</font></p>
                                         <img src="{{asset('/images/'.$found->f_image) }}" alt="" style="border-radius: 50%;height: 100px;width: 80px;"/>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    
                                    <div class="views">
                                   <div><a class="" href="editfounditem&{{$found->id}}" title="" data-ripple=""><i class="fa fa-pencil" style="color:#008CBA;" ></i></a></div>
                               </div>

                               <div class="views">
                                   <div><a onclick="return confirm('Are you sure to delete this post?')" class="" href="deletefounditem&{{ ($found->id)}}" title="" data-ripple=""><i class="fa fa-trash" style="color:#008CBA;" ></i></a></div>
                               </div>
                                    
                                    <div class="time"><i class="fa fa-clock-o" style="color:#008CBA;"></i><font color="black">{{Carbon\Carbon::parse($found->created_at)->diffForHumans()}}</font></div> 
                                      <div class="time"><i class="fa fa-calender" style="color:#008CBA;"></i><font color="black"> {{date('F d,Y',strtotime($found->created_at))}}</font></div>                                   
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                            @endif
                             @endforeach
                        </div>


                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="{{URL::to('/project/calculator') }}">Calculator <span class="badge pull-right">{{($count)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/idcard') }}">Id Card <span class="badge pull-right">{{($count1)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/pendrive') }}">Pendrive<span class="badge pull-right">{{($count2)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/clearance') }}">Clearance<span class="badge pull-right">{{($count3)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/walet') }}">Walet  <span class="badge pull-right">{{($count4)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/mobile') }}">Mobile <span class="badge pull-right">{{($count5)}}</span></a></li>
                                        <li><a href="{{URL::to('/project/others') }}">Others <span class="badge pull-right">{{($count6)}}</span></a></li>
                                    </ul>
                                </div>
                            </div>

                             
                              </div>
                            
                             </div>
                       


                        </div>
                 
               


               
            </section>

           
     @stop   
