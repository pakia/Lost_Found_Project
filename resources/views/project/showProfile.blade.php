@extends('project/inc/header')



  @section('content')

            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">My Profile</a> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="postinfotop">
                                        <h2>My Profile</h2>
                                    </div>

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                          
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php
                                        $da= Auth::user()->image; ?>

                                                    @if(empty($da))

                                                <image src="{{asset('frontendadmin/images/blankImage.png')}}" alt="" style="border-radius:50%;height:70px; " ><a class="" href="editimage&{{Auth::user()->id}}" title="" data-ripple=""><i class="fa fa-plus" style="color:#008CBA;" >Add Image</i></a>


                                                    @else
                                        
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                <div class="avatar">
                                                    <img src="{{asset('/images/'.Auth::user()->image) }}" alt="" style="border-radius: 50%;height: 60px;width: 60px;" /><a class="" href="editimage&{{Auth::user()->id}}" title="" data-ripple=""><i class="fa fa-pencil" style="color:#008CBA;" ></i></a>
                                                    @endif

                                                    <div class="status green">&nbsp;</div>
                                                </div>
                                                
                                            </div>
                                            @foreach($input as $data)
                                            <div class="posttext pull-left">
                                               <a class="" href="editprofile&{{Auth::user()->id}}" title="" data-ripple=""> <i class="fa fa-pencil" style="color:#008CBA;" ></i></a>

                                                 <div class="posttext pull-left">
                                        
                                        <p><font color="black">First Name:</font> {{$data->first_name  }}</p>
                                        <p><font color="black"> Last Name: </font>{{$data->last_name  }}</p>
                                         <p><font color="black">Department:</font> {{$data->department  }}</p>
                                        <p><font color="black"> Batch:</font>  {{$data->batch  }}</p>
                                        <p><font color="black"> Section:</font>  {{$data->section }}</p>
                                         <p><font color="black">  Email:</font>  {{$data->email  }}</p>
                                    </div>
                                                 
                                                
                                               
                                              

                                             
                                               
                                              
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                     @endforeach
                                    </div><!-- acc section END -->




            </section>

            @stop 
