@extends('project/inc/header')



  @section('content')

            <section class="content">
               
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                          
                            <!-- POST -->
                             @foreach($resultFound as $data)
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="{{asset('/images/'.Auth::user()->image) }}" alt="" style="border-radius: 50%;height: 30px;width: 30px;" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div>
                                            {{Auth::user()->name}}
                                        </div>
                                    </div>
                                      
                                    <div class="posttext pull-left">
                                        <h2><a href="#">{{$data->category }}</a></h2>
                                        <p>Description:{{$data->l_description }}</p>
                                        <p>Date:{{$data->l_date }}</p>
                                        <p>Location:{{$data->l_location}}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                             @endforeach
                          </div>
                          <div class="col-lg-8 col-md-8">

                                  @foreach($results as $found)
                            <div class="post">


                              
                                <div class="wrap-ut pull-left">


                                    <div class="userinfo pull-left">

                                       <div class="avatar">
                                            <img src="{{asset('/images/'.Auth::user()->image) }}" alt="" style="border-radius: 50%;height: 30px;width: 30px;" />
                                            <div class="status green">&nbsp;</div>
                                             {{Auth::user()->name}}
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="posttext pull-left">
                                        <h2><a href="#">{{$found->category }}</a></h2>
                                        <p>Description:{{$found->f_i_description }}</p>
                                        <p>Date:{{$found->f_i_date }}</p>
                                        <p>Description:{{$found->f_location }}</p>
                                         <img src="{{asset('/images/'.$found->f_image) }}" alt="" style="border-radius: 50%;height: 100px;width: 80px;"/>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                             @endforeach
                        </div>


                            
                             </div>
                       


                        </div>
                    </div>
               




            </section>

           
     @stop   
