@extends('project/inc/header')



  @section('content')

            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">My Image</a> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                               <form action="editimage&{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                                   

                                    <!-- acc section -->
                                    <div class="accsection">
                                       
                                        <div class="topwrap">
                                            
                                                 <div>
                                                     <label style="font-size: 18px ;color:#008CBA;">Upload Image:</label>   
                                                    <input type="file" name="image"/>
                                                </div>
                                                 <br>
                                                  <input type="submit" name="submit" Value="Save" />

                                            </div>
                                             <br>
                                            <div class="clearfix"></div>
                                        </div> 
                                         </form> 
                                    </div><!-- acc section END -->

                               
                            </div><!-- POST -->



</div>


                        </div>

            </section>

            @stop 
