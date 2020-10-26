@extends('project/inc/header')



  @section('content')

            <section class="content">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <h style="color:black; font-size:20px;">Create Profile</h> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                               <form action="createAccount" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                                   

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                
                                                
                                                   
                                                   
                                                </div>
                                            </div>
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                      <label>Name:</label>
                                                        <input type="text" placeholder="First Name" class="form-control"  name="first_name"/>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                      <label></label>
                                                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" />
                                                    </div>
                                                </div>
                                                <br>
                                                <div>
                                                   <label>Department:</label>
                                                    <input type="text" placeholder="Department" class="form-control" name="department" />
                                                </div>
                                                 <br>
                                                 <div>
                                                  <div>
                                                  <label>Batch:</label>
                                                  </div>

                                                    <input type="text" placeholder="Batch" class="form-control" name="batch" />
                                                </div>
                                                 <br>
                                                 <div>
                                                  <label>Section:</label>
                                                    <input type="text" placeholder="Section " class="form-control"  name="section"/>
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

            @stop 