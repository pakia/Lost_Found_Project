 @extends('project/inc/header')



  @section('content')


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <h style="color:black; font-size:20px;">Edit Lost Item</h> 
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">




                            <!-- POST -->
                            <div class="post">
                                <form action="editlostitem&{{$input->id}}" class="form newtopic" method="post" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                 <img src="{{asset('/images/'.Auth::user()->image) }}" alt="" style="border-radius: 50%;height: 30px;width: 30px;" />
                                            <div class="status green">&nbsp;</div>
                                            </div>

                                           
                                        </div>
                                        <div class="posttext pull-left">

                                             <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                     <label>Category:</label>
                                                    <select name="category" id="category"   class="form-control" >
                                                        <option value="" disabled selected>{{ $input->category }}</option>
                                                        <option value="Calculator">Calculator</option>
                                                        <option value="ID Card">ID Card</option>
                                                         <option value="Pendrive">Pendrive</option>
                                                        <option value="Clearance">Clearance</option>
                                                         <option value="Walet">Walet</option>
                                                        <option value="Mobile">Mobile</option>
                                                         <option value="Others">Others</option>
                                                        
                                                    </select>
                                                </div>
                                                
                                            </div>


                                            <div>
                                                 <label>Description:</label>
                                                <textarea name="l_description" id="desc" placeholder="{{ $input->l_description }}"  class="form-control" ></textarea>
                                            </div>
                                            <div>
                                                 <label>Date:</label>
                                                <input type="text" name="l_date" value="{{ $input->l_date }}" placeholder="Lost Item Date" class="form-control" />
                                            </div>
                                            <div>
                                                 <label>Location:</label>
                                                <input type="text" name="l_location" value="{{ $input->l_location }}" placeholder="Lost Item Location" class="form-control" />
                                            </div>
                                            


                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                       

                                        

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><input type="submit" name="submit" class="btn btn-primary" Value="Post" /></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->

                           
                           






                        </div>
                        
                    </div>
                </div>



               

            </section>
            

  @stop 